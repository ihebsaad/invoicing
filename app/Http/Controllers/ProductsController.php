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
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        $products = Product::orderBy('id','desc')->get();

        return view('products.index',compact('products'));
    }

    public function trashed()
    {
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

        $products = Product::onlyTrashed()->orderBy('id','desc')->get();

        return view('products.trashed',compact('products'));
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
        if (auth()->user()->user_type != 'admin')
            return  redirect('/home');

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

    public function restore($id)
    {
        $product=Product::withTrashed()->find($id);
        $product->restore();
        return redirect()->route('products.trashed')
                        ->with('success','Produit restauré avec succès');
    }


    public function forceDelete($id)
    {
        $product=Product::withTrashed()->find($id);
        $product->forceDelete();
        return redirect()->route('products.trashed')
                        ->with('success','Produit restauré avec succès');
    }

    public function add_item(Request $request)
    {
        $product=$request->get('product');
        $qty=$request->get('qty');
        $tva=$request->get('tva');
        $price=$request->get('price');
        $quote=$request->get('quote');
        $invoice=$request->get('invoice');

        if( $quote>0 /*&&   Item::where('quote',$quote)->where('product',$product)->doesntExist()*/  ){
            $item=Item::create([
                'product'=>$product,
                'qty'=>$qty,
                'tva'=>$tva,
                'price'=>$price,
                'quote'=>$quote,
            ]);
            return $item->id;
        }

        if( $invoice>0 /* &&   Item::where('invoice',$invoice)->where('product',$product)->doesntExist()*/  ){
            $item=Item::create([
                'product'=>$product,
                'qty'=>$qty,
                'tva'=>$tva,
                'price'=>$price,
                'invoice'=>$invoice,
            ]);
            return $item->id;
        }


    }


    public function delete_item(Request $request)
    {
        $item_id=$request->get('item');
        $item=Item::find($item_id);
        $item->delete();

    }

    public function save_item_qty(Request $request)
    {
        $item=Item::find($request->get('item'));
        $item->qty=$request->get('qty');
        $item->save();

    }

}