@extends('layouts.admin')
@section('styles')

<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<!-- signature
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
-->
<link rel="stylesheet" href="{{asset('css/signature-pad.css')}}">

 <style>
		.vtop{
			vertical-align:top;
		}
		.kbw-signature {
			display: inline-block;
			border: 1px solid #a0a0a0;
			 width: 100%; height: 200px;
		}
		.kbw-signature-disabled {
			opacity: 0.35;
		}
     /*   #sigpad canvas{ width: 100% !important; height: auto;}*/
		.sigpad{
			cursor:pointer;

		}
		.tab-products{
			width:100%;
			font-size:12px;
			display:inline-table;
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
			max-width:100px!important;
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
                <a class="btn btn-primary mb-2" href="{{ route('quotes.index') }}"> Retour</a>
            </div>
			<div class="float-right mr-3 ml-3 mb-2">
				<a class="btn btn-dark mb-3 mr-2 " href="{{ route('quotes.download_pdf_signature',$quote->id) }}" style="float:left" title="Télécharger avec signature"><i class="fas fa-signature"></i></a>
			</div>
            <div class="float-right mr-3 ml-3 mb-2">
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
                    <a class="nav-link" id="custom-tabs-three-finance-tab" data-toggle="pill" href="#custom-tabs-three-finance" role="tab" aria-controls="custom-tabs-three-finance" aria-selected="false">Règlement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-signature-tab" data-toggle="pill" href="#custom-tabs-three-signature" role="tab" aria-controls="custom-tabs-three-signature" aria-selected="false">Signature électronique</a>
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
						<div class="row pl-3">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<i class="fas fa-address-card"></i>
									<?php $customer= \App\Models\Customer::find($quote->customer);?>
									{{$customer->company ?? ''}} {{$customer->civility ?? ''}} {{$customer->name ?? ''}} {{$customer->lastname ?? ''}} <br>
									<i class="fas fa-phone mr-2"></i>{{$customer->phone ?? ''}} <i class="fas fa-envelope mr-2 ml-4"></i> {{$customer->email ?? ''}} <br>
									<i class="fas fa-map-marker mr-2"></i> {{$customer->address ?? ''}} - {{$customer->city ?? ''}}
								</div>
							</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="form-group">
										<strong>Adresse du chantier:</strong>
										<input type="text"   name="delivery_address" id="delivery_address" class="form-control" placeholder="Adresse" value="{{$quote->delivery_address ?? $customer->delivery_address ?? '' }}" style="max-width:400px">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<strong>Ville:</strong>
										<input type="text" name="delivery_city" id="delivery_city" class="form-control" placeholder="Ville" value="{{$quote->delivery_city ?? $customer->delivery_city ?? ''}}" style="max-width:300px">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-3">
									<div class="form-group">
										<strong>Pays:</strong>
										<select type="text" name="delivery_country" id="delivery_country" class="form-control"  >
											<option></option>
											@foreach($countries as $key =>$value)
												@php $country= $quote->delivery_country!='' ? $quote->delivery_country : $customer->delivery_country ?? ''; @endphp
												<option value="{{$value}}"   @if($value== $country) selected="selected"  selected="selected" @endif >{{$value}}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-2">
									<div class="form-group">
										<strong>Code postal:</strong>
										<input type="text" name="delivery_postal" id="delivery_postal"  class="form-control" placeholder="Code postal" value="{{$quote->delivery_postal ?? $customer->delivery_postal ?? ''}}">
									</div>
								</div>

						</div>

						<div class="row pl-3 mt-2">
							@if( $quote->chaudiere!='' )
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="form-group">
									<strong>Chaudière à :</strong>
									<select  class="form-control"   name="chaudiere" style="max-width:180px" >
										<option value=""></option>
										<option  @if($quote->chaudiere=='Gaz') selected="selected" @endif value="Gaz">Gaz</option>
										<option  @if($quote->chaudiere=='Fioul') selected="selected" @endif value="Fioul">Fioul</option>
										<option  @if($quote->chaudiere=='Charbon') selected="selected" @endif value="Charbon">Charbon</option>
										<option  @if($quote->chaudiere=='Pompe à chaleur air-eau') selected="selected" @endif value="Pompe à chaleur air-eau">Pompe à chaleur air-eau</option>
										<option  @if($quote->chaudiere=='Pompe à chaleur eau-eau') selected="selected" @endif value="Pompe à chaleur eau-eau">Pompe à chaleur eau-eau</option>
										<option  @if($quote->chaudiere=='Autre') selected="selected" @endif value="Autre">Autre</option>
									</select>
								</div>
							</div>
							@endif

							@if( $quote->surface!='' )
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="form-group">
									<strong>Surface  @if($quote->menuiserie==-7) isolée @elseif($quote->menuiserie==-9) de la maison @else chauffée @endif (m²):</strong>
									<input type="number" class="form-control"   name="surface" value="{{ $quote->surface }}" style="max-width:180px"/>
								</div>
							</div>
							@endif

						</div>

					<div class="row pl-3 mt-2">
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="form-group">
									<strong>Type de logement:</strong>
									<select class="form-control"   name="logement"  value="{{ $quote->logement}}" style="max-width:300px">
										<option value="Maison individuelle" @if($quote->logement=='Maison individuelle') selected="selected" @endif >Maison individuelle</option>
										<option value="Appartement" @if($quote->logement=='Appartement') selected="selected" @endif >Appartement</option>
									</select>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-4">
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
					<a href="#" class="btn btn-sm btn-primary float-right mb-2 ml-2" data-toggle="modal" data-target="#add-item" title="Ajouter un produit libre"  ><i class="fa fa-plus"></i> Ajouter un produit libre</a>

					<div class="">
						<table class="tab-products table-responsive table-striped  " style="width:100%">
							<thead class="th-products">
								<tr>
									<th style="width:35%">Produit</th><th style="width:8%">Prix U.HT</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total TTC</th><th style="width:10%">+/-</th>
								</tr>
							</thead>
							<tbody id="list-prods" style="min-height:300px list-prods">
								<tr class="product bg-grey new-prod">
									<td>
										<select class="form-control select2"  id='product' onchange="set_price()">
											<option value="0">Sélectionnez le produit</option>
												@foreach($products as $prod)
													<option data-price="{{$prod->prix}}"  data-text="{{$prod->name}}" data-tva="{{$prod->tva}}" data-priceht="{{$prod->prix_ht}}"   data-pose="{{$prod->pose}}" data-tvapose="{{$prod->tva_pose}}"   data-posettc="{{$prod->pose_ttc}}"   value="{{$prod->id}}">{{$prod->id}}- {{$prod->name}}  ({{$prod->prix}}€)</option>
												@endforeach
										</select>
									</td>
									<td><input  class="number bg-transparent"  id="price"  value="0" /> €</td>
									<td><input  id="qty" type="number" step="1" min="1" value="1" class="number" style="width:60px" onchange="set_price()"    /></td><td><input readonly id="tva" type="number"  class="number bg-transparent" value="0" style="width:60px"/> %</td><td><input id="total_prod" type="number"   class="number bg-transparent" value="0" readonly /> €</td><td><button id="add_product" disabled class="btn-sm btn-success add-prod" onclick="add_product();  "><i class="fas fa-plus "></i></td>
								</tr>
								@php $tva_55 = true; @endphp
								@foreach($items as $item)
									@php
										if( floatval($item->tva) != 5.5 ){
											 $tva_55 = false;
										}
										$product=\App\Models\Product::withTrashed()->find($item->product);
										if(isset($product ) ){
											$texte=$product->name;
											$pose=$product->pose_ttc;
											$price=$product->prix;
											$price_ht=$product->prix_ht;
											$total=floatval($product->prix) * intval($item->qty);
										}else{
											$texte=nl2br($item->description);
											if($item->note!='') $texte.='<br>'.$item->note;
											$pose=0;
											$price=$item->price_ttc;
											$price_ht=$item->price_ht;
											$total=$item->price_ttc * $item->qty;											
										}
									@endphp
									<tr class="myproduct product bg-lightgrey tr-prod"   id="row-{{$item->id}}">
										<td class="myproducttd  itemtd" data-prix="{{$price}}" data-prixht="{{$price_ht}}" data-id="{{$item->id}}"  ><b>{!!nl2br($texte)!!}</b></td><td >{{$price_ht}} €</td><td><input id="qty-{{$item->id}}" type="number" step="1" min="1" class="number" value="{{$item->qty}}"  onchange="calcul();save_item_qty(this,'{{$item->id}}','{{$price_ht}}','{{$pose}}');"/></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="{{$item->tva}}"/> %</td><td><input id="total-{{$item->id}}" type="number" readonly class="total-prod number" value="{{($total)}}"/> €</td><td>@if(! isset($product ) ) <button  class="btn-xs mr-2 btn-info" onclick="get_item('{{$item->id}}')"><i class="fas fa-pen " data-id="{{$item->id}}"></i></button>  @endif<button id="delete_item"   class="btn-xs btn-danger"  onclick="delete_item('{{$item->id}}')"><i class="fas fa-trash " data-id="{{$item->id}}"></i></button></td>
									</tr>

										@if(isset($product) && $product->pose > 0)
										<tr class="myproduct product bg-lightgrey tr-prod" id="row-pose-{{$item->id}}">
											<td class="myproductpose"  data-id="{{$item->id}}" data-pose="{{$product->pose}}" data-tvapose="{{$product->tva_pose}}" data-posettc="{{$product->pose_ttc}}" ><i>Pose {{$product->name}}</i></td><td ><input type="number" id="pose-{{$item->id}}" value="{{$product->pose * $item->qty}}"  class="number bg-transparent"/> €</td><td><input type="number"  value="{{$item->qty}}"  id="pose-qty-{{$item->id}}" readonly class="number" /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" readonly value="{{$product->tva_pose}}"/> %</td><td><input id="totalpose-{{$item->id}}" type="number" readonly class="total-prod number" value="{{$product->pose_ttc * $item->qty}}"/> €</td><td></td>
										</tr>
										@endif
								@endforeach
							</tbody>
							<tfoot>
								<tr class="product bg-grey">
									<td>Frais de déplacement</td><td  ><input style="text-align:right" id="deplacement" type="number" class="number bg-transparent" readonly value="{{$quote->deplacement ?? 0}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number bg-transparent" id="tva_deplacement" name="tva_deplacement" style="width:100px" step="0.5" value="{{$quote->tva_deplacement ?? 5.5}}"   onchange="calcul_deplacement();" /> %</td><td><input id="total_deplacement" type="number"  class="number" style="max-width:70px" value="{{$quote->total_deplacement ?? 0}}" onchange="calcul_deplacement();"/> €</td><td></td>
								</tr>
								<tr class="product bg-grey">
									<td>Remise GROUPE HER ENR</td><td  ><input readonly style="text-align:right" id="remise" type="number" class="number bg-transparent" value="{{$quote->remise ?? 0}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number  bg-transparent" id="tva_remise" name="tva_remise" style="width:100px" step="0.5" value="{{$quote->tva_remise ?? 5.5}}" readonly onchange="calcul_remise();" /> %</td><td><input id="total_remise" type="number"  class="number" style="max-width:70px" value="{{$quote->total_remise ?? 0}}" onchange="calcul_remise();"/> €</td><td></td>
								</tr>
							</tfoot>
						</table>
						<div class="row">
							<div class="col-md-6 row pt-3 pl-3 mt-3 ">
								<table style="max-width:360px;height:100px;float:left" class="table-aide" >
									<tr>
										<td><strong>Aide éligible:</strong></td><td colspan="2"><strong>Montant</strong></td>
									</tr>
									<tr>
										<td >
											<div class="form-group">
												Ma Prime Renov
											</div>
										</td>
										<td style="padding-right:0">
											<div class="form-group">
												<input type="number" class="form-control" style="max-width:100px" min="0" value="{{$quote->aide_renov ?? 0}}" id="aide_renov" onchange="$('#aide2').val(parseFloat($(this).val())+parseFloat($('#aide_cee').val()));calcul();"/>
											</div>
										</td>
										<td >€</td>
									</tr>
									<tr>
										<td >
											<div class="form-group">
												Prime CEE
											</div>
										</td>
										<td style="padding-right:0">
											<div class="form-group">
												<input type="number" class="form-control" style="max-width:100px" min="0" value="{{$quote->aide_cee ?? 0}}" id="aide_cee" onchange="$('#aide2').val(parseFloat($(this).val())+parseFloat($('#aide_renov').val()));calcul();"/>
											</div>
										</td>
										<td >€</td>
									</tr>
								</table>
								<table style="max-width:360px;height:100px;float:left;margin-left:60px" class="table-aide" >
									<tr>
										<td colspan="2"><strong>Acompte:</strong></td>
									</tr>
									<tr>
										<div class="form-group"><td><div class="form-group"><input type="number" class="form-control" style="max-width:100px" min="0" value="{{$quote->acompte ?? 0}}" id="acompte" onchange="calcul();$('#acompte2').val($(this).val())"/></div></td><td style="padding:0 10px 0 0">€</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="totals">
									<tr><td colspan="2">Total HT</td><td><input id="total_ht" type="number"  class="number numbers bg-transparent" readonly  value="{{number_format($quote->total_ht,2,'.','') ?? 0}}"/> €</td></tr>
									<tr><td colspan="2">Total TVA</td><td><input id="total_tva" type="number"  class="number numbers bg-transparent"  readonly  value="{{number_format($quote->total_tva,2,'.','') ?? 0}}"/> €</td></tr>
									<tr><td colspan="2">TOTAL TTC</td><td><input id="total_ttc" type="number" readonly  class="number numbers bg-transparent" value="{{number_format($quote->total_ttc,2,'.','') ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Déplacement</td><td><input id="deplacement2" type="number" readonly  class="number numbers bg-transparent" value="{{$quote->total_deplacement ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Remise</td><td><input id="remise2" type="number" readonly  class="number numbers bg-transparent" value="{{$quote->total_remise ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Acompte</td><td><input id="acompte2" type="number" readonly  class="number numbers bg-transparent" value="{{$quote->acompte ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Aide éligible</td><td><input id="aide2" type="number" readonly  class="number numbers bg-transparent" value="{{number_format($quote->aide,2,'.','') ?? 0}}" /> €</td></tr>
									<tr><td colspan="2">Net à payer</td><td><input id="net" type="number" readonly  class="number numbers bg-transparent" value="{{number_format($quote->net,2,'.','') ?? 0}}" /> €</td></tr>
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
									<select  class="form-control"   id="modalite" name="modalite" style="max-width:260px" onchange="check_finances()">
										<option value=""></option>
										<option @if($quote->modalite=='Chèque') selected="selected" @endif value="Chèque">Chèque</option>
										<option @if($quote->modalite=='2 Chèques') selected="selected" @endif value="2 Chèques">2 Chèques</option>
										<option @if($quote->modalite=='3 Chèques') selected="selected" @endif value="3 Chèques">3 Chèques</option>
										<option @if($quote->modalite=='4 Chèques') selected="selected" @endif value="4 Chèques">4 Chèques</option>
										<option  @if($quote->modalite=='Financement DOMOFINANCE') selected="selected" @endif value="Financement DOMOFINANCE">Financement DOMOFINANCE</option>
										<option  @if($quote->modalite=='Financement FRANFINANCE') selected="selected" @endif value="Financement FRANFINANCE">Financement FRANFINANCE</option>
										<option  @if($quote->modalite=='Financement SOFINCO') selected="selected" @endif value="Financement SOFINCO">Financement SOFINCO</option>
										<option  @if($quote->modalite=='Financement PROJEXIO') selected="selected" @endif value="Financement PROJEXIO">Financement PROJEXIO</option>
										<option  @if($quote->modalite=='Chèque & Financement DOMOFINANCE') selected="selected" @endif value="Chèque & Financement DOMOFINANCE">Chèque et Financement DOMOFINANCE</option>
										<option  @if($quote->modalite=='Chèque & Financement FRANFINANCE') selected="selected" @endif value="Chèque & Financement FRANFINANCE">Chèque et Financement FRANFINANCE</option>
										<option  @if($quote->modalite=='Chèque & Financement SOFINCO') selected="selected" @endif value="Chèque & Financement SOFINCO">Chèque et Financement SOFINCO</option>
										<option  @if($quote->modalite=='Chèque & Financement PROJEXIO') selected="selected" @endif value="Chèque & Financement PROJEXIO">Chèque et Financement PROJEXIO</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div id="finances"  @if( str_contains($quote->modalite, 'Chèque')  || $quote->modalite== '') style="display:none" @else style="display:contents"  @endif >
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant financé en € :</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_finance" style="max-width:180px" value="{{$quote->montant_finance}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Report 1ère échéance (en jours) :</strong>
										<input type="number"  class="form-control" min="0"   name="report_echeance" style="max-width:180px" value="{{$quote->report_echeance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Nombre de mensualités :</strong>
										<input type="number"  class="form-control" min="0"  name="mensualites" style="max-width:180px" value="{{$quote->mensualites}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel sans assurance en €:</strong>
										<input type="number"  class="form-control" step="0.01" min="0"  name="montant_mensuel" style="width:180px" value="{{$quote->montant_mensuel}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel de l'assurance en €:</strong>
										<input type="number"  class="form-control" step="0.01" min="0"  name="montant_assurance" style="max-width:180px" value="{{$quote->montant_assurance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% Taux débiteur :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taux_nominal" style="max-width:180px" value="{{$quote->taux_nominal}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% TAEG :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taeg" style="max-width:180px" value="{{$quote->taeg}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Solde de la pose en €:</strong>
										<input type="number"  class="form-control"  step="0.01" min="0" name="pose" style="max-width:180px" value="{{$quote->pose}}">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8">
								<div id="cheques"   >
									<table style="width:80%;;" id='cheques-table'>
										<tr id="chq-1"  @if($quote->modalite!='4 Chèques' && $quote->modalite!='3 Chèques' && $quote->modalite!='2 Chèques' && $quote->modalite!='Chèque' )  style="display:none" @endif >
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 1</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant1" style="max-width:180px" value="{{$quote->montant1}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 1</strong>
													<textarea class="form-control"   min="0" step="0.01" name="note1"   >{{$quote->note1}}</textarea>
												</div>
											</td>
										</tr>
										<tr id="chq-2"  @if($quote->modalite!='4 Chèques' && $quote->modalite!='3 Chèques' && $quote->modalite!='2 Chèques' )  style="display:none" @endif >
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 2</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant2" style="max-width:180px" value="{{$quote->montant2}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 2</strong>
													<textarea class="form-control"   min="0" step="0.01" name="note2"  >{{$quote->note2}}</textarea>
												</div>
											</td>
										</tr>
										<tr id="chq-3"  @if($quote->modalite!='4 Chèques' && $quote->modalite!='3 Chèques' ) style="display:none" @endif>
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 3</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant3" style="max-width:180px" value="{{$quote->montant3}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 3</strong>
													<textarea  class="form-control"   min="0" step="0.01" name="note3"  >{{$quote->note3}}</textarea>
												</div>
											</td>
										</tr>
										<tr id="chq-4" @if($quote->modalite!='4 Chèques') style="display:none" @endif >
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 4</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant4" style="max-width:180px" value="{{$quote->montant4}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 4</strong>
													<textarea   class="form-control"   min="0" step="0.01" name="note4"  >{{$quote->note4}}</textarea>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</div>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-7 mt-5">
								<button type="submit" class="btn btn-primary">Enregistrer</button>
						</div>


					</form>


				</div>

            	<div class="tab-pane fade" id="custom-tabs-three-signature" role="tabpanel" aria-labelledby="custom-tabs-three-signature-tab"   >

					<form method="POST" action="{{ route('signpad.save') }}">
						@csrf
						<input type="hidden" name="quote_id" value="{{$quote->id}}" />
						<div class="row">
							<div class="col-lg-9 col-md-12 col-sm-12">
								<label class="">Fait à:</label><br>
								<div style="width:100%;" >
									<canvas  style="border:1px dotted grey" id="canvas1" width="600"  height="180"  ></canvas><br>
								</div>
								<span id="clear" class="btn btn-sm btn-danger mr-2" onclick="empty(signaturePad);"><i class="fas fa-redo"></i> Vider</span><span id="" class="btn btn-sm btn-warning" onclick="undo(signaturePad);"><i class="fas fa-arrow-left"></i> Retour</span><br>
								<input id="signature1" name="signed" style="display: none"></input>
								@if(\App\Models\Signature::where('quote',$quote->id)->exists())
									@php $lieu=\App\Models\Signature::where('quote',$quote->id)->first()->lieu;
									@endphp
									@if($lieu != '') <img class="mt-2" src="{{$lieu}}" width= '300'     height= ''/>  @endif
								@endif
							</div>
							<div class="col-lg-9 col-md-12 col-sm-12 pt-2">
								<label class="">Le:</label><br>
								<div style="width:100%;">
									<canvas  style="border:1px dotted grey;" id="canvas2" width="600"  height="180"   ></canvas><br>
								</div>
								<span  class="btn btn-sm btn-danger mr-2" onclick="empty(signaturePad2);"><i class="fas fa-redo"></i> Vider</span><span id="" class="btn btn-sm btn-warning" onclick="undo(signaturePad2);"><i class="fas fa-arrow-left"></i> Retour</span><br>
								<input id="signature2" name="signed2" style="display: none"></input>
								@if(\App\Models\Signature::where('quote',$quote->id)->exists())
									@php $date=\App\Models\Signature::where('quote',$quote->id)->first()->date;
									@endphp
									@if($date != '') <img class="mt-2" src="{{$date}}" width= '300'     height= ''/>  @endif
								@endif
							</div>
							<div class="col-lg-9 col-md-6 col-sm-12 pt-2">
								<label class="pt-2">Mention "Bon pour accord" + Signature:</label><br>
								<div style="width:100%;">
									<canvas  style="border:1px dotted grey" id="canvas3" width="650"  height="300"  ></canvas><br>
								</div>
								<span   class="btn btn-sm btn-danger mr-2" onclick="empty(signaturePad3);"><i class="fas fa-redo"></i> Vider</span><span id="" class="btn btn-sm btn-warning" onclick="undo(signaturePad3);"><i class="fas fa-arrow-left"></i> Retour</span><br>
								<input id="signature3" name="signed3" style="display: none"></input>
								@if(\App\Models\Signature::where('quote',$quote->id)->exists())
									@php $signature=\App\Models\Signature::where('quote',$quote->id)->first()->signature;
									@endphp
									@if($signature != '') <img class="mt-2"  src="{{$signature}}" width= '300'     height= ''/>  @endif
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<button class="btn btn-primary float-right mt-2 mb-2">Enregistrer</button>
							</div>
						</div>
					</form>

					<div class="row bg-lightgrey pt-3 pb-3">

						<div class="col-md-6 pl-3">
							<form method="POST" action="{{ route('quotes.ajout_signature') }}"   enctype='multipart/form-data' >
								@csrf
								<input type="hidden" name="quote" value="{{$quote->id}}" />

								<div class="form-group">
									<strong>Importer le devis signé :</strong>
									<input type="file"  class="form-control"   name="devis_signe"    >
								</div>

								<div class="col-xs-12 col-sm-12 col-md-7 mt-5">
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</div>
							</form>
						</div>
						<div  class="col-md-6 pl-3 pt-4">
							@if($quote->devis_signe!='')
								<a download href="<?php echo  URL::asset('/fichiers/'.$quote->devis_signe);?>" >Télécharger le devis signé</a><br>
							@endif
						</div>
					</div>


				</div>

			</div>

		</div>
	</div>


<div class="modal fade" id="add-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Ajouter un produit libre </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >

				<div class="row pl-3">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Desctiption:</strong>
							<textarea  id="description"   name="description"  class="form-control" ></textarea>
						</div>
					</div>


					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>Prix U HT<small style="display:none">€</small>:</strong>
							<input   id="prixht-i" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0" onchange="pricing_item('')"  >
							<input type="hidden" id="prix-i" value="0"  />
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>TVA <small >%</small>:</strong>
							<input   id="tva-i" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="5.5" onchange="pricing_item('')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-i" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing_item('')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-i" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-i"   name="note"  class="form-control" ></textarea>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Unité:</strong>
							<select name="unite" class="form-control" id="unite">
								<option></option>
								<option value="ML">ML</option>
								<option value="m2">㎡</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 text-right"  >
						<button type="button" id="add_item" onclick="add_item()"   class="btn btn-primary mt-3 mr-3">Insérer</button>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>




<div class="modal fade" id="edit-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Modifier le produit libre </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >

				<div class="row pl-3">
					<input type="hidden" value="0" id="product-i"   />
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Desctiption:</strong>
							<textarea  id="description-edit"   name="description"  class="form-control" ></textarea>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>Prix U HT<small style="display:none">€</small>:</strong>
							<input   id="prixht-i-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0" onchange="pricing_item('-edit')"  >
							<input type="hidden" id="prix-i-edit" value="0"  />
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>TVA <small>%</small>:</strong>
							<input   id="tva-i-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="5.5" onchange="pricing_item('-edit')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-i-edit" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing_item('-edit')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-6">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-i-edit" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-i-edit"   name="note"  class="form-control" ></textarea>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7">
						<div class="form-group">
							<strong>Unité:</strong>
							<select name="unite" id="unite-i-edit" class="form-control">
								<option></option>
								<option value="ML">ML</option>
								<option value="m2">m²</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 text-right"  >
						<button type="button" id="add_item-edit" onclick="edit_item()"   class="btn btn-primary mt-3 mr-3">Modifier</button>
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
				console.log( 'prix : '+$(this).data('prixht')* qty);
				total_ht+=parseFloat(( $(this).data('prixht')* qty ));
				total_ttc+=parseFloat(( $(this).data('prix') *  qty));
    	});
			$(this).find('.myproductpose').each(function(){
				id_item=$(this).data().id;
				qty= ($('#qty-'+id_item).val());
				total_ht+=(( $(this).data().pose * qty  ));
				console.log( 'prix pose: '+$(this).data().pose * qty );
				total_ttc+=(( $(this).data().posettc * qty));

    		});
		});


		var tva_remise=parseFloat($('#tva_remise').val()) || 0;
		var total_remise=parseFloat($('#total_remise').val())  || 0;

		var p_tva_deplacement=parseFloat($('#tva_deplacement').val()) || 0;
		var total_deplacement=parseFloat($('#total_deplacement').val()) || 0;

		var remise = total_remise / (1+(tva_remise*0.01));
		$('#remise').val(remise.toFixed(2));
		// deplacement ht
		var deplacement = total_deplacement / (1+(p_tva_deplacement*0.01));
		$('#deplacement').val(deplacement.toFixed(2));

		var deplacement_tva = total_deplacement- deplacement;

		var val_total_ht= total_ht-remise + deplacement;
		$("#total_ht").val(val_total_ht.toFixed(2));
		//total_tva = total_ttc-total_ht - (remise*tva_remise*0.01) + deplacement_tva;
		total_tva = (total_ttc * 0.055) - (remise*tva_remise*0.01) + deplacement_tva;;
		<?php  if (! $tva_55 ){
		?>
			total_tva = total_ttc-total_ht - (remise*tva_remise*0.01) + deplacement_tva;
		<?php	
		}
		?>
		
		$('#total_tva').val(total_tva.toFixed(2));
		total_ttc=total_ttc -total_remise + total_deplacement;
		$('#total_ttc').val(total_ttc.toFixed(2));

/*
		//nouveau calcul ici :

		total_ht = total_ttc / 1.055;
		total_tva = total_ttc-total_ht;
		$("#total_ht").val(total_ht.toFixed(2));
		$("#total_tva").val(total_tva.toFixed(2));

		total_ttc=total_ttc  + total_deplacement;
		$('#total_ttc').val(total_ttc.toFixed(2));
*/

		var aide=parseFloat($('#aide2').val()) || 0;
		var acompte=parseFloat($('#acompte').val()) || 0;

 		var net=parseFloat(total_ttc - aide  - acompte /*- total_remise*/);
		$('#net').val(net.toFixed(2));
		update_totals();
	}

	function check_finances(){
		if($('#modalite').val().includes('Chèque') || $('#modalite').val()=='Chèque' || $('#modalite').val()==''){
			if(! $('#modalite').val().includes('Financement'))
				$('#finances').hide('slow');
			else
				$('#finances').css('display','contents');

			$('#cheques-table').show('slow');
			if($('#modalite').val().includes('Chèque')){
				$('#chq-1').css('display','table-row');
				$('#chq-2').css('display','none');
				$('#chq-3').css('display','none');
				$('#chq-4').css('display','none');
			}
			if($('#modalite').val()=='2 Chèques'){
				$('#chq-1').css('display','table-row');
				$('#chq-2').css('display','table-row');
				$('#chq-3').css('display','none');
				$('#chq-4').css('display','none');
			}
			if($('#modalite').val()=='3 Chèques'){
				$('#chq-1').css('display','table-row');
				$('#chq-2').css('display','table-row');
				$('#chq-3').css('display','table-row');
				$('#chq-4').css('display','none');
			}
			if($('#modalite').val()=='4 Chèques'){
				$('#chq-1').css('display','table-row');
				$('#chq-2').css('display','table-row');
				$('#chq-3').css('display','table-row');
				$('#chq-4').css('display','table-row');
			}

		}else{
			$('#finances').css('display','contents');
			$('#cheques-table').hide('slow');
		}
	}

	function set_price(){
		if($('#product').val() >0){
			var price= parseFloat($('#product option:selected').data("price"));
			var price_ht= parseFloat($('#product option:selected').data("priceht"));
			var tva= parseFloat($('#product option:selected').data("tva"));
			$('#tva').val(tva);
			$('#price').val(price_ht);
			$('#qty').focus();
			$('#add_product').prop('disabled',false);
			var total_prod=parseFloat( price) * parseInt($('#qty').val()) ;

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


  	function add_product(){

  	var _token = $('input[name="_token"]').val();
	var product= parseInt($("#product").val());
	var product_text= $("#product option:selected").data("text");
	var price_ht= parseFloat($("#product option:selected").data("priceht"));
	var price= parseFloat($("#product option:selected").data("price"));
	var pose= parseFloat($("#product option:selected").data("pose"));
	var tvapose= parseFloat($("#product option:selected").data("tvapose"));
	var posettc= parseFloat($("#product option:selected").data("posettc"));
	//var price=	parseFloat($('#total_prod').val());
	var qty=	parseInt($('#qty').val());
	var total= price*qty;
	var totalpose= posettc*qty;
	var tva=	parseFloat($('#tva').val());
	var quote=	parseInt($('#quote').val());

	var tva=	parseFloat($('#tva').val());
	$('#tva_remise').val(tva);

  	$.ajax({
        url: "{{ route('add_item') }}",
        method: "POST",
		async:false,
        data: {product:product,price:price,qty:qty,tva:tva, quote:quote,_token:_token},
        success: function (data) {
			if(data!=''){
			init();
			item_id=data;
			var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-'+item_id+'"><td class="myproducttd"  data-prix="'+price+'" data-prixht="'+price_ht+'" data-id="'+item_id+'"  ><b>'+product_text+'</b></td><td>'+price_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qty+'"  id="qty-'+item_id+'"  onchange="save_item_qty(this,'+item_id+','+price+','+posettc+');calcul();"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tva+'"/> %</td><td><input id="total-'+data+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button   class="btn-xs btn-info mr-2" onclick="get_item('+item_id+')"><i class="fas fa-pen"  ></i></button><button   class="btn-xs btn-danger" onclick="delete_item('+item_id+')"><i class="fas fa-trash"  ></i></button></td></tr>';
					if(pose>0){
						row+='<tr class="myproduct product bg-lightgrey tr-prod" id="row-pose-'+item_id+'"><td class="myproductpose"  data-prix="'+price+'" data-prixht="'+price_ht+'" data-id="'+item_id+'" data-pose="'+pose+'" data-tvapose="'+tvapose+'"   data-posettc="'+posettc+'" ><i>Pose '+product_text+'</i></td><td><input type="number" id="pose-'+data+'" value="'+pose+'"  class="number bg-transparent"/> €</td><td><input type="number"  value="'+qty+'"  id="pose-qty-'+data+'" readonly class="number" /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" readonly value="'+tvapose+'"/> %</td><td><input id="totalpose-'+data+'" type="number" readonly class="total-prod number" value="'+totalpose+'"/> €</td><td></td></tr>';
					}
					$('#list-prods').append(row);
					calcul();
			}else{
				alert('Ce produit existe déja, modifiez la quantité !')
			}

		}
	});
	// attendre une seconde puis calculer
	/*setTimeout(function(){
    	calcul();
	}, 1000);*/


	}

	function init_item(){
		$('#description').val('');
		$('#prix-i').val(0);
		$('#tva-i').val(5.5);
		$('#prixht-i').val(0);
		$('#qte-i').val(1);
		$('#total-i').val(0);
		$('#note-i').val('');
	}

	function add_item(){
		var _token = $('input[name="_token"]').val();
		var prix_ht=	parseFloat($('#prixht-i').val()).toFixed(2);
		var prix=	parseFloat($('#prix-i').val()).toFixed(2);
		var total=	$('#total-i').val();
		var note=	$('#note-i').val();
		var tva=	$('#tva-i').val();
		var qte=	parseInt($('#qte-i').val());
		var quote=	parseInt($('#quote').val());
		var description= $('#description').val();
		var unite= $('#unite').val();
		var texte=  description+'<br>'+note;
		$('#tva_remise').val(tva);
		$.ajax({
			url: "{{ route('add_item_men') }}",
			method: "POST",
			async:false,
			data: { prix:prix,prix_ht:prix_ht,qte:qte,tva,description:description,note:note,unite:unite, quote:quote,_token:_token},
			success: function (data) {
				if(data!=''){
					item_id=data;
					var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-'+item_id+'"><td class="myproducttd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'"  ><b>'+texte+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qty-'+item_id+'"  onchange="calcul();save_item_qty(this,'+item_id+','+prix+','+0+')"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tva+'"/> %</td><td><input id="total-'+data+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button   class="btn-xs btn-info mr-2" onclick="get_item('+item_id+')"><i class="fas fa-pen"  ></i></button><button  class="btn-xs btn-danger" onclick="delete_item('+item_id+')"><i class="fas fa-trash "  ></i></button></td></tr>';
					$('#list-prods').append(row);
					$('#add-item').modal('hide');
					calcul();
					init_item();
				}else{
					alert('Ce produit existe déja, modifiez la quantité !')
				}
			}
		});

	}


	function pricing_item(id){
		var prix_ht= parseFloat($("#prixht-i"+id).val());
		var p_tva= parseFloat($("#tva-i"+id).val());
		var prix= prix_ht+ (prix_ht*p_tva*0.01);
		$("#prix-i"+id).val(prix);
		var qte= parseInt($("#qte-i"+id).val());
		var total = prix * qte;
		$("#total-i"+id).val(total.toFixed(2));
	}

	function delete_item(item){
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
				$('#row-'+item).html('');
				$('#row-pose-'+item).html('');
				calcul();
			}
		});
	}



	function get_item(item){

		var _token = $('input[name="_token"]').val();
		$.ajax({
			url: "{{ route('get_item_men') }}",
			method: "GET",
			async:false,
			data: { item:item, _token:_token},
			success: function (data) {
				if(data!=''){
					console.log(data);
					$("#product-i").val(item);
					$('#prixht-i-edit').val(data.prix_ht);
					$('#prix-i-edit').val(data.prix);
					$('#total-i-edit').val(data.total);
					$('#note-i-edit').val(data.note);
					$('#tva-i-edit').val(data.tva);
					$('#qte-i-edit').val(data.qty);
					$('#unite-i-edit').val(data.unite);
					$('#description-edit').val(data.description);
					pricing_item('-edit');
					$('#edit-item').modal('show');
				}else{
					alert('erreur !')
				}

			}
		});


	}


	function edit_item(){

		var _token = $('input[name="_token"]').val();
		var item = $('#product-i').val();
		pricing_item('-edit');

		var prix_ht=	parseFloat($('#prixht-i-edit').val()).toFixed(2);
		var prix=	parseFloat($('#prix-i-edit').val()).toFixed(2);
		var total=	$('#total-i-edit').val();
		var note=	$('#note-i-edit').val();
		var tva=	$('#tva-i-edit').val();
		var qte=	parseInt($('#qte-i-edit').val());
		var unite=	$('#unite-i-edit').val();
		var description= $('#description-edit').val();
		var texte=  description+'<br>'+note;

		$.ajax({
		url: "{{ route('edit_item_men') }}",
		method: "POST",
		async:false,
		data: {item:item, prix:prix,prix_ht:prix_ht,qte:qte,tva:tva,description:description,note:note,unite:unite, _token:_token},
		success: function (data) {
			if(data!=''){

				item_id=data;//here
				var row='<td class="myproducttd itemtd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'"  ><b>'+texte+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" onchange="save_item_qty(this,'+item_id+','+prix_ht+','+prix+');"  id="qty-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tva+'"/> %</td><td><input id="total-i-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id=""   class="btn-xs btn-info mr-2" onclick="get_item('+item_id+')"><i class="fas fa-pen "  ></i></button><button id=""   class="btn-xs btn-danger" onclick="delete_item('+item_id+')"><i class="fas fa-trash "  ></i></button></td>';

				$('#row-'+item_id).html(row);
				calcul();
				$('#edit-item').modal('hide');

			}else{
				alert('erreur !')
			}

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
	var tva_remise=	$('#tva_remise').val();
	var total_deplacement=	$('#total_deplacement').val();
	var tva_deplacement=	$('#tva_deplacement').val();
	var deplacement=$('#deplacement').val();
	var remise= $('#remise').val();
	var aide=	$('#aide2').val();
	var aide_renov=	$('#aide_renov').val();
	var aide_cee=	$('#aide_cee').val();
	var acompte=	$('#acompte').val();
	var net=	$('#net').val();


	$.ajax({
		url: "{{ route('update_totals') }}",
		method: "POST",
		data: {total_ht:total_ht,total_tva:total_tva,total_ttc:total_ttc,total_remise:total_remise,remise:remise,total_deplacement:total_deplacement,deplacement:deplacement,tva_deplacement:tva_deplacement,quote:quote,aide:aide,aide_renov:aide_renov,aide_cee:aide_cee,net:net,acompte:acompte,tva_remise:tva_remise, _token:_token},
		success: function (data) {
			init();
		}
	});

	}

	function save_item_qty(elm,item,price,pose){
		var _token = $('input[name="_token"]').val();
		var qty=parseInt($(elm).val());
		var total= (qty*price).toFixed(2);
		var totalpose= qty*pose;
		$('#pose-qty-'+item).val(qty);
		$('#totalpose-'+item).val(totalpose);

		$('#total-'+item).val(total+totalpose);

		$.ajax({
		url: "{{ route('save_item_qty') }}",
		method: "POST",
		data: {item:item,qty:qty, _token:_token},
		success: function (data) {

		}
		});
	}


	function calcul_remise(){
		var remise=$('#total_remise').val();
		$('#remise2').val(remise);
		var p_tva_remise= $('#tva_remise').val();
		var remise_ht = (remise / (1+(p_tva_remise*0.01))).toFixed(2);
		$('#remise').val(remise_ht);
		calcul();
	}

	function calcul_deplacement(){
		var deplacement=$('#total_deplacement').val();
		$('#deplacement2').val(deplacement);
		var p_tva_deplacement= $('#tva_deplacement').val();
		var deplacement_ht = (deplacement / (1+(p_tva_deplacement*0.01))).toFixed(2);
		$('#deplacement').val(deplacement_ht);
		calcul();
	}
		// appeler calcul pour sychroniser les calculs
		calcul();
</script>

 <!-- signature -->
<script type="text/javascript" src="{{asset('js/signature_pad.js')}}"></script>

<script type="text/javascript">

	var canvas = document.getElementById("canvas1");
	var signaturePad = new SignaturePad(canvas, {
	backgroundColor: 'rgb(255, 255, 255)',
	//maxWidth : 2
	minWidth: 2,

	});

	var canvas2 = document.getElementById("canvas2");
	var signaturePad2 = new SignaturePad(canvas2, {
	backgroundColor: 'rgb(255, 255, 255)',
	//maxWidth : 2
	minWidth: 2,
	});

	var canvas3 = document.getElementById("canvas3");
	var signaturePad3 = new SignaturePad(canvas3, {
	backgroundColor: 'rgb(255, 255, 255)',

	});

	function resizeCanvas() {
	var ratio =  Math.max(window.devicePixelRatio || 1, 1);
	canvas.width = canvas.offsetWidth * ratio;
	canvas.height = canvas.offsetHeight * ratio;
	canvas.getContext("2d").scale(ratio, ratio);
	signaturePad.clear();

	canvas2.width = canvas2.offsetWidth * ratio;
	canvas2.height = canvas2.offsetHeight * ratio;
	canvas2.getContext("2d").scale(ratio, ratio);
	signaturePad2.clear();

	canvas3.width = canvas3.offsetWidth * ratio;
	canvas3.height = canvas3.offsetHeight * ratio;
	canvas3.getContext("2d").scale(ratio, ratio);
	signaturePad3.clear();
	}




	function empty(signaturePad){
		signaturePad.clear();
	}

	function undo(signaturePad){
		var data = signaturePad.toData();
		if (data) {
		data.pop(); // remove the last dot or line
		signaturePad.fromData(data);
		}
	}

	function save(signaturePad,textarea){
		var dataURL = signaturePad.toDataURL("image/jpeg");
		$('#signature'+textarea).val(dataURL);
	}

	var canvas1 = document.getElementById("canvas1");
	var canvas2 = document.getElementById("canvas2");
	var canvas3 = document.getElementById("canvas3");

	canvas1.addEventListener('click', function () {
		var dataURL = signaturePad.toDataURL("image/jpeg");
		$('#signature1').val(dataURL);
	});
	canvas2.addEventListener('click', function () {
		var dataURL = signaturePad2.toDataURL("image/jpeg");
		$('#signature2').val(dataURL);
	});
	canvas3.addEventListener('click', function () {
		var dataURL = signaturePad3.toDataURL("image/jpeg");
		$('#signature3').val(dataURL);
	});

	canvas1.addEventListener('touchend', function () {
		var dataURL = signaturePad.toDataURL("image/jpeg");
		$('#signature1').val(dataURL);
	});
	canvas2.addEventListener('touchend', function () {
		var dataURL = signaturePad2.toDataURL("image/jpeg");
		$('#signature2').val(dataURL);
	});
	canvas3.addEventListener('touchend', function () {
		var dataURL = signaturePad3.toDataURL("image/jpeg");
		$('#signature3').val(dataURL);
	});
</script>

@endsection

