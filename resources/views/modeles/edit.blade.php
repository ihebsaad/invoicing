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
                <h2>Produit de menuiserie </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('modeles.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
		<div class="col-lg-7">

			<form action="{{ route('modeles.update',$modele->id) }}" method="POST">
				@csrf
				@method('PUT')

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Matière:</strong>
							<select  name="genre" required class="form-control"  >
								<option></option>
								<option  @if( $modele->genre==1)  selected="selected" @endif value="1">PVC</option>
								<option  @if( $modele->genre==2)  selected="selected" @endif  value="2">Aluminium</option>
							</select>
						</div>
					</div>
				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="form-group">
						<strong>Type:</strong>
						<select  name="type" required class="form-control"  >
							<option></option>
							<option value="1" @if($modele->type==1) selected="selected" @endif>Fenêtre à souflet</option>
							<option value="2" @if($modele->type==2) selected="selected" @endif>Fenêtre 1V</option>
							<option value="3" @if($modele->type==3) selected="selected" @endif>Fenêtre 2V</option>
							<option value="4" @if($modele->type==4) selected="selected" @endif>Fenêtre 3V</option>
							<option value="11" @if($modele->type==11) selected="selected" @endif>Fenêtre 4V </option>
							<option value="5" @if($modele->type==5) selected="selected" @endif>Fenêtre fixe</option>
							<option value="6" @if($modele->type==6) selected="selected" @endif>Porte fenêtre 1V </option>
							<option value="7" @if($modele->type==7) selected="selected" @endif>Porte fenêtre 2V </option>
							<option value="8" @if($modele->type==8) selected="selected" @endif>Coulissant 1</option>
							<option value="9" @if($modele->type==9) selected="selected" @endif>Coulissant 2</option>
							<option value="10" @if($modele->type==10) selected="selected" @endif>Coulissant 3 </option>
							<option value="12" @if($modele->type==12) selected="selected" @endif>Porte fenêtre serrure 1V</option>
						</select>
					</div>
        		</div>

				<div class="col-xs-12 col-sm-12  col-md-7">
					<div class="form-group">
						<strong>Couleur:</strong>
						<select   name="couleur" required class="form-control"  >
							<option></option>
							<option value="1" @if($modele->couleur==1) selected="selected" @endif>Extérieur et intérieur blanc</option>
							<option value="2" @if($modele->couleur==2) selected="selected" @endif>Extérieur couleur et intérieur blanc</option>
							<option value="3" @if($modele->couleur==3) selected="selected" @endif>Extérieur et intérieur couleur</option>
						</select>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="form-group">
						<strong>Hauteur:</strong>
						<input id="hauteur" type="number" name="hauteur" rerquired class="form-control" step="100" min="0"  value="{{$modele->hauteur}}" >
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="form-group">
						<strong>Largeur:</strong>
						<input id="largeur" type="number" name="largeur" rerquired class="form-control" step="100" min="0"  value="{{$modele->largeur}}" >
					</div>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="form-group">
						<strong>Prix TTC(€):</strong>
						<input id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{$modele->prix}}"  >
					</div>
				</div>

					<div class="col-xs-12 col-sm-12 col-md-7 ">
					  <button type="submit" class="btn btn-primary float-right mb-3">Enregistrer</button>
					</div>
				</div>

			</form>
		</div>

		<div class="col-lg-5">

		</div>
	</div>
@endsection


@section('footer-scripts')

<script>


</script>

@endsection

