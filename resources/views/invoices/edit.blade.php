@extends('layouts.admin')
@section('styles')

<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

 <style>
		.tab-products{
			width:100%;
			font-size:12px;
		}
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
			max-width:64px;
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
			border:2px solid #f07f32;
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
		.bg-transparent{
			background-color:transparent;
		}
		.table-aide{
			background-color:#f6f6f6;
		}
		.table-aide td{
			padding:5px 10px 2px 12px;
		}
 </style>

@endsection



@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Facture {{$invoice->id}} -  {{$invoice->reference}} </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary mb-2" href="{{ route('invoices.index') }}"> Retour</a>
            </div>
            <div class="float-right mr-3 ml-3 mb-2">
				<a class="btn btn-success " target="_blank"  href="{{ route('invoices.show_pdf',$invoice->id) }}" style="float:left" title="Ouvrir en PDF"><i class="fas fa-file-pdf"></i></a>
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

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-three-details" role="tabpanel" aria-labelledby="custom-tabs-three-details-tab">


					<form action="{{ route('invoices.update',$invoice->id) }}" method="POST">
						@csrf
						@method('PUT')
						<input type="hidden" value="{{$invoice->id}}" id="invoice" />
						<div class="row pl-3">
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<i class="fas fa-address-card"></i>
									<?php $customer= \App\Models\Customer::find($invoice->customer);?>
									{{$customer->civility}} {{$customer->name}} {{$customer->lastname}} <br>
									<i class="fas fa-phone mr-2"></i>{{$customer->phone}} <i class="fas fa-envelope mr-2 ml-4"></i> {{$customer->email}} <br>
									<i class="fas fa-map-marker mr-2"></i> {{$customer->address}} - {{$customer->city}}
								</div>

							</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Adresse du chantier:</strong>
										<input type="text"   name="delivery_address" id="delivery_address" class="form-control" placeholder="Adresse" value="{{$invoice->delivery_address ?? $customer->delivery_address}}" style="max-width:400px">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-5">
									<div class="form-group">
										<strong>Ville:</strong>
										<input type="text" name="delivery_city" id="delivery_city" class="form-control" placeholder="Ville" value="{{$invoice->delivery_city ?? $customer->delivery_city}}" style="max-width:300px">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<strong>Pays:</strong>
										<select type="text" name="delivery_country" id="delivery_country" class="form-control"  >
											<option></option>
											@foreach($countries as $key =>$value)
												@php $country= $invoice->delivery_country!='' ? $invoice->delivery_country : $customer->delivery_country ; @endphp
												<option value="{{$value}}"   @if($value== $country) selected="selected"  selected="selected" @endif >{{$value}}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-2">
									<div class="form-group">
										<strong>Code postal:</strong>
										<input type="text" name="delivery_postal" id="delivery_postal"  class="form-control" placeholder="Code postal" value="{{$invoice->delivery_postal ?? $customer->delivery_postal}}">
									</div>
								</div>

						</div>

						<div class="row pl-3 mt-2">

							<div class="col-xs-12 col-sm-12 col-md-5">
								<div class="form-group">
									<strong>Chaudière à :</strong>
									<select  class="form-control"   name="chaudiere" style="max-width:180px" >
										<option value=""></option>
										<option  @if($invoice->chaudiere=='Gaz') selected="selected" @endif value="Gaz">Gaz</option>
										<option  @if($invoice->chaudiere=='Fioul') selected="selected" @endif value="Fioul">Fioul</option>
										<option  @if($invoice->chaudiere=='Charbon') selected="selected" @endif value="Charbon">Charbon</option>
									</select>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Type de logement:</strong>
									<select class="form-control"   name="logement"  value="{{ $invoice->logement}}" style="max-width:300px">
										<option value="Maison" @if($invoice->logement=='Maison') selected="selected" @endif >Maison</option>
										<option value="Appartement" @if($invoice->logement=='Appartement') selected="selected" @endif >Appartement</option>
									</select>								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5">
								<div class="form-group">
									<strong>Surface chauffée (m²):</strong>
									<input type="number" class="form-control"   name="surface" value="{{ $invoice->surface }}" style="width:180px"/>
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Date de visite:</strong>
									<input type="text" class="form-control datepicker"  autocomplete="off" name="date" placeholder="jj/mm/aaaa" value="{{ date('d/m/Y', strtotime($invoice->date)) }}"/>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Note:</strong>
									<textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{$invoice->description}}</textarea>
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
						<table class="tab-products table-responsive  table-striped " style="width:100%">
							<thead class="th-products">
								<tr>
									<th style="width:35%">Produit</th><th style="width:8%">Prix U</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total</th><th style="width:10%">+/-</th>
								</tr>
							</thead>
							<tbody id="list-prods" style="min-height:300px list-prods">
								<tr class="product bg-grey new-prod">
									<td>
										<select class="form-control select2"  id='product' onchange="set_price()">
											<option value="0">Sélectionnez le produit</option>
												@foreach($products as $prod)
													<option data-price="{{$prod->prix}}"  data-text="{{$prod->name}}" data-tva="{{$prod->tva}}" data-priceht="{{$prod->prix_ht}}"   value="{{$prod->id}}">{{$prod->id}}- {{$prod->name}}  ({{$prod->prix}}€)</option>
												@endforeach
										</select>
									</td>
									<td><input  class="number bg-transparent"  id="price"  value="0" /> €</td>
									<td><input  id="qty" type="number" step="1" min="1" value="1" class="number" style="width:60px" onchange="total_prod()" /></td><td><input readonly id="tva" type="number"  class="number bg-transparent" value="0" style="width:60px"/> %</td><td><input id="total_prod" type="number"   class="number bg-transparent" value="0" readonly /> €</td><td><button id="add_product" disabled class="btn btn-success add-prod" onclick="add_product();  "><i class="fas fa-plus "></i></td>
								</tr>
								@php $c=0;  @endphp
								@foreach($items as $item)
									@php
										$product=\App\Models\Product::find($item->product);
										$total_prod=floatval($product->prix) * intval($item->qty);
										//$total_pose=floatval($product->pose) * floatval($product->tva_pose)*0.01 + floatval($product->pose) ;

										$c++;
									@endphp
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-{{$product->id}}">
										<td class="myproducttd" data-prix="{{$product->prix}}" data-prixht="{{$product->prix_ht}}" data-id="{{$product->id}}"  ><b>{{$product->name}}</b></td><td >{{$product->prix}} €</td><td><input id="qty-{{$product->id}}" type="number" step="1" min="1" class="number" value="{{$item->qty}}"  onchange="calcul()"/></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="{{$item->tva}}"/> %</td><td><input id="total-{{$item->id}}" type="number" readonly class="total-prod number" value="{{$total_prod}}"/> €</td><td><button id="delete_item"   class="btn-sm btn-danger" onclick="delete_item({{$product->id}},{{$item->id}})"><i class="fas fa-minus " data-id="{{$item->id}}"></i></td>
									</tr>
									@if($product->pose > 0)
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-pose-{{$product->id}}">
										<td class="myproductpose" data-prix="{{$product->prix}}" data-prixht="{{$product->prix_ht}}" data-id="{{$product->id}}" data-pose="{{$product->pose}}" data-tvapose="{{$product->tva_pose}}" data-posettc="{{$product->pose_ttc}}" ><i>Pose {{$product->name}}</i></td><td >{{$product->pose}} €</td><td><input type="number" value="1"  readonly class="number" /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" readonly value="{{$product->tva_pose}}"/> %</td><td><input id="totalpose-{{$item->id}}" type="number" readonly class="total-prod number" value="{{$product->pose_ttc}}"/> €</td><td></td>
									</tr>
									@endif
								@endforeach

							</tbody>
							<tfoot>
								<tr class="product bg-grey">
									<td>Remise</td><td><input id="remise" type="number"  class="number" style="width:100px" value="{{$invoice->remise}}" onchange="calcul()"/> €</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number" id="tva_remise" name="tva_remise" style="width:100px" step="0.5" value="{{$invoice->tva_remise ?? '5.5'}}"/> %</td><td><input id="total_remise" readonly type="number"  class="number numbers bg-transparent" value="{{$invoice->total_remise}}" /> €</td><td></td>
								</tr>
							</tfoot>
						</table>
						<div class="row">
							<div class="col-md-6 row pt-3 pl-3 mt-5 ">
							<!--<table style="width:360px;height:100px" class="table-aide" >
									<tr>
										<td><strong>Aide éligible:</strong></td><td colspan="2"><strong>Montant</strong></td>
									</tr>
									<tr>
										<td >
											<div class="form-group">
												<select class="form-control" style="width:200px" name="type_aide" id="type_aide" onchange="calcul();" >
													<option></option>
													<option @if($invoice->type_aide=='Prime Renov') selected="selected" @endif value="Prime Renov">Prime Renov</option>
													<option @if($invoice->type_aide=='Prime B') selected="selected" @endif value="Prime B">Prime B</option>
													<option @if($invoice->type_aide=='Prime C') selected="selected" @endif value="Prime C">Prime C</option>
												</select>
											</div>
										</td>
										<td style="padding-right:0">
											<div class="form-group">
												<input type="number" class="form-control" style="width:100px" min="0" value="{{$invoice->aide}}" id="aide" onchange="calcul();"/>
											</div>
										</td>
										<td style="padding:0 10px 0 0">€</td>
									</tr>
								</table>-->
							</div>

							<div class="col-md-6">
								<table class="totals">
									<tr><td colspan="2">Total HT</td><td><input id="total_ht" type="number"  class="number numbers bg-transparent" readonly  value="{{$invoice->total_ht}}"/> €</td></tr>
									<tr><td colspan="2">Total TVA</td><td><input id="total_tva" type="number"  class="number numbers bg-transparent"  readonly  value="{{$invoice->total_tva}}"/> €</td></tr>
									<tr><td colspan="2">TOTAL TTC</td><td><input id="total_ttc" type="number" readonly  class="number numbers bg-transparent" value="{{$invoice->total_ttc}}" /> €</td></tr>
								<!--<tr><td colspan="2">Net à payer</td><td><input id="net" type="number" readonly  class="number numbers bg-transparent" value="{{intval($invoice->net)}}" /> €</td></tr>-->
								</table>
							</div>
						</div>
					</div>

				</div>

				<div class="tab-pane fade" id="custom-tabs-three-finance" role="tabpanel" aria-labelledby="custom-tabs-three-finance-tab"  style="width:100%">
					<form action="{{ route('invoices.update',$invoice->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="form-group">
									<strong>Modalité :</strong>
									<select  class="form-control"   id="modalite" name="modalite" style="width:180px" onchange="check_finances()">
										<option value=""></option>
										<option @if($invoice->modalite=='Chèque') selected="selected" @endif value="Chèque">Chèque</option>
										<option  @if($invoice->modalite=='Financement') selected="selected" @endif value="Financement">Financement</option>
										<option  @if($invoice->modalite=='Chèque & Financement') selected="selected" @endif value="Chèque & Financement">Chèque et Financement</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div id="finances"  @if($invoice->modalite=='Chèque' || $invoice->modalite== '') style="display:none" @else style="display:contents"  @endif >
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant financé en €:</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_finance" style="width:180px" value="{{$invoice->montant_finance}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Report 1ère échéance :</strong>
										<input type="number"  class="form-control" min="0"   name="report_echeance" style="width:180px" value="{{$invoice->report_echeance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Nombre de mensualités :</strong>
										<input type="number"  class="form-control" min="0"  name="mensualites" style="width:180px" value="{{$invoice->mensualites}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel sans assurance en €:</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_mensuel" style="width:180px" value="{{$invoice->montant_mensuel}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel de l'assurance en €:</strong>
										<input type="number"  class="form-control" min="0"  name="montant_assurance" style="width:180px" value="{{$invoice->montant_assurance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% Taux nominal :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taux_nominal" style="width:180px" value="{{$invoice->taux_nominal}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% AEG :</strong>
										<input type="number"  class="form-control" min="0" step="0.01"  name="taeg" style="width:180px" value="{{$invoice->taeg}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Solde de la pose en €:</strong>
										<input type="number"  class="form-control"   min="0" name="pose" style="width:180px" value="{{$invoice->pose}}">
									</div>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-7 mt-5">
								<button type="submit" class="btn btn-primary">Enregistrer</button>
						</div>


					</form>


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
		var total_ht=0;
		var total_ttc=0;
		var total_tva=0;
		$('#list-prods .myproduct').each(function(){
    		$(this).find('.myproducttd').each(function(){
				id_item=$(this).data('id');
				qty= parseInt($('#qty-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('prixht')* qty ));
				total_ttc+=parseFloat(( $(this).data('prix') *  qty));
    	});
		$(this).find('.myproductpose').each(function(){
				//id_item=$(this).data().id;
				//qty= ($('#qty-'+id_item).val());
				alert($(this).data().pose );
				alert($(this).data().posettc );
				total_ht+=(( $(this).data().pose  ));
				total_ttc+=(( $(this).data().posettc));

    		});
		});

		$("#total_ht").val(total_ht);
		total_tva = total_ttc-total_ht;
	    $('#total_tva').val(total_tva);

		var remise=parseFloat($('#remise').val());
		var tva_remise=parseFloat($('#tva_remise').val());

		var total_remise=0;
		if(parseFloat(remise)>0){
			var total_remise = remise + ((tva_remise* remise)/100);
			$('#total_remise').val(total_remise.toFixed(2));
			total_ttc= total_ttc- total_remise ;
		}else{
			$('#total_remise').val(0);
		}
	    $('#total_ttc').val(total_ttc);

 		/*var net=parseInt(total_ttc);
		$('#net').val(net);*/
		update_totals();
	}


	function check_finances(){
		if($('#modalite').val()=='Financement' || $('#modalite').val()=='Chèque & Financement'){
			$('#finances').css('display','contents');
		}else{
			$('#finances').hide('slow');
		}
	}

	function set_price(){
		if($('#product').val() >0){
			var price= parseFloat($('#product option:selected').data("price"));
			var tva= parseFloat($('#product option:selected').data("tva"));
			$('#tva').val(tva);
			$('#price').val(price);
			$('#qty').focus();
			$('#add_product').prop('disabled',false);
			var total_prod=parseFloat($('#price').val()) * parseInt($('#qty').val()) ;
			$('#total_prod').val(total_prod);
		}
	}

	function init(){
		$('#product').val(0);
		$('#product').select2().trigger('change');
		$("#product").prop("selectedIndex", 0);
		$('#tva').val('0');
		$('#total_prod').val('0');
		$('#price').val('0');
		$('#qty').val(1);
		$('#product').focus();
		$('#add_product').prop('disabled',true);
		//total_prod();
	}
	function total_prod(){
		var total_prod=parseFloat($('#price').val()) * parseInt($('#qty').val()) ;
		//alert(total_prod);
		$('#total_prod').val(total_prod);
	}



	function add_product(){

	var _token = $('input[name="_token"]').val();
	var product= parseInt($("#product").val());
	var product_text= $("#product option:selected").data("text");
	var pose= parseFloat($("#product option:selected").data("pose"));
	var tvapose= parseFloat($("#product option:selected").data("tvapose"));
	var posettc= parseFloat($("#product option:selected").data("posettc"));
	var price_ht= parseFloat($("#product option:selected").data("priceht"));
	var price=	parseFloat($('#price').val());
	var qty=	parseInt($('#qty').val());
	var total= price*qty;
	var tva=	parseFloat($('#tva').val());
	var invoice=	parseInt($('#invoice').val());
	//let long = document.getElementsByClassName('myproducttd').length +1 ;
	$.ajax({
	url: "{{ route('add_item') }}",
	method: "POST",
	async:false,
	data: {product:product,price:price,qty:qty,tva:tva, invoice:invoice,_token:_token},
	success: function (data) {
		if(data!=''){
			init();
			item_id=data;
			var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-'+product+'"><td class="myproducttd"  data-prix="'+price+'" data-prixht="'+price_ht+'" data-id="'+product+'"  ><b>'+product_text+'</b></td><td>'+price+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qty+'"  id="qty-'+product+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tva+'"/> %</td><td><input id="total-'+data+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id="delete_item"   class="btn-sm btn-danger" onclick="delete_item('+product+','+item_id+')"><i class="fas fa-minus "  ></i></td></tr>';
					if(pose>0){
						row+='<tr class="myproduct product bg-lightgrey tr-prod" id="row-pose-'+product+'"><td class="myproductpose"  data-prix="'+price+'" data-prixht="'+price_ht+'" data-id="'+product+'" data-pose="'+pose+'" data-tvapose="'+tvapose+'"   data-posettc="'+posettc+'" ><i>Pose '+product_text+'</i></td><td>'+pose+' €</td><td><input type="number" readonly step="1" min="1" class="number bg-transparent" value="1"   /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tvapose+'"/> %</td><td><input id="totalpose-'+data+'" type="number" readonly class="total-prod number" value="'+posettc+'"/> €</td><td></td></tr>';
					}
					$('#list-prods').append(row);

		}else{
			alert('Ce produit est déjà ajouté !')
		}

	}
	});
	// attendre une seconde puis calculer
	/*setTimeout(function(){
	calcul();
	}, 1000);*/
	calcul();

	}

function delete_item(product,item){

	if(!confirm("Êtes vous sûres?")) {
    return false;
  	}

	var _token = $('input[name="_token"]').val();

	$.ajax({
	url: "{{ route('delete_item') }}",
	method: "POST",
	data: {item:item,_token:_token},
	success: function (data) {
		init();
		$('#row-'+product).html('');
		$('#row-pose-'+product).html('');
		calcul();
	}
	});
}


	function update_totals(){
	var invoice=	$('#invoice').val();
	var _token = $('input[name="_token"]').val();
	var total_ht= $("#total_ht").val();
	var total_tva=	$('#total_tva').val();
	var total_ttc=	$('#total_ttc').val();
	var total_remise=	$('#total_remise').val();
	var remise=	$('#remise').val();
	var net=	total_ttc;
	var tva_remise=	$('#tva_remise').val();

	console.log('updating totals');
	$.ajax({
		url: "{{ route('invoices.update_totals') }}",
		method: "POST",
		data: {total_ht:total_ht,total_tva:total_tva,total_ttc:total_ttc,total_remise:total_remise,remise:remise,invoice:invoice,net:net,tva_remise:tva_remise, _token:_token},
		success: function (data) {
			console.log('totals updated');
			init();
		}
	});

	}
</script>


@endsection

