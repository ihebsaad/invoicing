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
                <h2>Modifier la porte </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('doors.index') }}"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">
		<div class="col-lg-7">

			<form action="{{ route('doors.update',$door->id) }}" method="POST">
				@csrf
				@method('PUT')

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Matière:</strong>
							<select  name="genre" required class="form-control"  >
								<option></option>
								<option  @if( $door->genre==1)  selected="selected" @endif value="1">PVC</option>
								<option  @if( $door->genre==2)  selected="selected" @endif  value="2">Aluminium</option>
							</select>
						</div>
					</div>

				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="form-group">
						<strong>Nom:</strong>
						<input id="texte" type="text" name="texte" rerquired class="form-control"   value="{{$door->texte}}" >
					</div>
				</div>


				<div class="col-xs-12 col-sm-12 col-md-7">
					<div class="form-group">
						<strong>Prix TTC(€):</strong>
						<input id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{$door->prix}}"  >
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

