@extends('layouts.admin')

@section('content')
<div class="row 3">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Ajouter une porte</h2>
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
                <strong>Nom:</strong>
                <input id="texte" type="text" name="texte" rerquired class="form-control"   value="{{old('texte')}}" >
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