<?php

namespace App\Http\Controllers;
use App\Models\Signature;
use Illuminate\Http\Request;

class SignaturePadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $books = Signature::all();
        return view('quotes.signatures',compact('books'));
    }


    public function signature($quote_id)
    {
        return view('quotes.signature',compact('quote_id'));
    }


    public function save(Request $request)
    {
       $image_parts = explode(";base64,", $request->signed);
       $image_base64 = base64_decode($image_parts[1]);
      //  file_put_contents('kl',$image_base64);

        // Save in your data in database here.
        $image_file = $request->signed;
        
        $form_data = array(
           'user_image' => $image_file,
           'quote' => $request->quote_id
        );
        if(Signature::where('quote', $request->quote_id)->exists()){
            Signature::where('quote', $request->quote_id)->update(['user_image'=>$image_file]);
        }else{
            Signature::create($form_data);
        }
        
       return back()->with('success', 'Signature enregistrée');
    }
}