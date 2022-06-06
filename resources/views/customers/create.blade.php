@extends('layouts.admin')
  
@section('content')
<div class="row pl-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Ajouter un client</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Retour</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('customers.store') }}" method="POST">
    @csrf
  
     <div class="row pl-5">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Prénom:</strong>
                <input type="text" name="name" class="form-control" placeholder="Prénom" value="{{old('name')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="lastname" class="form-control" placeholder="Nom" value="{{old('lastname')}}">
            </div>
        </div>   
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Tél:</strong>
                <input type="text" name="phone" class="form-control" placeholder="N° de téléphone" value="{{old('phone')}}">
            </div>
        </div>     

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="adresse email" value="{{old('email')}}">
            </div>
        </div>    

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Adresse:</strong>
                <input type="text"   name="address" id="address" class="form-control" placeholder="Adresse" value="{{old('address')}}" />
            </div>
        </div> 
 
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Ville:</strong>
                <input type="text" name="city" id="city" class="form-control" placeholder="Ville" value="{{old('city')}}">
            </div>
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Code postal:</strong>
                <input type="text" name="postal" id="postal"  class="form-control" placeholder="Code postal" value="{{old('postal')}}">
            </div>
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
   
</form>
@endsection


@section('footer-scripts')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>
  
  $(function () {
    // Summernote
    $('.summernote').summernote()
  });
  
</script>

<!--
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
-->
<script>
    /*
(function() {
  var placesAutocomplete = places({
    appId: "{{env('algolia_appid','EXL1N4GLVM')}}" ,
    apiKey: "{{env('algolia_apiKey','731b455dad1acd46fbc8a378489358de')}}" ,
    container: document.querySelector('#address'),
    templates: {
      value: function(suggestion) {
        return suggestion.name;
      }
    }
  }).configure({
    type: 'address',
    language: 'fr'
  });
  placesAutocomplete.on('change', function resultSelected(e) {
    document.querySelector('#city').value = e.suggestion.city || '';
    document.querySelector('#postal').value = e.suggestion.postcode || '';
  });
})();
*/
</script>
@endsection