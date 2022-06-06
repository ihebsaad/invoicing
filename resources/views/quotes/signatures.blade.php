@extends('layouts.admin')

@section('styles')

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>       
 <!-- jQuery signature plugin css -->
 <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
 <style>
        .kbw-signature { width: 100%; height: 200px;}
        #sigpad canvas{ width: 100% !important; height: auto;}
		#signature{cursor:pointer;}
 </style> 
 
@endsection

 
@section('content')

 <table class="table table-bordered" id="studentTable">
  <thead>
   <tr>
    <th>id</th>
    <th>image</th>
   </tr>
  </thead>	
  <tbody>
   @foreach ($books as $books)
    <tr>
      <td>{{ $books->id }}</td>
      <td>
       <img src="{{$books->user_image}}" width= '80'     height= ''>
      </td>
      </tr>
   @endforeach
  </tbody>
  </table>





@endsection