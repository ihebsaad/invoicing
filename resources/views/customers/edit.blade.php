@extends('layouts.admin')
@section('styles')

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
<style>

</style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Client {{$customer->name}} {{$customer->lastname}} </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
  
    <div class="row">
		<div class="col-lg-7">

			<form action="{{ route('customers.update',$customer->id) }}" method="POST">
				@csrf
				@method('PUT')
		   
                <div class="row pl-5">
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Civilité:</strong>
                        <select   name="civility" class="form-control" placeholder="civility" >
                            <option value="Mr">Mr</option>
                            <option value="Mme">Mme</option>
                            <option value="Mlle">Mlle</option>
                        </select>
                    </div>
                </div>            
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Prénom:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Prénom" value="{{$customer->name}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Nom:</strong>
                        <input type="text" name="lastname" class="form-control" placeholder="Nom" value="{{$customer->lastname}}">
                    </div>
                </div>   
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Tél:</strong>
                        <input type="text" name="phone" class="form-control" placeholder="N° de téléphone" value="{{$customer->phone}}">
                    </div>
                </div>     

                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" class="form-control" placeholder="adresse email" value="{{$customer->email}}">
                    </div>
                </div>    

                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Adresse:</strong>
                        <input type="text"   name="address" id="address" class="form-control" placeholder="Adresse" value="{{$customer->address}}" />
                    </div>
                </div> 
        
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Ville:</strong>
                        <input type="text" name="city" id="city" class="form-control" placeholder="Ville" value="{{$customer->city}}">
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="form-group">
                        <strong>Code postal:</strong>
                        <input type="text" name="postal" id="postal"  class="form-control" placeholder="Code postal" value="{{$customer->postal}}">
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
		   
			</form>
		</div>

		<div class="col-lg-5">

		</div>
	</div>
@endsection


@section('footer-scripts')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>

 
  $(function () {
    // Summernote
    $('.summernote').summernote()
  });
  
</script>
 
@endsection

