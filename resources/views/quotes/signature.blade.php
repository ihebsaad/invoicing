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



  <div class="row">
   <div class="col-md-6 offset-md-3 mt-5">
    <div class="card">
     <div class="card-body">
      <div class="col-md-12">
       <label class="" for="">Dessinez votre Signature:</label>
       <br/>
       <form method="POST" action="{{ route('signpad.save') }}">
        @csrf
         <input type="hidden" name="quote_id" value="{{$quote_id}}" />
         <div id="sigpad"></div>
         <br><br>
         <button id="clear" class="btn btn-danger">Vider</button>
         <textarea id="signature" name="signed" style="display: none"></textarea>
         <button class="btn btn-primary">Enregistrer
       </form>
      </div>
     </div>
    </div>
   </div>
  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- jQuery signature plugin js -->
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script type="text/javascript">
  var sigpad = $('#sigpad').signature({syncField: '#signature', syncFormat: 'PNG'});
  $('#clear').click(function(e) {
   e.preventDefault();
   sigpad.signature('clear');
   $("#signature").val('');
  });
</script>



@endsection