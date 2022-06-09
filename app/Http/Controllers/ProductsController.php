<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Item;
use Illuminate\Http\Request;
  
class ProductsController extends Controller
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
        $products = Product::orderBy('id','desc')->get();
    
        return view('products.index',compact('products'));
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        return view('products.create',compact('categories'));
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
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Produit créé avec succès.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories=Categorie::all();
        return view('products.show',compact('product','categories'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {        
        $categories=Categorie::all();
        return view('products.edit',compact('product','categories'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Produit modifié avec succès');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Produit supprimé avec succès');
    }
	

    public function add_item(Request $request)
    {
        $product=$request->get('product');
        $qty=$request->get('qty');
        $tva=$request->get('tva');
        $price=$request->get('price');
        $quote=$request->get('quote');
        $invoice=$request->get('invoice');

        Item::create([
            'product'=>$product,
            'qty'=>$qty,
            'tva'=>$tva,
            'price'=>$price,
            'quote'=>$quote,
            'invoice'=>$invoice,
        ]);
    }
	
}