<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use App\Models\Categorie;
use App\Models\Item;
use App\Models\Article;
use Illuminate\Http\Request;

class ModelesController extends Controller
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
        $modeles = Modele::orderBy('id','desc')->get();

        return view('modeles.index',compact('modeles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modeles.create');
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
            'type' => 'required',
            'couleur' => 'required',
            'hauteur' => 'required',
            'largeur' => 'required',
            'prix' => 'required',
        ]);

        //Modele::create($request->all());

		$type=$request->get('type');
        $couleur=$request->get('couleur');
        $hauteur=$request->get('hauteur');
        $largeur=$request->get('largeur');
        $prix=$request->get('prix');

        if(   Modele::where('type',$type)->where('couleur',$couleur)->where('hauteur',$hauteur)->where('largeur',$largeur)->doesntExist()  ){
            $modele=Modele::create([
                'type'=>$type,
                'couleur'=>$couleur,
                'hauteur'=>$hauteur,
                'largeur'=>$largeur,
                'prix'=>$prix,
            ]);


        return redirect()->route('modeles.create')
                        ->with('success','créé avec succès.');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function show(Modele $modele)
    {
        return view('modeles.show',compact('modele'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function edit(Modele $modele)
    {
        return view('modeles.edit',compact('modele'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modele $modele)
    {
        $request->validate([
            'type' => 'required',
            'couleur' => 'required',
            'hauteur' => 'required',
            'largeur' => 'required',
            'prix' => 'required',
			]);

        $modele->update($request->all());

        return redirect()->route('modeles.index')
                        ->with('success','modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modele $modele)
    {
        $modele->delete();

        return redirect()->route('modeles.index')
                        ->with('success','supprimé avec succès');
    }


    public function add_article(Request $request)
    {
        $modele=$request->get('modele');
        $qty=$request->get('qte');
        $price=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $text=$request->get('texte');
        $total_ttc=$request->get('total');
        $note=$request->get('note');
        $groupe=$request->get('groupe');
        $quote=$request->get('quote') ?? 0;
        $invoice=$request->get('invoice') ?? 0;

        if( $quote>0   ){
            $article=Article::create([
                'modele'=>$modele,
                'qty'=>$qty,
                'price'=>$price,
                'price_ht'=>$price_ht,
                'text'=>$text,
                'note'=>$note,
                'total_ttc'=>$total_ttc,
                'groupe'=>$groupe,
                'quote'=>$quote,
            ]);
            return $article->id;
        }
        if( $invoice>0   ){

            $article=Article::create([
                'modele'=>$modele,
                'qty'=>$qty,
                'price'=>$price,
                'price_ht'=>$price_ht,
                'text'=>$text,
                'note'=>$note,
                'total_ttc'=>$total_ttc,
                'groupe'=>$groupe,
                'invoice'=>$invoice,
            ]);
            return $article->id;
        }
    }

    public function pricing(Request $request)
    {
        $genre=$request->get('genre');
        $type=$request->get('type');
        $couleur=intval($request->get('couleur'));
        $hauteur=$request->get('hauteur');
        $largeur=$request->get('largeur');
        $prix=$request->get('prix');
        $groupe_couleur=intval($request->get('groupe_couleur'));
        $cintrage=$request->get('cintrage');

        $model=array();
        $modele=Modele::where('genre',$genre)->where('type',$type)->where('couleur',1)->where('hauteur',$hauteur)->where('largeur',$largeur)->first();
        if (isset($modele)){
            $model['id']=$modele->id;
            $prix=$modele->prix * 3;
            if($couleur==1){
                $prix=$prix;
            }elseif($couleur==2){
                $prix=$prix*1.1;

                if($groupe_couleur==1){
                    $prix=$prix*1.15;
                }elseif($groupe_couleur==2){
                    $prix=$prix*1.16;
                }elseif($groupe_couleur==3){
                    $prix=$prix*1.4;
                }

            }
            elseif($couleur==3){
                $prix=$prix*1.2;

                if($groupe_couleur==1){
                    $prix=$prix*1.26;
                }elseif($groupe_couleur==2){
                    $prix=$prix*1.3;
                }elseif($groupe_couleur==3){
                    $prix=$prix*1.42;
                }

            }

            if($cintrage){
                $prix=$prix*1.4;
            }

            $model['prix']=number_format($prix,2,'.','');

            return $model;
        }
        else{
            return null;
        }

    }

    public function delete_article(Request $request)
    {
        $item_id=$request->get('item');
        $article=Article::find($item_id);
        $article->delete();

    }

    public function save_article_qty(Request $request)
    {
        $article_id=$request->get('article');
        $article=Article::find($article_id);

        $article->qty=$request->get('qty');
        $article->total_ttc=$request->get('total');
        $article->save();

    }

}