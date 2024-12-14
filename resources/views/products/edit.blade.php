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
                <h2>Produit {{ $product->name}}</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
		<div class="col-lg-7">

			<form action="{{ route('products.update',$product->id) }}" method="POST">
				@csrf
				@method('PUT')

				 <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Nom:</strong>
							<input type="text" name="name" required value="{{ $product->name }}" class="form-control" placeholder="name">
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Catégorie:</strong>
							<select   name="categorie"  class="form-control"  >
								<option></option>
								@foreach($categories as $categorie)
									<option @if($categorie->id==$product->categorie) selected="selected" @endif value="{{$categorie->id}}">{{$categorie->name}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Description:</strong>
							<textarea class="form-control summernote"  rows="3" name="description" placeholder="Description">{{ $product->description }}</textarea>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Prix HT(€):</strong>
							<input id="prix_ht" type="number" name="prix_ht" rerquired class="form-control" step ="0.01" min="0"  value="{{ $product->prix_ht }}" onchange="calcul_tva()" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>TVA(%):</strong>
							<input id="tva" type="number" name="tva" rerquired class="form-control" step ="0.1" min="0" default="5.5" value="{{ $product->tva }}" onchange="calcul_tva()" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Prix TTC(€):</strong>
							<input id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{ $product->prix }}">
						</div>
					</div>


					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Pose(€):</strong>
							<input id="pose" type="number" name="pose" rerquired class="form-control" step ="0.01" min="0"   value="{{ $product->pose }}"  onchange="calcul_tva2()">
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>TVA Pose (%):</strong>
							<input id="tva_pose" type="number" name="tva_pose" rerquired class="form-control" step ="0.01" min="0"   value="{{ $product->tva_pose }}"  onchange="calcul_tva2()">
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Pose TTC(€):</strong>
							<input id="pose_ttc" type="number" name="pose_ttc" rerquired class="form-control" step ="0.01" min="0"   value="{{ $product->pose_ttc }}"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Unité:</strong>
							<select name="unite" class="form-control">
								<option @if($product->unite=="") selected="selected" @endif></option>
								<option @if($product->unite=="ML") selected="selected"  @endif value="ML">ML</option>
								<option @if($product->unite=="m2") selected="selected"  @endif value="m2">m²</option>
							</select>
						</div>
					</div>

					@if(auth()->user()->user_type=='admin')
						<div class="col-xs-12 col-sm-12 col-md-7">
							<div class="form-group">
								<strong>Affichage:</strong>
								<select name="affichage" class="form-control">
									<option @if($product->affichage=="1") selected="selected"  @endif  value="1">Tous</option>
									<option @if($product->affichage=="2") selected="selected"  @endif value="2">Commercial</option>
									<option @if($product->affichage=="3") selected="selected"  @endif  value="3">Telepro</option>
								</select>
							</div>
						</div>
					@endif

					<div class="col-xs-12 col-sm-12 col-md-7 ">
					  <button type="submit" class="btn btn-primary mb-3">Enregistrer</button>
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

	function calcul_tva(){
        var prix_ht=parseFloat($('#prix_ht').val());
        var tva=parseFloat($('#tva').val());
		if(prix_ht>0 && tva!=''){
			var total_tva= (prix_ht* tva) / 100 ;
			var prix= prix_ht+ total_tva ;
			$('#prix').val(prix.toFixed(2));
		}
    }

	function calcul_tva2(){
        var pose=parseFloat($('#pose').val());
        var tva_pose=parseFloat($('#tva_pose').val());
		if(pose>0 && tva_pose!=''){
			var total_tva= (pose* tva_pose) / 100 ;
			var prix= pose+ total_tva ;
			$('#pose_ttc').val(prix.toFixed(2));
		}
    }


  $(function () {
    // Summernote
   // $('.summernote').summernote()
  });

</script>

@endsection

