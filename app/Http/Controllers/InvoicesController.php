<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Quote;
use App\Models\Product;
use App\Models\Item;
use App\Models\User;
use App\Models\Modele;
use App\Models\Article;
use App\Models\Door;
use App\Models\Porte;
use App\Models\Shutter;
use App\Models\Volet;
use App\Services\SendMail;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Storage;

class InvoicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->user_type != 'admin')
			return  redirect('/home');

        $invoices = Invoice::orderBy('id','desc')->get();

        return view('invoices.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        $customers = Customer::all();
        $countries = CustomersController::countries();
        $commercials=User::where('user_type','<>','admin')->get();
        $customer_id=0;
        return view('invoices.create',compact('customers','countries','customer_id','commercials'));
    }

    public function add($customer_id)
    {
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        $customers = Customer::all();
        $countries = CustomersController::countries();
        $commercials=User::where('user_type','<>','admin')->get();
        return view('invoices.create',compact('customers','countries','customer_id','commercials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required',
        ]);

        $data=$request->all();
        $data['date']=str_replace('/','-',$data['date']);
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');


        $invoice=Invoice::create($data);
        $id=$invoice->id;

        $reference= date('Y-m-').sprintf('%04d',$id);
        $invoice->reference=$reference;
        $invoice->save();
        if($invoice->menuiserie>0)
            return redirect()->route('invoices.edit_men',['id'=>$invoice->id])->with('success','Facture créée');
        else
            return redirect()->route('invoices.edit',['invoice'=>$invoice])->with('success','Facture créée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        return view('invoices.show',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        $customers = Customer::all();

        if(auth()->user()->user_type=='admin')
            $products = Product::all();
        elseif(auth()->user()->user_type=='user')
            $products = Product::where('affichage',1)->orWhere('affichage',2)->get();
        elseif(auth()->user()->user_type=='telepro')
            $products = Product::where('affichage',1)->orWhere('affichage',3)->get();

        $items = Item::where('invoice',$invoice->id)->get();
        $countries=CustomersController::countries();
        return view('invoices.edit',compact('invoice','customers','products','items','countries'));
    }


    public function edit_men($id)
    {
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        $invoice=Invoice::find($id);
        $customers = Customer::all();
        $modeles = Modele::all();
        $portes = Porte::where('invoice',$invoice->id)->get();
        $volets = Volet::where('invoice',$invoice->id)->get();
        $doors = Door::all();
        $shutters = Shutter::all();
        $articles = Article::where('invoice',$invoice->id)->get();
        $items = Item::where('invoice',$invoice->id)->get();
        $countries=CustomersController::countries();

        return view('invoices.edit_men',compact('invoice','customers','modeles','articles','countries','doors','portes','shutters','volets','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {

        $data=$request->all();

        $data['date']=str_replace('/','-',$data['date']);
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');

        $invoice->update($data);

        if($invoice->menuiserie>0)
            return redirect()->route('invoices.edit_men',['id'=>$invoice->id])->with('success','Facture modifiée');
        else
            return redirect()->route('invoices.edit',['invoice'=>$invoice])->with('success','Facture modifiée');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoices.index')
                        ->with('success','Facture supprimée');
    }


    public function send_pdf($id)
	{
        $invoice = Invoice::find($id);
        $type='Facture';
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $reference= $invoice->reference ;
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $items = Item::where('invoice',$id)->get();
        $articles = Article::where('invoice',$id)->get();
        $portes = Porte::where('invoice',$id)->get();
        $volets = Porte::where('invoice',$id)->get();

        $count=count($items);
        if($invoice->menuiserie>0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice','type','reference','date_facture','articles','par','count','portes','volets','items'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice','type','reference','date_facture','items','par','count','portes','volets','items'));

        $customer_id=$invoice->customer;
        $customer=Customer::find($customer_id);
        $content =  $pdf->output();

        $path = storage_path('pdf/');
        $fileName =  'facture-'.$id.'.pdf' ;
        $pdf->save($path . '/' . $fileName);


        SendMail::send_pdf(trim($customer->email),'Facture Groupe Her','Bonjour '.$customer->civility.' '.$customer->lastname.' '.$customer->name.',<br>Trouvez ci joint votre facture.<br><br>L\'équipe Groupe Her.',$id);

        return redirect()->route('invoices.index')
        ->with('success','Facture envoyée !');

    }

    public function show_pdf($id)
	{
        $invoice = Invoice::find($id);
        $type='Facture';
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $reference= $invoice->reference ;
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $items = Item::where('invoice',$id)->get();
        $articles = Article::where('invoice',$id)->get();
        $portes = Porte::where('invoice',$id)->get();
        $volets = Volet::where('invoice',$id)->get();

        $count=count($items);
        if($invoice->menuiserie>0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice','type','reference','date_facture','articles','par','count','portes','volets','items'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice','type','reference','date_facture','items','par','count','portes','volets','items'));

        return $pdf->stream('Facture-'.$reference.'.pdf');

    }

    public function download_pdf($id)
	{
        $invoice = Invoice::find($id);
        $type='Facture';
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $reference= $invoice->reference ;
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $items = Item::where('invoice',$id)->get();
        $articles = Article::where('invoice',$id)->get();
        $portes = Porte::where('invoice',$id)->get();
        $volets = Volet::where('invoice',$id)->get();

        $count=count($items);
        if($invoice->menuiserie>0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice','type','reference','date_facture','articles','count','par','count','portes','volets','items'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice','type','reference','date_facture','items','count','par','count','portes','volets','items'));

        return $pdf->download('Facture-'.$reference.'.pdf');

    }


    public function update_totals(Request $request)
    {
        $total_ht=$request->get('total_ht');
        $total_tva=$request->get('total_tva');
        $total_ttc=$request->get('total_ttc');
        $total_remise=$request->get('total_remise');
        $remise=$request->get('remise');
        $invoice=$request->get('invoice');
        $aide=$request->get('aide');
        $aide_renov=$request->get('aide_renov');
        $aide_cee=$request->get('aide_cee');
        $protocole=$request->get('protocole');
        $total_protocole=$request->get('total_protocole');
        $tva_protocole=$request->get('tva_protocole');
        $net=$request->get('net');
        $acompte=$request->get('acompte');
        $tva_remise=$request->get('tva_remise');
        $loi=$request->get('loi');
        $total_loi=$request->get('total_loi');

        Invoice::where('id',$invoice)->update(
            [
                'total_ht'=>$total_ht,
                'total_tva'=>$total_tva,
                'remise'=>$remise,
                'total_ttc'=>$total_ttc,
                'total_remise'=>$total_remise,
                'aide'=>$aide,
                'aide_renov'=>$aide_renov,
                'aide_cee'=>$aide_cee,
                'protocole'=>$protocole,
                'total_protocole'=>$total_protocole,
                'tva_protocole'=>$tva_protocole,
                'net'=>$net,
                'acompte'=>$acompte,
                'tva_remise'=>$tva_remise,
                'loi'=>$loi,
                'total_loi'=>$total_loi,
            ]
        );
    }
}