<?php
  
namespace App\Http\Controllers;
   
use App\Models\Modele;
use App\Models\Categorie;
use App\Models\Item;
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
	

    public function add_item(Request $request)
    {
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
            return $modele->id;
        }else{
			$modele= Modele::where('type',$type)->where('couleur',$couleur)->where('hauteur',$hauteur)->where('largeur',$largeur)->first();
			return $modele->prix;
		}

    }



	
}