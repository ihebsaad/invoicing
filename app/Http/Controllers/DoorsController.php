<?php

namespace App\Http\Controllers;

use App\Models\Door;
use App\Models\Categorie;
use App\Models\Item;
use App\Models\Article;
use App\Models\Porte;
use App\Models\Shutter;
use App\Models\Volet;
use App\Models\Setting;

use Illuminate\Http\Request;

class DoorsController extends Controller
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
        $doors = Door::orderBy('id','desc')->get();

        return view('doors.index',compact('doors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doors.create');
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
            'texte' => 'required',
            'prix' => 'required',
        ]);

		$texte=$request->get('texte');
        $genre=$request->get('genre');
        $prix=$request->get('prix');

        if(   Door::where('texte',$texte)->where('genre',$genre)->doesntExist()  ){
            $door=Door::create([
                'texte'=>$texte,
                'genre'=>$genre,
                'prix'=>$prix,
            ]);


        return redirect()->route('doors.create')
                        ->with('success','créé avec succès.');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function show(Door $door)
    {
        return view('doors.show',compact('door'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function edit(Door $door)
    {
        return view('doors.edit',compact('door'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Door $door)
    {
        $request->validate([
            'texte' => 'required',
            'prix' => 'required',
			]);

        $door->update($request->all());

        return redirect()->route('doors.index')
                        ->with('success','modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Door  $door
     * @return \Illuminate\Http\Response
     */
    public function destroy(Door $door)
    {
        $door->delete();

        return redirect()->route('doors.index')
                        ->with('success','supprimé avec succès');
    }

}