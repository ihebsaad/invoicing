<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Item;
use App\Models\User;
use App\Models\Modele;
use App\Models\Article;
use App\Models\Door;
use App\Models\Porte;
use App\Models\Shutter;
use App\Models\Volet;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\CustomersController;

class QuotesController extends Controller
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
            $quotes = Quote::where('par',auth()->user()->id)->orderBy('id','desc')->limit(100)->get();
        else
        $quotes = Quote::orderBy('id','desc')->limit(100)->get();

        return view('quotes.index',compact('quotes'));
    }


    public function all()
    {
        if (auth()->user()->user_type != 'admin')
            $quotes = Quote::where('par',auth()->user()->id)->orderBy('id','desc')->get();
        else
        $quotes = Quote::orderBy('id','desc')->get();

        return view('quotes.index',compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $countries = CustomersController::countries();
        $commercials=User::where('user_type','<>','admin')->get();
        $customer_id=0;
        return view('quotes.create',compact('customers','countries','customer_id','commercials'));
    }


    public function add($customer_id)
    {
        $customers = Customer::all();
        $countries = CustomersController::countries();
        $commercials=User::where('user_type','<>','admin')->get();

        return view('quotes.create',compact('customers','countries','customer_id','commercials'));
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
        $name=strtoupper(User::find($data['par'])->name);
        $lastname=strtoupper(User::find($data['par'])->lastname);
        $num=Quote::where('par',$data['par'])->where('created_at','like',  date('Y-m-d').'%')->count()+1;
        $reference= date('Ymd').$name[0].$lastname[0].sprintf('%03d',$num);
        $data['reference']=$reference;
        $quote=Quote::create($data);
        if($quote->menuiserie>0)
            return redirect()->route('quotes.edit_men',['id'=>$quote->id])->with('success','Devis créé avec succès.');
        else
            return redirect()->route('quotes.edit',['quote'=>$quote])->with('success','Devis créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('quotes.show',compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        $customers = Customer::all();
        $products = Product::all();
        $items = Item::where('quote',$quote->id)->get();
        $countries=CustomersController::countries();
        return view('quotes.edit',compact('quote','customers','products','items','countries'));
    }

    public function edit_men($id)
    {
        $quote=Quote::find($id);
        $customers = Customer::all();
        $modeles = Modele::all();
        $doors = Door::all();
        $shutters = Shutter::all();
        $articles = Article::where('quote',$quote->id)->get();
        $portes = Porte::where('quote',$quote->id)->get();
        $volets = Volet::where('quote',$quote->id)->get();
        $countries=CustomersController::countries();
        $items = Item::where('quote',$quote->id)->get();

        return view('quotes.edit_men',compact('quote','customers','articles','modeles','countries','doors','portes','volets','shutters','items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        $data=$request->all();

        if(isset($data['date'])){
        $data['date']=str_replace('/','-',$data['date']);
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');
        }

        $quote->update($data);
        if($quote->menuiserie>0)
            return redirect()->route('quotes.edit_men',['id'=>$quote->id])->with('success','Devis modifié');
        else
            return redirect()->route('quotes.edit',['quote'=>$quote])->with('success','Devis modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Quote $quote)
    {
        $quote->delete();
        return back()->with('success', 'Devis supprimé');
    }



    public function update_totals(Request $request)
    {
        $total_ht=$request->get('total_ht');
        $total_tva=$request->get('total_tva');
        $total_ttc=$request->get('total_ttc');
        $total_remise=$request->get('total_remise');
        $remise=$request->get('remise');
        $deplacement=$request->get('deplacement');
        $total_deplacement=$request->get('total_deplacement');
        $tva_deplacement=$request->get('tva_deplacement');
        $quote=$request->get('quote');
        $aide=$request->get('aide');
        $aide_renov=$request->get('aide_renov');
        $aide_cee=$request->get('aide_cee');
        $net=$request->get('net');
        $acompte=$request->get('acompte');
        $tva_remise=$request->get('tva_remise');
        $loi=$request->get('loi');
        $total_loi=$request->get('total_loi');
        $surface=$request->get('surface');

        Quote::where('id',$quote)->update(
            [
                'total_ht'=>$total_ht,
                'total_tva'=>$total_tva,
                'remise'=>$remise,
                'total_ttc'=>$total_ttc,
                'total_remise'=>$total_remise,
                'total_deplacement'=>$total_deplacement,
                'tva_deplacement'=>$tva_deplacement,
                'deplacement'=>$deplacement,
                'surface_produits'=>$surface,
                'aide'=>$aide,
                'aide_renov'=>$aide_renov,
                'aide_cee'=>$aide_cee,
                'net'=>$net,
                'acompte'=>$acompte,
                'tva_remise'=>$tva_remise,
                'loi'=>$loi,
                'total_loi'=>$total_loi,
            ]
        );
    }


    public function show_pdf($id)
	{
        $invoice = Quote::find($id);
        $type='Devis';
        $reference= $invoice->reference;
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $format='sanssignature';
        $items = Item::where('quote',$id)->get();
        $articles = Article::where('quote',$id)->get();
        $portes = Porte::where('quote',$id)->get();
        $volets = Volet::where('quote',$id)->get();

        $count=count($items);

        if($invoice->menuiserie>0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice','type','reference','date_facture','articles','par','count','portes','volets','items','format'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice','type','reference','date_facture','items','par','count','portes','volets','items','format'));

        return $pdf->stream('quote-'.$id.'.pdf');

    }


    public function show_pdf_tva($id)
	{
        $invoice = Quote::find($id);
        $type='Devis';
        $reference= $invoice->reference;
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $format='sanssignature';
        $items = Item::where('quote',$id)->get();
        $articles = Article::where('quote',$id)->get();
        $portes = Porte::where('quote',$id)->get();
        $volets = Volet::where('quote',$id)->get();

        $count=count($items);

        $pdf = PDF::loadView('invoices.invoice_tva', compact('invoice','type','reference','date_facture','items','par','count','portes','volets','items','format'));

        return $pdf->stream('quote-'.$id.'.pdf');

    }

    public function download_pdf($id)
	{
        $invoice = Quote::find($id);
        $type='Devis';
        $reference= $invoice->reference;
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $format='sanssignature';
        $items = Item::where('quote',$id)->get();
        $articles = Article::where('quote',$id)->get();
        $portes = Porte::where('quote',$id)->get();
        $volets = Volet::where('quote',$id)->get();

        $count=count($items);

        if($invoice->menuiserie>0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice','type','reference','date_facture','articles','par','count','portes','volets','items','format'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice','type','reference','date_facture','items','par','count','portes','volets','items','format'));

        return $pdf->download('quote-'.$id.'.pdf');

    }

    public function download_pdf_signature($id)
	{
        $invoice = Quote::find($id);
        $type='Devis';
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $user= User::find($invoice->par) ;
        if (isset($user))
            $par = $user->name.' '.$user->lastname;
        else
            $par ='';

        $format='avecsignature';
        $reference= $invoice->reference;
        $items = Item::where('quote',$id)->get();
        $articles = Article::where('quote',$id)->get();
        $portes = Porte::where('quote',$id)->get();
        $volets = Volet::where('quote',$id)->get();
        $count=count($items);

        if($invoice->menuiserie>0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice','type','reference','date_facture','articles','par','count','portes','volets','items','format'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice','type','reference','date_facture','items','par','count','portes','volets','items','format'));

        //$pdf = PDF::loadView('quotes.quote', compact('invoice','type','reference','date_facture','items','par','count'));
        return $pdf->download('quote-'.$reference.'.pdf');

    }

    public function save_invoice($id)
	{
        $quote = Quote::find($id);

        $user_id=auth()->user()->id;
        $name=strtoupper(User::find($user_id)->name);
        $lastname=strtoupper(User::find($user_id)->lastname);
        $num=Invoice::where('par',$user_id)->where('created_at','like',  date('Y-m-d').'%')->count()+1;

        $invoice=Invoice::create([
            'description'=>$quote->description,
            'adresse'=>$quote->adresse,
            'chaudiere'=>$quote->chaudiere,
            'modalite'=>$quote->modalite,
            'date'=>$quote->date,
            'tva'=>$quote->tva,
            'remise'=>$quote->remise,
            'total_tva'=>$quote->total_tva,
            'total_remise'=>$quote->total_remise,
            'tva_remise'=>$quote->tva_remise,
            'deplacement'=>$quote->deplacement,
            'tva_deplacement'=>$quote->tva_deplacement,
            'total_deplacement'=>$quote->total_deplacement,
            'total_ht'=>$quote->total_ht,
            'total_ttc'=>$quote->total_ttc,
            'aide_cee'=>$quote->aide_cee,
            'aide_renov'=>$quote->aide_renov,
            'aide'=>$quote->aide,
            'surface_produits'=>$quote->surface_produits,
            'montant_finance'=>$quote->montant_finance,
            'report_echeance'=>$quote->report_echeance,
            'mensualites'=>$quote->mensualites,
            'montant_mensuel'=>$quote->montant_mensuel,
            'montant_assurance'=>$quote->montant_assurance,
            'taux_nominal'=>$quote->taux_nominal,
            'taeg'=>$quote->taeg,
            'pose'=>$quote->pose,
            'customer'=>$quote->customer,
            'net'=>$quote->net,
            'quote'=>$quote->id,
            'acompte'=>$quote->acompte,
            'loi'=>$quote->loi,
            'total_loi'=>$quote->total_loi,

        ]);

        $reference= date('Y-m-').sprintf('%04d',$id);
        $invoice->reference=$reference;
        $invoice->save();

        $items = Item::where('quote',$id)->get();
        foreach($items as $item){
            Item::create([
            'qty'=>$item->qty,
            'description'=>$item->description,
            'tva'=>$item->tva,
            'product'=>$item->product,
            'invoice'=>$invoice->id,
            ]);
        }

        return redirect()->route('invoices.index')
        ->with('success','Facture enregistrée en devis');
    }


    public function ajout_signature(Request $request)
    {
        $id= $request->get('quote');

        $name='';
        if($request->file('devis_signe')!=null)
        {$file=$request->file('devis_signe');
         $name =  $file->getClientOriginalName();
         $path = public_path()."/fichiers/";

          $file->move($path, $name);
        }
          Quote::where('id', $id)->update(array('devis_signe' => $name));

          return back()->with('success', 'Fichier enregistré');
    }
}