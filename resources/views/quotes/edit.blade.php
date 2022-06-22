@extends('layouts.admin')
@section('styles')

<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<!-- signature -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>       
 <style>
		.kbw-signature {
			display: inline-block;
			border: 1px solid #a0a0a0;
			-ms-touch-action: none;
			 width: 100%; height: 200px;
		}
		.kbw-signature-disabled {
			opacity: 0.35;
		}
     /*   #sigpad canvas{ width: 100% !important; height: auto;}*/
		#signature{cursor:pointer;}
		.tab-products{
			width:100%;
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
                <h2> Devis {{$quote->id}} -  {{$quote->reference}}  </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('quotes.index') }}"> Retour</a>
            </div>
            <div class="float-right mr-3 ml-3">
				<a class="btn btn-success " target="_blank"  href="{{ route('quotes.show_pdf',$quote->id) }}" style="float:left" title="Ouvrir en PDF"><i class="fas fa-file-pdf"></i></a>
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

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Adresse de livraison:</strong>
										<input type="text"   name="delivery_address" id="delivery_address" class="form-control" placeholder="Adresse" value="{{$quote->delivery_address ?? $customer->delivery_address}}" style="width:460px">
									</div>
								</div> 

								<div class="col-xs-12 col-sm-12 col-md-5">
									<div class="form-group">
										<strong>Ville:</strong>
										<input type="text" name="delivery_city" id="delivery_city" class="form-control" placeholder="Ville" value="{{$quote->delivery_city ?? $customer->delivery_city}}" style="width:300px">
									</div>
								</div> 
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<strong>Pays:</strong>
										<select type="text" name="delivery_country" id="delivery_country" class="form-control"  >
											<option></option>
											@foreach($countries as $key =>$value)
												@php $country= $quote->delivery_country!='' ? $quote->delivery_country : $customer->delivery_country ; @endphp
												<option value="{{$value}}"   @if($value== $country) selected="selected"  selected="selected" @endif >{{$value}}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-2">
									<div class="form-group">
										<strong>Code postal:</strong>
										<input type="text" name="delivery_postal" id="delivery_postal"  class="form-control" placeholder="Code postal" value="{{$quote->delivery_postal ?? $customer->delivery_postal}}">
									</div>
								</div> 

						</div> 

						<div class="row pl-5 mt-2">

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
									<strong>Type de logement:</strong>
									<select class="form-control"   name="logement"  value="{{ $quote->logement}}" style="width:300px">
										<option value="Maison" @if($quote->logement=='Maison') selected="selected" @endif >Maison</option>
										<option value="Appartement" @if($quote->logement=='Appartement') selected="selected" @endif >Appartement</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-5">
								<div class="form-group">
									<strong>Surface chauffée (m²):</strong>
									<input type="number" class="form-control"   name="surface" value="{{ $quote->surface }}" style="width:180px"/>
								</div>
							</div>
							
							
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Date de visite:</strong>
									<input type="text" class="form-control datepicker"  autocomplete="off" name="date" placeholder="jj/mm/aaaa" value="{{ date('d/m/Y', strtotime($quote->date)) }}"/>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Note:</strong>
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
						<table class="tab-products" style="width:100%">
							<thead class="th-products">
								<tr>
									<th style="width:45%">Produit</th><th style="width:8%">Prix U</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total</th><th style="width:10%">+/-</th>
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
										$c++;
									@endphp
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-{{$c}}">
										<td class="myproducttd" data-prix="{{$product->prix}}" data-prixht="{{$product->prix_ht}}" data-id="{{$item->id}}"  >{{$product->name}}</td><td >{{$product->prix}} €</td><td><input id="qty-{{$item->id}}" type="number" step="1" min="1" class="number" value="{{$item->qty}}"  onchange="calcul()"/></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="{{$item->tva}}"/> %</td><td><input id="total-{{$item->id}}" type="number" readonly class="total-prod number" value="{{$total_prod}}"/> €</td><td><button id="delete_item"   class="btn btn-danger" onclick="delete_item({{$item->id}},{{$c}})"><i class="fas fa-trash " data-id="{{$c}}"></i></td>
									</tr>
								@endforeach	
							</tbody>
							<tfoot>							
								<tr class="product bg-grey">
									<td>Remise</td><td><input id="remise" type="number"  class="number" style="width:100px" value="{{$quote->remise}}" onchange="calcul()"/> €</td><td style="text-align:center">1</td><td><input type="number" class="number" id="tva_remise" name="tva_remise" style="width:100px" step="0.5" value="{{$quote->tva_remise ?? '5.5'}}"/> %</td><td><input id="total_remise" readonly type="number"  class="number numbers bg-transparent" value="{{$quote->total_remise}}" /> €</td><td></td>
								</tr>
							</tfoot>
						</table>
						<div class="row">
						<div class="col-md-6 row pt-3 pl-5 mt-5 ">
								<table style="width:360px;height:100px" class="table-aide" >
									<tr>
										<td><strong>Aide éligible:</strong></td><td colspan="2"><strong>Montant</strong></td>
									</tr>
									<tr>
										<td >
											<div class="form-group">
												<select class="form-control" style="width:200px" name="type_aide" id="type_aide" onchange="calcul();" >
													<option></option>
													<option @if($quote->type_aide=='Prime Renov') selected="selected" @endif value="Prime Renov">Prime Renov</option>
													<option @if($quote->type_aide=='Prime B') selected="selected" @endif value="Prime B">Prime B</option>
													<option @if($quote->type_aide=='Prime C') selected="selected" @endif value="Prime C">Prime C</option>
												</select>
											</div>
										</td>
										<td style="padding-right:0">
											<div class="form-group">
												<input type="number" class="form-control" style="width:100px" min="0" value="{{$quote->aide}}" id="aide" onchange="calcul();"/>
											</div>
										</td>
										<td style="padding:0 10px 0 0">€</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="totals">
									<tr><td colspan="2">Sous Total</td><td><input id="total_ht" type="number"  class="number numbers bg-transparent" readonly  value="{{$quote->total_ht}}"/> €</td></tr>
									<tr><td colspan="2">Total TVA</td><td><input id="total_tva" type="number"  class="number numbers bg-transparent"  readonly  value="{{$quote->total_tva}}"/> €</td></tr>
									<tr><td colspan="2">TOTAL TTC</td><td><input id="total_ttc" type="number" readonly  class="number numbers bg-transparent" value="{{$quote->total_ttc}}" /> €</td></tr>
									<tr><td colspan="2">Net à payer</td><td><input id="net" type="number" readonly  class="number numbers bg-transparent" value="{{intval($quote->net)}}" /> €</td></tr>
								</table>
							</div>
						</div>
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
										<option  @if($quote->modalite=='Chèque & Financement') selected="selected" @endif value="Chèque & Financement">Chèque et Financement</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">	
							<div id="finances"  @if($quote->modalite=='Chèque' || $quote->modalite== '') style="display:none" @else style="display:contents"  @endif >
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant financé en € :</strong>
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
										<strong>Montant mensuel sans assurance en €:</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_mensuel" style="width:180px" value="{{$quote->montant_mensuel}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel de l'assurance en €:</strong>
										<input type="number"  class="form-control" min="0"  name="montant_assurance" style="width:180px" value="{{$quote->montant_assurance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% Taux nominal :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taux_nominal" style="width:180px" value="{{$quote->taux_nominal}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% TAEG :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taeg" style="width:180px" value="{{$quote->taeg}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Solde de la pose en €:</strong>
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

						<div class="row">
							<div class="col-md-6 ">
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
							<div class="col-md-6 pt-5 pl-5">
							@if(\App\Models\Signature::where('quote',$quote->id)->exists())
								@php $url_img=\App\Models\Signature::where('quote',$quote->id)->first()->user_image;
								@endphp
								<img src="{{$url_img}}" width= '300'     height= ''/>
							@endif
							</div>
						</div>

						<div class="row bg-lightgrey pt-5 pb-5">
							
							<div class="col-md-6 pl-5">
								<form method="POST" action="{{ route('quotes.ajout_signature') }}"   enctype='multipart/form-data' >
									@csrf
									<input type="hidden" name="quote" value="{{$quote->id}}" />

									<div class="form-group">
										<strong>Envoyez le devis signé :</strong>
										<input type="file"  class="form-control"   name="devis_signe"    >
									</div>

									<div class="col-xs-12 col-sm-12 col-md-7 mt-5">
										<button type="submit" class="btn btn-primary">Envoyer</button>
									</div>
								</form>
							</div>
							<div  class="col-md-6 pl-5">
								@if($quote->devis_signe!='')
									<a download href="<?php echo  URL::asset('/fichiers/'.$quote->devis_signe);?>" >Télécharger le devis signé</a><br>
								@endif
							</div>
						</div>
					
			
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

    	})
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

		var aide=parseFloat($('#aide').val());
		var net=parseInt(total_ttc-aide);
		$('#net').val(net);
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
		if(  parseInt($('#product').val())  > 0 ){
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
	var price_ht= parseFloat($("#product option:selected").data("priceht"));
	var price=	parseFloat($('#price').val());
	var qty=	parseInt($('#qty').val());
	var total= price*qty;
	var tva=	parseFloat($('#tva').val());
	var quote=	parseInt($('#quote').val());

  	$.ajax({
        url: "{{ route('add_item') }}",
        method: "POST",
		async:false,
        data: {product:product,price:price,qty:qty,tva:tva, quote:quote,_token:_token},
        success: function (data) {
			init();
			var row='<tr class="myproduct product bg-lightgrey tr-prod" ><td class="myproducttd"  data-prix="'+price+'" data-prixht="'+price_ht+'" data-id="'+data+'"  >'+product_text+'</td><td>'+price+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qty+'"  id="qty-'+data+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" value="'+tva+'"/> %</td><td><input id="total-'+data+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id="delete_item"   class="btn btn-danger" onclick="delete_item(product)"><i class="fas fa-minus "  ></i></td></tr>';
			$('#list-prods').append(row);
			
		}
	});
	// attendre une seconde puis calculer
	/*setTimeout(function(){
    	calcul();
	}, 1000);*/
	calcul();

	}

	function delete_item(item,id){
	var _token = $('input[name="_token"]').val();

	$.ajax({
		url: "{{ route('delete_item') }}",
		method: "POST",
		data: {item:item,_token:_token},
		success: function (data) {
			init();
			$('#row-'+id).html('');
			calcul();
		}
	});
	}


	function update_totals(){
	var quote=	$('#quote').val();
	var _token = $('input[name="_token"]').val();
	var total_ht= $("#total_ht").val();
	var total_tva=	$('#total_tva').val();
	var total_ttc=	$('#total_ttc').val();
	var total_remise=	$('#total_remise').val();
	var remise=	$('#remise').val();
	var aide=	$('#aide').val();
	var type_aide=	$('#type_aide').val();
	var net=	$('#net').val();
	var tva_remise=	$('#tva_remise').val();

	$.ajax({
		url: "{{ route('update_totals') }}",
		method: "POST",
		data: {total_ht:total_ht,total_tva:total_tva,total_ttc:total_ttc,total_remise:total_remise,remise:remise,quote:quote,aide:aide,type_aide:type_aide,net:net,tva_remise:tva_remise, _token:_token},
		success: function (data) {
			init();
		}
	});

	}
</script>

 <!-- signature -->
<script type="text/javascript" src="{{asset('js/jquery.signature.js')}}"></script>

<script type="text/javascript">
	var sigpad = $('#sigpad').signature({syncField: '#signature', syncFormat: 'PNG'});
		$('#clear').click(function(e) {
		e.preventDefault();
		sigpad.signature('clear');
		$("#signature").val('');
	});
</script>

@endsection

