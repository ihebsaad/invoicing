<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categorie;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $data['image'] = $imageName;
        }

        Product::create($data);

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $data['image'] = $imageName;
        }

        $product->update($data);

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
        $unite=$request->get('unite');
        $imageName=null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
         }

        if( $quote>0 /*&&   Item::where('quote',$quote)->where('product',$product)->doesntExist()*/  ){
            $item=Item::create([
                'product'=>$product,
                'qty'=>$qty,
                'tva'=>$tva,
                'price'=>$price,
                'unite'=>$unite,
                'quote'=>$quote,
                'image' => $imageName,
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
                'unite'=>$unite,
                'image' => $imageName,
            ]);
            return $item->id;
        }

    }


    public function add_item_men(Request $request)
    {

        $qty=$request->get('qte');
        $tva=$request->get('tva');
        $price_ttc=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $quote=$request->get('quote');
        $invoice=$request->get('invoice');
        $description=$request->get('description');
        $note=$request->get('note');
        $unite=$request->get('unite');
        $imageName=null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
         }

        if( $quote>0   ){
            $item=Item::create([
                'qty'=>$qty,
                'tva'=>$tva,
                'price_ttc'=>$price_ttc,
                'price_ht'=>$price_ht,
                'description'=>$description,
                'note'=>$note,
                'unite'=>$unite,
                'quote'=>$quote,
                'image' => $imageName,
            ]);
            return $item->id;
        }

        if( $invoice>0   ){
            $item=Item::create([
                'qty'=>$qty,
                'tva'=>$tva,
                'price_ttc'=>$price_ttc,
                'price_ht'=>$price_ht,
                'description'=>$description,
                'note'=>$note,
                'unite'=>$unite,
                'invoice'=>$invoice,
                'image' => $imageName,
            ]);
            return $item->id;
        }

    }

    public function get_item_men(Request $request)
    {
        $item=Item::find($request->get('item'));
        $data=array();
        $data['qty']=$item->qty;
        $data['tva']=$item->tva;
        $data['prix']=$item->price;
        $data['prix_ht']=$item->price_ht;
        $data['description']=$item->description;
        $data['note']=$item->note;
        $data['unite']=$item->unite;
        return $data;
    }

    public function edit_item_men(Request $request)
    {
        $item=Item::find($request->get('item'));

        $item->qty=$request->get('qte');
        $item->tva=$request->get('tva');
        $item->price_ttc=$request->get('prix');
        $item->price_ht=$request->get('prix_ht');
        $item->description=$request->get('description');
        $item->unite=$request->get('unite');
        $item->note=$request->get('note');
        $item->save();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $item->note=$request->get('note');
            $item->image=$imageName;
            $item->save();
         }



        return $item->id;
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