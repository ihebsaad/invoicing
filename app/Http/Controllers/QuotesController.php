<?php
  
namespace App\Http\Controllers;
   
use App\Models\Quote;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Item;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

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
        return view('quotes.create',compact('customers'));
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
    
        $quote=Quote::create($data);
     
        return redirect()->route('quotes.edit',['quote'=>$quote])
                        ->with('success','Devis créé avec succès.');
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
        return view('quotes.edit',compact('quote','customers','products','items'));
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

        if(isset($data['date']))
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');

        $quote->update($data);
    
        return redirect()->route('quotes.edit',['quote'=>$quote])
                        ->with('success','Devis modifié avec succès.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        $quote->delete();
    
        return redirect()->route('quotes.index')
                        ->with('success','Devis supprimé avec succès');
    }
	


    public function update_totals(Request $request)
    {
        $total_ht=$request->get('total_ht');
        $total_tva=$request->get('total_tva');
        $total_ttc=$request->get('total_ttc');
        $total_remise=$request->get('total_remise');
        $remise=$request->get('remise');
        $quote=$request->get('quote');

        Quote::where('id',$quote)->update(
            [
                'total_ht'=>$total_ht,
                'total_tva'=>$total_tva,
                'remise'=>$remise,
                'total_ttc'=>$total_ttc,
                'total_remise'=>$total_remise,
            ]
        );
    }


    public function show_pdf($id)
	{   
        $quote = Quote::find($id);
        $date=Carbon::parse($quote->created_at)->format('Y-m');
        $date_facture=Carbon::parse($quote->date)->format('d/m/Y');
        $reference= sprintf('%05d',$quote->id);
        $products = Product::all();
        $items = Item::where('quote',$id)->get();

        $pdf = PDF::loadView('quotes.quote', compact('quote','reference','date_facture','products','items'));
        return $pdf->stream('quote-'.$id.'.pdf');

    }

    public function download_pdf($id)
	{   
        $quote = Quote::find($id);
        $date=Carbon::parse($quote->created_at)->format('Y-m');
        $date_facture=Carbon::parse($quote->date)->format('d/m/Y');
        $reference= sprintf('%05d',$quote->id);
        $products = Product::all();
        $items = Item::where('quote',$id)->get();
        $pdf = PDF::loadView('quotes.quote', compact('quote','reference','date_facture','products','items'));
        return $pdf->download('quote-'.$reference.'.pdf');

    }

    public function download_pdf_signature($id)
	{   
        $quote = Quote::find($id);
        $date=Carbon::parse($quote->created_at)->format('Y-m');
        $date_facture=Carbon::parse($quote->date)->format('d/m/Y');
        $reference= sprintf('%05d',$quote->id);
        $products = Product::all();
        $items = Item::where('quote',$id)->get();
        $pdf = PDF::loadView('quotes.quote-sign', compact('quote','reference','date_facture','products','items'));
        return $pdf->download('quote-'.$reference.'.pdf');

    }
}