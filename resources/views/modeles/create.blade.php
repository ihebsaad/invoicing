@extends('layouts.admin')

@section('content')
<div class="row 3">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Ajouter un produit de menuiserie</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('modeles.index') }}"> Retour</a>
        </div>
    </div>
</div>

<form action="{{ route('modeles.store') }}" method="POST">
    @csrf

     <div class="row pl-3">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Matière:</strong>
                <select  name="genre" required class="form-control" required >
                    <option></option>
                    <option  @if( old("genre")==1)  selected="selected" @endif value="1">PVC</option>
                    <option  @if( old("genre")==2)  selected="selected" @endif  value="2">Aluminium</option>
                </select>
            </div>
        </div>
     <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Type:</strong>
                <select  name="type" required class="form-control" required >
                    <option></option>
                    <option value="1" @if(old("type")==1) selected="selected" @endif>Fenêtre à souflet</option>
					<option value="2" @if(old("type")==2) selected="selected" @endif>Fenêtre 1V</option>
					<option value="3" @if(old("type")==3) selected="selected" @endif>Fenêtre 2V</option>
					<option value="4" @if(old("type")==4) selected="selected" @endif>Fenêtre 3V</option>
					<option value="11" @if(old("type")==11) selected="selected" @endif>Fenêtre 4V </option>
					<option value="5" @if(old("type")==5) selected="selected" @endif>Fenêtre fixe</option>
					<option value="6" @if(old("type")==6) selected="selected" @endif>Porte fenêtre 1V </option>
					<option value="7" @if(old("type")==7) selected="selected" @endif>Porte fenêtre 2V </option>
					<option value="8" @if(old("type")==8) selected="selected" @endif>Coulissant 1</option>
					<option value="9" @if(old("type")==9) selected="selected" @endif>Coulissant 2</option>
					<option value="10" @if(old("type")==10) selected="selected" @endif>Coulissant 3 </option>
					<option value="12" @if(old("type")==12) selected="selected" @endif>Coulissant 2V </option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12  col-md-7">
			<div class="form-group">
				<strong>Couleur:</strong>
				<select   name="couleur" required class="form-control"  >
					<option></option>
                    <option @if( old("couleur")==1)  selected="selected" @endif value="1">Extérieur et intérieur blanc</option>
                    <option @if( old("couleur")==2)  selected="selected" @endif  value="2">Extérieur couleur et intérieur blanc</option>
                    <option @if( old("couleur")==3)  selected="selected" @endif  value="3">Extérieur et intérieur couleur</option>
				</select>
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Hauteur:</strong>
                <input id="hauteur" type="number" name="hauteur" rerquired class="form-control" step ="100" min="200" max="3200"  value="{{old('hauteur')}}" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Largeur:</strong>
                <input id="largeur" type="number" name="largeur" rerquired class="form-control" step ="100" min="200" max="2200"  value="{{old('largeur')}}" >
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Prix TTC(€) :</strong>
                <input id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}"  >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

</form>
@endsection


@section('footer-scripts')

<script>


</script>

@endsection