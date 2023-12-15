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
    {/*
       $Lieu = explode(";base64,", $request->signed);
       $lieu_base64 = base64_decode($Lieu[1]);

       $Date = explode(";base64,", $request->signed2);
       $date_base64 = base64_decode($Date[1]);

       $Signature = explode(";base64,", $request->signed3);
       $sign_base64 = base64_decode($Signature[1]);
      //  file_put_contents('kl',$image_base64);
*/
        // Save in your data in database here.
        $lieu = $request->signed;
        $date = $request->signed2;
        $signature = $request->signed3;

        $form_data = array(
           'lieu' => $lieu,
           'date' => $date,
           'signature' => $signature,
           'quote' => $request->quote_id
        );
        if(Signature::where('quote', $request->quote_id)->exists()){
            if($lieu!= null)
            Signature::where('quote', $request->quote_id)->update(['lieu'=>$lieu]);
            if($date!= null)
            Signature::where('quote', $request->quote_id)->update(['date'=>$date]);
            if($signature!= null)
            Signature::where('quote', $request->quote_id)->update(['signature'=>$signature]);

        }else{
            Signature::create($form_data);
        }

       return back()->with('success', 'Signature enregistrée');
    }
}