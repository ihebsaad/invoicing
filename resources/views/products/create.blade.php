@extends('layouts.admin')
  
@section('content')
<div class="row pl-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Ajouter un produit</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>
        </div>
    </div>
</div>
   
<form action="{{ route('products.store') }}" method="POST">
    @csrf
  
     <div class="row pl-5">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="name" required class="form-control" placeholder="Nom" value="{{old('name')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12  col-md-7">
			<div class="form-group">
				<strong>Catégorie:</strong>
				<select   name="categorie"  class="form-control"  >
					<option></option>
					@foreach($categories as $categorie)
						<option value="{{$categorie->id}}">{{$categorie->name}}</option>
					@endforeach
				</select>
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Prix HT(€):</strong>
                <input id="prix_ht" type="number" name="prix_ht" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix_ht')}}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>TVA(%):</strong>
                <input id="tva" type="number" name="tva" rerquired class="form-control" step ="0.1" min="0" default="5.5" value="{{old('tva')}}" onchange="calcul_tva()">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Prix TTC(€):</strong>
                <input id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}">
            </div>
        </div>

        <!--
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Type:</strong>
                <input type="text" name="type" class="form-control" placeholder="type" value="{{old('type')}}">
            </div>
        </div>
        -->
        
        <div class="col-xs-12 col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
   
</form>
@endsection


@section('footer-scripts')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>
    function calcul_tva(){
        var prix_ht=parseFloat($('#prix_ht').val());
        var tva=parseFloat($('#tva').val());
        var total_tva= (prix_ht* tva) / 100 ;
        var prix= prix_ht+ total_tva ;
        $('#prix').val(prix);
    }
  $(function () {
    // Summernote
    $('.summernote').summernote()
  });
  
</script>

@endsection