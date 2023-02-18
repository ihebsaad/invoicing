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
                <strong>Type:</strong>
                <select  name="type" required class="form-control"  >
                    <option></option>
                    <option  @if( old("type")==1)  selected="selected" @endif value="1">Fenêtre à souflet</option>
                    <option  @if( old("type")==2)  selected="selected" @endif  value="2">Fenêtre / Porte Fenêtre - 1VOB</option>
                    <option  @if( old("type")==3)  selected="selected" @endif  value="3">Fenêtre / Porte Fenêtre - 2V</option>
                    <option  @if( old("type")==4)  selected="selected" @endif  value="4">Fenêtre fixe</option>
                    <option  @if( old("type")==5)  selected="selected" @endif  value="5">Porte fenêtre ouverture extérieur - PF1V </option>
                    <option  @if( old("type")==6)  selected="selected" @endif  value="6">Porte 2 ventaux Battement central ouverture extérieur PF2V </option>
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
                <strong>Prix(€) :</strong>
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