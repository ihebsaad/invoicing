<?php
  
namespace App\Http\Controllers;
   
use App\Models\Quote;
use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Http\Request;
  
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
        return view('quotes.create');
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
            'name' => 'required',
            'description' => 'required',
        ]);
    
        Quote::create($request->all());
     
        return redirect()->route('quotes.index')
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
        return view('quotes.edit',compact('quote'));
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $quote->update($request->all());
    
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
	

}