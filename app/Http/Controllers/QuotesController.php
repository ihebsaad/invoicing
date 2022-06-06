<?php
  
namespace App\Http\Controllers;
   
use App\Models\Quote;
use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::all();
    
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
        return view('quotes.edit',compact('quote','customers'));
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
        $data['date']=Carbon::parse($data['date'])->format('Y-m-d');

        $quote->update($data);
    
        return redirect()->route('quotes.index')
                        ->with('success','Devis modifié avec succès');
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
	

    public function show_pdf($id)
	{   
        $quote = Quote::find($id);
        $pdf = PDF::loadView('quotes.quote', compact('quote'));
        return $pdf->stream('quote-'.$id.'.pdf');

    }

    public function download_pdf($id)
	{   
        $quote = Quote::find($id);
        $pdf = PDF::loadView('quotes.quote', compact('quote'));
        return $pdf->download('quote-'.$id.'.pdf');

    }

    public function download_pdf_signature($id)
	{   
        $quote = Quote::find($id);
        $pdf = PDF::loadView('quotes.quote-sign', compact('quote'));
        return $pdf->download('quote-'.$id.'.pdf');

    }
}