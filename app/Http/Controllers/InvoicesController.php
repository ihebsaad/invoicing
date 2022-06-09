<?php
  
namespace App\Http\Controllers;
   
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Quote;
use App\Models\Product;
use App\Models\Item;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $customers = Customer::all();
        return view('invoices.create',compact('customers'));
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
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');
    
        Invoice::create($data);
     
        return redirect()->route('invoices.index')
                        ->with('success','Facture créée avec succès.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
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
        $customers = Customer::all();
        $products = Product::all();
        $items = Item::where('invoice',$invoice->id)->get();
        return view('invoices.edit',compact('invoice','customers','products','items'));
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
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');

        $invoice->update($data);
    
        return redirect()->route('invoices.index')
                        ->with('success','Facture modifiée avec succès');
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
                        ->with('success','Facture supprimée avec succès');
    }
	

    public function show_pdf($id)
	{   
        $invoice = Invoice::find($id);
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        //$reference= $date.'-'.sprintf('%05d',$invoice->id);
        $reference= sprintf('%05d',$invoice->id);
        $pdf = PDF::loadView('invoices.invoice', compact('invoice','reference','date_facture'));
        return $pdf->stream('Facture-'.$reference.'.pdf');

    }

    public function download_pdf($id)
	{   
        $invoice = Invoice::find($id);
        $date=Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture=Carbon::parse($invoice->date)->format('d/m/Y');
        //$reference= $date.'-'.sprintf('%05d',$invoice->id);
        $reference= sprintf('%05d',$invoice->id) ;
        $pdf = PDF::loadView('invoices.invoice', compact('invoice','reference','date_facture'));
        return $pdf->download('Facture-'.$reference.'.pdf');

    }
}