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
                <h2>Modifier</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Retour</a>
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
  
    <div class="row">
		<div class="col-lg-7">

			<form action="{{ route('products.update',$product->id) }}" method="POST">
				@csrf
				@method('PUT')
		   
				 <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Nom:</strong>
							<input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="name">
						</div>
					</div>
		
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Description:</strong>
							<textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
						</div>
					</div>
		

							

					<div class="col-xs-12 col-sm-12 col-md-12 text-center ">
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
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>

 
  $(function () {
    // Summernote
    $('.summernote').summernote()
  });
  
</script>
 
@endsection

