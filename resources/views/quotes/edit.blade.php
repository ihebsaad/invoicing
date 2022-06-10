@extends('layouts.admin')
@section('styles')

<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<!-- signature -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>       
 <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
 <style>
        .kbw-signature { width: 100%; height: 200px;}
     /*   #sigpad canvas{ width: 100% !important; height: auto;}*/
		#signature{cursor:pointer;}
		.th-products{
			background-color:#f07f32;color:white;padding:10px 20px;
			letter-spacing:2px;
			text-align:center;
		}
		.tab-content{
			min-height:400px;
		}
		.number{
			border:none;text-align:center;
			max-width:60px;
		}
		.product td{
			padding-top:8px;
			padding-bottom:8px;
			text-align:center;
		}
		.totals{
			margin-top:40px;
			float:right;
			width:280px;
			font-weight:bold;
			background-color:#f6f6f6;
		}
		.totals td{
			padding:5px 2px 2px 12px;
		}

		.bg-grey{
			background-color:#e3e8ea;
		}
		.bg-lightgrey{
			background-color:#f6f6f6;
		}
		.total-prod{
			background-color:transparent;
		}
		.numbers{
			max-width:80px!important;
		}

 </style> 

@endsection

 

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Devis {{$quote->id}} </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('quotes.index') }}"> Retour</a>
            </div>
        </div>
    </div>
     
    <div class="card card-primary card-outline card-tabs" style="width:100%">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-details-tab" data-toggle="pill" href="#custom-tabs-three-details" role="tab" aria-controls="custom-tabs-three-details" aria-selected="true">Détails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-prods-tab" data-toggle="pill" href="#custom-tabs-three-prods" role="tab" aria-controls="custom-tabs-three-prods" aria-selected="false">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-finance-tab" data-toggle="pill" href="#custom-tabs-three-finance" role="tab" aria-controls="custom-tabs-three-finance" aria-selected="false">Financement</a>
                </li>				
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-signature-tab" data-toggle="pill" href="#custom-tabs-three-signature" role="tab" aria-controls="custom-tabs-three-signature" aria-selected="false">Signature</a>
                </li>
                </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-three-details" role="tabpanel" aria-labelledby="custom-tabs-three-details-tab">

 
					<form action="{{ route('quotes.update',$quote->id) }}" method="POST">
						@csrf
						@method('PUT')
						<input type="hidden" value="{{$quote->id}}" id="quote" />
						<div class="row pl-5">
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<i class="fas fa-address-card"></i> 
									<?php $customer= \App\Models\Customer::find($quote->customer);?>
									{{$customer->civility}} {{$customer->name}} {{$customer->lastname}} <br>
									<i class="fas fa-phone mr-2"></i>{{$customer->phone}} <i class="fas fa-envelope mr-2 ml-4"></i> {{$customer->email}} <br>
									<i class="fas fa-map-marker mr-2"></i> {{$customer->address}} - {{$customer->city}} 
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5">
								<div class="form-group">
									<strong>Chaudière à :</strong>
									<select  class="form-control"   name="chaudiere" style="width:180px" >
										<option value=""></option>
										<option  @if($quote->chaudiere=='Gaz') selected="selected" @endif value="Gaz">Gaz</option>
										<option  @if($quote->chaudiere=='Fioul') selected="selected" @endif value="Fioul">Fioul</option>
										<option  @if($quote->chaudiere=='Charbon') selected="selected" @endif value="Charbon">Charbon</option>
									</select>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Date:</strong>
									<input type="text" class="form-control datepicker"  autocomplete="off" name="date" placeholder="jj/mm/aaaa" value="{{ date('d/m/Y', strtotime($quote->date)) }}"/>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Description:</strong>
									<textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{$quote->description}}</textarea>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
									<button type="submit" class="btn btn-primary">Enregistrer</button>
							</div>
						</div>

					</form>

				</div>

 
				<!-- PRODUITS --->
            	<div class="tab-pane fade" id="custom-tabs-three-prods" role="tabpanel" aria-labelledby="custom-tabs-three-prods-tab"  style="width:100%">

					<div class="">
						<table class="tab-products">
							<thead class="th-products">
								<tr>
									<th style="width:45%">Produit</th><th style="width:8%">Prix U</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total</th><th style="width:10%">+/-</th>
								</tr>
							</thead>
							<tbody style="min-height:300px">
								<tr class="product bg-lightgrey">
									@foreach($items as $item)
									@php 
										$product=\App\Models\Product::find($item->product); 
										$total_prod=floatval($product->prix) * intval($item->qty);
									@endphp
									<tr class="product bg-lightgrey">
										<td>{{$product->name}}</td><td>{{$product->prix}} €</td><td><input type="number" step="1" min="1" class="number" value="{{$item->qty}}"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number" value="{{$item->tva}}"/> %</td><td><input id="total-{{$item->id}}" type="number" readonly class="total-prod number" value="{{$total_prod}}"/> €</td><td><button id="delete_item"   class="btn btn-danger" onclick="delete_item({{$item->id}})"><i class="fas fa-trash "></i></td>
									</tr>
									@endforeach								
								
								</tr>
								<tr class="product bg-grey">
									<td>
										<select class="form-control select2"  id='product' onchange="set_price()">
											<option value="0">Sélectionnez le produit</option>
											@foreach($products as $prod)
												<option data-price="{{$prod->prix}}"    value="{{$prod->id}}">{{$prod->id}}- {{$prod->name}}  ({{$prod->prix}}€)</option>
											@endforeach
										</select>
									</td>
									<td><span  id="price"  >0</span> €</td>
									<td><input  id="qty" type="number" step="1" min="1" value="1" class="number" style="width:60px" onchange="total_prod()" /></td><td><input id="tva" type="number" step="0.5" min="5.5" class="number" value="5.5" style="width:60px"/> %</td><td><input id="total_prod" type="number"   class="number" value="0" readonly /> €</td><td><button id="add_product" disabled class="btn btn-success" onclick="add_product()"><i class="fas fa-plus "></i></td>
								</tr>								
							</tbody>
						</table>
						<table class="totals">
							<tr><td colspan="2">Sous Total</td><td><input id="total_ht" type="number"  class="number numbers" readonly  value="{{$quote->total_ht}}"/> €</td></tr>
							<tr><td colspan="2">Total TVA</td><td><input id="total_tva" type="number"  class="number numbers"  readonly  value="{{$quote->total_tva}}"/> €</td></tr>
							<tr><td>Remise</td><td><input id="remise" type="number"  class="number numbers" style="width:42px" value="{{$quote->remise}}" onchange="calcul()"/>%</td><td><input id="total_remise" readonly type="number"  class="number numbers" value="{{$quote->total_remise}}"/> €</td></tr>
							<tr><td colspan="2">Total</td><td><input id="total_ttc" type="number" readonly  class="number numbers" value="{{$quote->total_ttc}}" /> €</td></tr>
						</table>
					</div>

				</div>

				<div class="tab-pane fade" id="custom-tabs-three-finance" role="tabpanel" aria-labelledby="custom-tabs-three-finance-tab"  style="width:100%">
					<form action="{{ route('quotes.update',$quote->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="form-group">
									<strong>Modalité :</strong>
									<select  class="form-control"   id="modalite" name="modalite" style="width:180px" onchange="check_finances()">
										<option value=""></option>
										<option @if($quote->modalite=='Chèque') selected="selected" @endif value="Chèque">Chèque</option>
										<option  @if($quote->modalite=='Financement') selected="selected" @endif value="Financement">Financement</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">	
							<div id="finances"  @if($quote->modalite=='Chèque') style="display:none" @else style="display:contents"  @endif >
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant financé :</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_finance" style="width:180px" value="{{$quote->montant_finance}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Report 1ère échéance :</strong>
										<input type="number"  class="form-control" min="0"   name="report_echeance" style="width:180px" value="{{$quote->report_echeance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Nombre de mensualités :</strong>
										<input type="number"  class="form-control" min="0"  name="mensualites" style="width:180px" value="{{$quote->mensualites}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant Mensuel :</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_mensuel" style="width:180px" value="{{$quote->montant_mensuel}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant assurance :</strong>
										<input type="number"  class="form-control" min="0"  name="montant_assurance" style="width:180px" value="{{$quote->montant_assurance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Taux nominal :</strong>
										<input type="number"  class="form-control" min="0"  name="taux_nominal" style="width:180px" value="{{$quote->taux_nominal}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>TAEG :</strong>
										<input type="number"  class="form-control" min="0"  name="taeg" style="width:180px" value="{{$quote->taeg}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Solde de la pose :</strong>
										<input type="number"  class="form-control"   min="0" name="pose" style="width:180px" value="{{$quote->pose}}">
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-7 mt-5">
								<button type="submit" class="btn btn-primary">Enregistrer</button>
						</div>


					</form>


				</div>
				
            	<div class="tab-pane fade" id="custom-tabs-three-signature" role="tabpanel" aria-labelledby="custom-tabs-three-signature-tab"   >
					@if(\App\Models\Signature::where('quote',$quote->id)->exists())
						@php $url_img=\App\Models\Signature::where('quote',$quote->id)->first()->user_image;
						@endphp
						<img src="{{$url_img}}" width= '300'     height= ''/>
					@else
						<div class="row">
							<div class="col-md-6 offset-md-3 mt-5">
								<div class=" ">
									<div class="card-body">
										<div class="col-md-12">
											<label class="" for="">Dessinez votre Signature:</label>
											<br/>
											<form method="POST" action="{{ route('signpad.save') }}">
												@csrf
												<input type="hidden" name="quote_id" value="{{$quote->id}}" />
												<div id="sigpad" style="width:300px!important"></div>
												<br><br>
												<button id="clear" class="btn btn-danger">Vider</button>
												<textarea id="signature" name="signed" style="display: none"></textarea>
												<button class="btn btn-primary">Confirmer
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endif
			
				</div>

			</div>

		</div>
	</div>

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
      dateFormat: 'dd/mm/yy' }).val();

  	});
	
	function calcul(){

	update_totals();
	}


	function check_finances(){
		if($('#modalite').val()=='Financement'){
			$('#finances').css('display','contents');
		}else{
			$('#finances').hide('slow');
		}
	}

	function set_price(){
		var price= $('#product option:selected').data("price");
		$('#price').html(price);
		$('#qty').focus();
		$('#add_product').prop('disabled',false);
		total_prod();
	}

	function init(){
		$('#product').val(0);
		$('#product').select2().trigger('change');
		$("#product").prop("selectedIndex", 0);
		$('#price').html('0');
		$('#qty').val(1);
		$('#product').focus();
		$('#add_product').prop('disabled',true);
		total_prod();
	}
	function total_prod(){
		$('#total_prod').val(parseFloat($('#price').html())*$('#qty').val());
	}


  
  	function add_product(){

  	var _token = $('input[name="_token"]').val();
	var product= $("#product").val();
	var price=	$('#price').html();
	var qty=	$('#qty').val();
	var tva=	$('#tva').val();
	var quote=	$('#quote').val();

  	$.ajax({
        url: "{{ route('add_item') }}",
        method: "POST",
        data: {product:product,price:price,qty:qty,tva:tva, quote:quote,_token:_token},
        success: function (data) {
			init();
		}
	});
	}

	function delete_item(item){
	var _token = $('input[name="_token"]').val();

	$.ajax({
		url: "{{ route('delete_item') }}",
		method: "POST",
		data: {item:item,_token:_token},
		success: function (data) {
			init();
		}
	});
	}


	function update_totals(){
	var quote=	$('#quote').val();
	var _token = $('input[name="_token"]').val();
	var total_ht= $("#total_ht").val();
	var total_tva=	$('#total_tva').html();
	var total_ttc=	$('#total_ttc').val();
	var total_remise=	$('#total_remise').val();
	var remise=	$('#remise').val();

	$.ajax({
		url: "{{ route('update_totals') }}",
		method: "POST",
		data: {total_ht:total_ht,total_tva:total_tva,total_ttc:total_ttc,total_remise:total_remise,remise:remise,quote:quote, _token:_token},
		success: function (data) {
			init();
		}
	});

	}
</script>

 <!-- signature -->
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script type="text/javascript">
	var sigpad = $('#sigpad').signature({syncField: '#signature', syncFormat: 'PNG'});
		$('#clear').click(function(e) {
		e.preventDefault();
		sigpad.signature('clear');
		$("#signature").val('');
	});
</script>

@endsection

