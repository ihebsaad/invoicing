<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use App\Models\Categorie;
use App\Models\Item;
use App\Models\Article;
use App\Models\Porte;
use App\Models\Door;
use App\Models\Shutter;
use App\Models\Volet;
use App\Models\Setting;

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
        $cintrage=$request->get('cintrage');
        $quote=$request->get('quote') ?? 0;
        $invoice=$request->get('invoice') ?? 0;
        $couleur=$request->get('couleur');

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
                'cintrage'=>$cintrage,
                'couleur'=>$couleur,
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
                'cintrage'=>$cintrage,
                'couleur'=>$couleur,
                'invoice'=>$invoice,
            ]);
            return $article->id;
        }
    }

    public function edit_article(Request $request)
    {
        $article_id=$request->get('article');
        $modele=$request->get('modele');
        $qty=$request->get('qte');
        $price=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $text=$request->get('texte');
        $total_ttc=$request->get('total');
        $note=$request->get('note');
        $groupe=$request->get('groupe');
        $cintrage=$request->get('cintrage');
        $couleur=$request->get('couleur');

        $article=Article::find($article_id);
        $article->modele=$modele;
        $article->qty=$qty;
        $article->price=$price;
        $article->price_ht=$price_ht;
        $article->text=$text;
        $article->note=$note;
        $article->total_ttc=$total_ttc;
        $article->groupe=$groupe;
        $article->cintrage=$cintrage;
        $article->couleur=$couleur;
        $article->save();
        return $article_id;
    }

    public function get_article(Request $request)
    {
        $article=Article::find($request->get('article'));

        $modele=Modele::find($article->modele);
        $data=array();
        $data['modele']=$article->modele;
        $data['prix']=$article->price;
        $data['note']=$article->note;
        $data['qte']=$article->qty;
        $data['total']=$article->modele;
        $data['groupe']=$article->groupe;
        $data['cintrage']=$article->cintrage;
        $data['couleur']=$article->couleur;
        $data['quote']=$article->quote;
        $data['invoice']=$article->invoice;
        $data['hauteur']=$modele->hauteur;
        $data['largeur']=$modele->largeur;
        $data['genre']=$modele->genre;
        $data['type']=$modele->type;

       return $data;

    }

    public function get_door(Request $request)
    {
        $porte=Porte::find($request->get('item'));
        $data=array();
        $data['door']=$porte->door;
        $data['prix']=$porte->price;
        $data['prixht']=$porte->price_ht;
        $data['note']=$porte->note;
        $data['qte']=$porte->qty;
        $data['total']=$porte->total_ttc;
        $data['groupe']=$porte->groupe;
        $data['cintrage']=$porte->cintrage;
        $data['couleur']=$porte->couleur;
       return $data;
    }

    // menuiserie
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
            $coefficient = floatval( Setting::where('model','Modele')->where('model_id',''.$type)->first()->value  );
            //$prix=$modele->prix * 3;   // coefficient
            $prix=$modele->prix * $coefficient;   //
            if($couleur==1){
                $prix=$prix;
            }elseif($couleur==2){
            //    $prix=$prix*1.1;

                if($groupe_couleur==1){
                    $prix=$prix + floatval( Setting::where('model','Color')->where('model_id','1')->first()->value ) ;
                }elseif($groupe_couleur==2){
                    $prix=$prix+ floatval( Setting::where('model','Color')->where('model_id','2')->first()->value );
                }elseif($groupe_couleur==3){
                    $prix=$prix+floatval( Setting::where('model','Color')->where('model_id','3')->first()->value );
                }

            }
            elseif($couleur==3){
            //    $prix=$prix*1.2;

                if($groupe_couleur==1){
                    $prix=$prix + floatval( Setting::where('model','Color')->where('model_id','4')->first()->value );
                }elseif($groupe_couleur==2){
                    $prix=$prix + floatval( Setting::where('model','Color')->where('model_id','5')->first()->value );
                }elseif($groupe_couleur==3){
                    $prix=$prix + floatval( Setting::where('model','Color')->where('model_id','6')->first()->value );
                }

            }

            if($cintrage){
                $prix=$prix * floatval( Setting::where('model','Bending')->where('model_id','1')->first()->value );
            }

            $model['prix']=number_format($prix,2,'.','');

            return $model;
        }
        else{
            return null;
        }

    }




    public function add_door(Request $request)
    {
        $door=$request->get('door');
        $qty=$request->get('qte');
        $price=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $texte=$request->get('texte');
        $total_ttc=$request->get('total');
        $note=$request->get('note');
        $groupe=$request->get('groupe');
        $quote=$request->get('quote') ?? 0;
        $invoice=$request->get('invoice') ?? 0;
        $couleur=$request->get('couleur');
        $cintrage=$request->get('cintrage');

        if( $quote>0   ){
            $porte=Porte::create([
                'door'=>$door,
                'qty'=>$qty,
                'price'=>$price,
                'price_ht'=>$price_ht,
                'text'=>$texte,
                'note'=>$note,
                'total_ttc'=>$total_ttc,
                'groupe'=>$groupe,
                'couleur'=>$couleur,
                'cintrage'=>$cintrage,
                'quote'=>$quote,
            ]);
            return $porte->id;
        }
        if( $invoice>0   ){

            $porte=Porte::create([
                'door'=>$door,
                'qty'=>$qty,
                'price'=>$price,
                'price_ht'=>$price_ht,
                'text'=>$texte,
                'note'=>$note,
                'total_ttc'=>$total_ttc,
                'groupe'=>$groupe,
                'couleur'=>$couleur,
                'cintrage'=>$cintrage,
                'invoice'=>$invoice,
            ]);
            return $porte->id;
        }
    }

    public function edit_door(Request $request)
    {
        $id=$request->get('item');
        $door=$request->get('door');
        $qty=$request->get('qte');
        $price=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $texte=$request->get('texte');
        $total_ttc=$request->get('total');
        $note=$request->get('note');
        $groupe=$request->get('groupe');
        $couleur=$request->get('couleur');
        $cintrage=$request->get('cintrage');

        $porte=Porte::find($id);
        $porte->door=$door;
        $porte->qty=$qty;
        $porte->price=$price;
        $porte->price_ht=$price_ht;
        $porte->text=$texte;
        $porte->note=$note;
        $porte->total_ttc=$total_ttc;
        $porte->groupe=$groupe;
        $porte->couleur=$couleur;
        $porte->cintrage=$cintrage;
        $porte->save();
        return $id;
    }

    public function add_volet(Request $request)
    {
        $shutter=$request->get('shutter');
        $qty=$request->get('qte');
        $price=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $texte=$request->get('texte');
        $total_ttc=$request->get('total');
        $note=$request->get('note');
        $quote=$request->get('quote') ?? 0;
        $invoice=$request->get('invoice') ?? 0;
        $couleur=$request->get('couleur');

        if( $quote>0   ){
            $volet=Volet::create([
                'shutter'=>$shutter,
                'qty'=>$qty,
                'price'=>$price,
                'price_ht'=>$price_ht,
                'text'=>$texte,
                'note'=>$note,
                'total_ttc'=>$total_ttc,
                'couleur'=>$couleur,
                'quote'=>$quote,
            ]);
            return $volet->id;
        }
        if( $invoice>0   ){

            $volet=Volet::create([
                'shutter'=>$shutter,
                'qty'=>$qty,
                'price'=>$price,
                'price_ht'=>$price_ht,
                'text'=>$texte,
                'note'=>$note,
                'total_ttc'=>$total_ttc,
                'couleur'=>$couleur,
                'invoice'=>$invoice,
            ]);
            return $volet->id;
        }
    }

    public function get_volet(Request $request)
    {

        $volet=Volet::find($request->get('item'));
        $shutter=Shutter::find($volet->shutter);
        $data=array();
        $data['qty']=$volet->qty;
        $data['prix']=$volet->price;
        $data['prix_ht']=$volet->price_ht;
        $data['text']=$volet->text;
        $data['note']=$volet->note;
        $data['total_ttc']=$volet->total_ttc;
        $data['shutter']=$volet->shutter;
        $data['type']=$shutter->type;
        $data['hauteur']=$shutter->hauteur;
        $data['largeur']=$shutter->largeur;
        $data['couleur']=$volet->couleur;

        return $data;
    }


    public function edit_volet(Request $request)
    {

        $shutter=$request->get('shutter');
        $qty=$request->get('qte');
        $price=$request->get('prix');
        $price_ht=$request->get('prix_ht');
        $texte=$request->get('texte');
        $total_ttc=$request->get('total');
        $note=$request->get('note');
        $couleur=$request->get('couleur');

        $volet=Volet::find($request->get('volet'));

        $volet->shutter=$shutter;
        $volet->qty=$qty;
        $volet->price=$price;
        $volet->price_ht=$price_ht;
        $volet->text=$texte;
        $volet->total_ttc=$total_ttc;
        $volet->note=$note;
        $volet->couleur=$couleur;

        $volet->save();

        return $request->get('volet');
    }


    public function pricing_door(Request $request)
    {
        $id=$request->get('door');
        $groupe=$request->get('groupe');
        $cintrage=$request->get('cintrage');

        $door=array();
        $door=Door::where('id',$id)->first();
        if (isset($door)){
            $door['id']=$door->id;
            $prix=$door->prix ;
            if($groupe==2){
                $prix=$prix*1.1;
            }

            if($cintrage){
                $prix=$prix*1.4;
            }

            $door['prix']=number_format($prix,2,'.','');
            $door['prix_ht']=number_format($prix,2,'.','');

            return $door;
        }
        else{
            return null;
        }

    }

    public function pricing_volet(Request $request)
    {
        $type=$request->get('type');
        $hauteur=$request->get('hauteur');
        $largeur=$request->get('largeur');

        $shutter=array();
        $shutter=Shutter::where('type',$type)->where('hauteur',$hauteur)->where('largeur',$largeur)->first();

        if (isset($shutter)){
            $shutter['id']=$shutter->id;
            $coefficient = floatval( Setting::where('model','Shutter')->where('model_id',''.$type)->first()->value  );

            $prix=$shutter->prix * $coefficient ;
            //$prix=$shutter->prix *2.5 ;   // coefficient

            $shutter['prix']=number_format($prix,2,'.','');
            $shutter['prix_ht']=number_format($prix,2,'.','');

            return $shutter;
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

    public function delete_door(Request $request)
    {
        $item_id=$request->get('item');
        $porte=Porte::find($item_id);
        $porte->delete();

    }

    public function delete_volet(Request $request)
    {
        $item_id=$request->get('item');
        $volet=Volet::find($item_id);
        $volet->delete();

    }

    public function save_door_qty(Request $request)
    {
        $porte_id=$request->get('porte');
        $porte=Porte::find($porte_id);

        $porte->qty=$request->get('qty');
        $porte->total_ttc=$request->get('total');
        $porte->save();

    }

    public function save_article_qty(Request $request)
    {
        $article_id=$request->get('article');
        $article=Article::find($article_id);

        $article->qty=$request->get('qty');
        $article->total_ttc=$request->get('total');
        $article->save();

    }


    public function save_volet_qty(Request $request)
    {
        $id=$request->get('volet');
        $volet=Volet::find($id);

        $volet->qty=$request->get('qty');
        $volet->total_ttc=$request->get('total');
        $volet->save();

    }

}