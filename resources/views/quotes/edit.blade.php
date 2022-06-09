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
			background-color:#ff6633;color:white;padding:10px 20px;
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
			width:200px;
			font-weight:bold;
		}
		.bg-grey{
			background-color:#e3e8ea;
		}
		.bg-lightgrey{
			background-color:#f6f6f6;
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
                    <a class="nav-link" id="custom-tabs-three-prods-tab" data-toggle="pill" href="#custom-tabs-three-prods" role="tab" aria-controls="custom-tabs-three-prods" aria-selected="false">Contenu</a>
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
							<tbody>
								<tr class="product bg-lightgrey">
									<td>POMPE A CHALEUR AIR/EAU TOSHIBA - ESTIA 8 MONO</td><td> 650 €</td><td><input type="number" step="1" min="1" class="number"/></td><td><input type="number" step="0.5" min="5.5" class="number" value="5.5" /> %</td><td><input type="number"   class="number" value="" readonly /></td><td></td>
									@foreach($items as $item)
									@php $product=\App\Models\Product::find($item->product); @endphp
									<tr class="product bg-lightgrey">
										<td>{{$product->name}}</td><td>{{$product->prix}} €</td><td><input type="number" step="1" min="1" class="number" value="{{$item->qty}}"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number" value="{{$item->tva}}"/> %</td><td>{!! floatval($product->prix) * intval($item->qty) !!} €</td><td></td>
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
									<td><input  id="qty" type="number" step="1" min="1" value="1" class="number" style="width:60px" onchange="total_prod()" /></td><td><input id="tva" type="number" step="0.5" min="5.5" class="number" value="5.5" style="width:60px"/> %</td><td><input id="total_prod" type="number"   class="number" value="0" readonly /> €</td><td><button class="btn btn-success" onclick="add_product()"><i class="fas fa-plus "></i></td>
								</tr>								
							</tbody>
						</table>
						<table class="totals">
							<tr><td colspan="2">Sous Total</td><td>5100€</td></tr>
							<tr><td colspan="2">Total TVA</td><td>380€</td></tr>
							<tr><td>Remise</td><td>0%</td><td>0€</td></tr>
							<tr><td colspan="2">Total</td><td>6300€</td></tr>
						</table>
					</div>

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
	function set_price(){
		var price= $('#product option:selected').data("price");
		$('#price').html(price);
		$('#qty').focus();
		total_prod();
	}

	function init(){
		$('#product').val(0);
		$('#product').select2().trigger('change');

		$("#product").prop("selectedIndex", 0);
		$('#price').html('0');
		$('#qty').val(1);
		$('#product').focus();
		total_prod();
	}
	function total_prod(){
		$('#total_prod').val(parseFloat($('#price').html())*$('#qty').val());
	}

  $(function () {
    // Summernote
    $('.summernote').summernote();


    $('.select2').select2();

    $('.datepicker').datepicker({ changeMonth: true,
      //changeYear: true,
      dateFormat: 'dd/mm/yy' }).val();

  });
  
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

</script>
 <!-- signature -->

<!-- jQuery signature plugin js -->
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

