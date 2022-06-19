<?php
  
namespace App\Http\Controllers;
   
use App\Models\Quote;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Item;
use App\Models\User;
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
        $customer_id=0;
        return view('quotes.create',compact('customers','countries','customer_id'));
    }
    

    public function add($customer_id)
    {
        $customers = Customer::all();
        $countries = CustomersController::countries();

        return view('quotes.create',compact('customers','countries','customer_id'));
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
        $countries=CustomersController::countries();
        return view('quotes.edit',compact('quote','customers','products','items','countries'));
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
    
        return redirect()->route('quotes.edit',['quote'=>$quote])
                        ->with('success','Devis modifié');
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
                        ->with('success','Devis supprimé ');
    }
	


    public function update_totals(Request $request)
    {
        $total_ht=$request->get('total_ht');
        $total_tva=$request->get('total_tva');
        $total_ttc=$request->get('total_ttc');
        $total_remise=$request->get('total_remise');
        $remise=$request->get('remise');
        $quote=$request->get('quote');
        $quote=$request->get('quote');
        $aide=$request->get('aide');
        $type_aide=$request->get('type_aide');
        $net=$request->get('net');
        $tva_remise=$request->get('tva_remise');

        Quote::where('id',$quote)->update(
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


    public function show_pdf($id)
	{   
        $quote = Quote::find($id);

        $reference= $quote->reference;
        $date=Carbon::parse($quote->created_at)->format('Y-m');
        $date_facture=Carbon::parse($quote->date)->format('d/m/Y');
        
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
        $reference= $quote->reference;
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
        $reference= $quote->reference;
        $products = Product::all();
        $items = Item::where('quote',$id)->get();
        $pdf = PDF::loadView('quotes.quote-sign', compact('quote','reference','date_facture','products','items'));
        return $pdf->download('quote-'.$reference.'.pdf');

    }

    public function save_invoice($id)
	{   
        $quote = Quote::find($id);

        $user_id=auth()->user()->id;
        $name=strtoupper(User::find($user_id)->name);
        $lastname=strtoupper(User::find($user_id)->lastname);
        $num=Invoice::where('par',$user_id)->where('created_at','like',  date('Y-m-d').'%')->count()+1;
        $reference= date('Ymd').$name[0].$lastname[0].sprintf('%03d',$num);

        $invoice=Invoice::create([
            'reference'=>$reference,
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
            'total_ht'=>$quote->total_ht,
            'total_ttc'=>$quote->total_ttc,
            'type_aide'=>$quote->type_aide,
            'aide'=>$quote->aide,
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

        ]);

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
}