@extends('layouts.admin')
  
@section('styles')
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

@endsection


@section('content')
<div class="row pl-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Ajouter une facture</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Retour</a>
        </div>
    </div>
</div>
   
   
<form action="{{ route('invoices.store') }}" method="POST">
    @csrf
  
     <div class="row pl-5">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Client*:</strong>
                <select class="form-control select2" name="customer" required>
                    <option></option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->civility}} {{$customer->name}} {{$customer->lastname}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="text" class="form-control datepicker" autocomplete="off"  name="date" placeholder="jj/mm/aaaa"  value="{{date('d/m/Y')}}"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
   
</form>
@endsection


@section('footer-scripts')
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>
  
  $(function () {
    // Summernote
    $('.summernote').summernote();


    $('.select2').select2();

    $('.datepicker').datepicker({ changeMonth: true,
      //changeYear: true,
      dateFormat: 'dd-mm-yy' }).val();

  });
  
</script>

@endsection