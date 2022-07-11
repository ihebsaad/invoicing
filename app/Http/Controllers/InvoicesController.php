<?php
  
namespace App\Http\Controllers;
   
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Quote;
use App\Models\Product;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\CustomersController;

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
        $customer_id=0;
        return view('invoices.create',compact('customers','countries','customer_id'));
    }
    
    public function add($customer_id)
    {
        if (auth()->user()->user_type != 'admin') 
            return  redirect('/home');

        $customers = Customer::all();
        $countries = CustomersController::countries();

        return view('invoices.create',compact('customers','countries','customer_id'));
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
        
        return redirect()->route('invoices.edit',['invoice'=>$invoice])
                        ->with('success','Facture créée');
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
        $products = Product::all();
        $items = Item::where('invoice',$invoice->id)->get();
        $countries=CustomersController::countries();
        return view('invoices.edit',compact('invoice','customers','products','items','countries'));
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
    
        return redirect()->route('invoices.edit',['invoice'=>$invoice])
                        ->with('success','Facture modifié');
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
	

    public function show_pdf($id)
	{   
        $invoice = Invoice::find($id);
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $reference= $invoice->reference ;
        $user= User::find($invoice->par) ; $par = $user->name.' '.$user->lastname;
        $items = Item::where('invoice',$id)->get();
        $pdf = PDF::loadView('invoices.invoice', compact('invoice','reference','date_facture','items','par'));
        return $pdf->stream('Facture-'.$reference.'.pdf');

    }

    public function download_pdf($id)
	{   
        $invoice = Invoice::find($id);
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        $reference= $invoice->reference ;
        $user= User::find($invoice->par) ; $par = $user->name.' '.$user->lastname;

        $items = Item::where('invoice',$id)->get();

        $pdf = PDF::loadView('invoices.invoice', compact('invoice','reference','date_facture','items'));
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
        $type_aide=$request->get('type_aide');
        $net=$request->get('net');
        $tva_remise=$request->get('tva_remise');
        

        Invoice::where('id',$invoice)->update(
            [
                'total_ht'=>$total_ht,
                'total_tva'=>$total_tva,
                'remise'=>$remise,
                'total_ttc'=>$total_ttc,
                'total_remise'=>$total_remise,
                'aide'=>$aide,
                'type_aide'=>$type_aide,
                'net'=>$net,
                'tva_remise'=>$tva_remise,
            ]
        );
    }
}