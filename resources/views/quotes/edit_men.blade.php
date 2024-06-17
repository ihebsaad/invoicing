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
		#signature{cursor:pointer;}
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
                <h2> Devis <small>@if($quote->menuiserie==1) Menuiserie @else Volets roulants @endif</small> {{$quote->id}} -  {{$quote->reference}}  </h2>
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
									<i class="fas fa-phone mr-2"></i>{{$customer->phone ?? ''}} <i class="fas fa-envelope mr-2 ml-4"></i> {{$customer->email}} <br>
									<i class="fas fa-map-marker mr-2"></i> {{$customer->address ?? ''}} - {{$customer->city ?? ''}}
								</div>
							</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="form-group">
										<strong>Adresse du chantier:</strong>
										<input type="text"   name="delivery_address" id="delivery_address" class="form-control" placeholder="Adresse" value="{{$quote->delivery_address ?? $customer->delivery_address ?? ''}}" style="max-width:400px">
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
												@php $country= $quote->delivery_country!='' ? $quote->delivery_country : $customer->delivery_country  ?? ''; @endphp
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

							@if($quote->menuiserie >0)
							<div class="col-xs-12 col-sm-12 col-md-4" id="div-chauffage">
								<div class="form-group">
									<strong>Type de chauffage :</strong>
									<select  class="form-control" required  name="chauffage"  id="chauffage"  style="max-width:180px;" >
										<option  value=""></option>
										<option @if($quote->chauffage=='Electrique') selected="selected" @endif value="Electrique">Electrique</option>
										<option @if($quote->chauffage=='Combustible') selected="selected" @endif value="Combustible">Combustible</option>
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
										<option value="Maison individuel" @if($quote->logement=='Maison individuel') selected="selected" @endif >Maison individuel</option>
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

					<div class="">
						@if($quote->menuiserie==1)
							<a href="#" class="btn btn-sm btn-success float-right mb-2 ml-2" data-toggle="modal" data-target="#add-door" title="Ajouter une porte"  ><i class="fa fa-plus"></i> Ajouter une porte</a>
							<a href="#" class="btn btn-sm btn-success float-right mb-2 ml-2" data-toggle="modal" data-target="#add-prod" title="Ajouter une fenêtre"  ><i class="fa fa-plus"></i> Ajouter une fenêtre</a>
						@else
							<a href="#" class="btn btn-sm btn-success float-right mb-2 ml-2" data-toggle="modal" data-target="#add-volet" title="Ajouter une un volet roulant"  ><i class="fa fa-plus"></i> Ajouter un volet roulant</a>
						@endif
						<a href="#" class="btn btn-sm btn-primary float-right mb-2 ml-2" data-toggle="modal" data-target="#add-item" title="Ajouter un produit libre"  ><i class="fa fa-plus"></i> Ajouter un produit</a>

						<table class="tab-products table-responsive table-striped  " style="width:100%">
							<thead class="th-products">
								<tr>
									<th style="width:35%">Produit</th><th style="width:8%">Prix U</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total</th><th style="width:10%">Action</th>
								</tr>
							</thead>
							<tbody id="list-prods" style="min-height:300px list-prods">

								@php $c=0;  @endphp
								@foreach($articles as $article)
									@php
										$total_prod= $article->total_ttc;
										$c++;
									@endphp
										<tr class="myproduct product bg-lightgrey tr-prod" id="row-{{$article->id}}">
											<td class="myproducttd" data-prix="{{$article->price}}" data-prixht="{{$article->price_ht}}" data-id="{{$article->id}}" data-surface="{{$article->surface}}"   ><b>{{$article->text}}<br>{{$article->note}}</b></td><td >{{$article->price_ht}} €</td><td><input id="qty-{{$article->id}}" type="number" step="1" min="1" class="number" value="{{$article->qty}}" readonly  onchange="save_article_qty(this,'{{$article->id}}','{{$article->price}}');"  data-qty="{{$article->qty}}"  /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="total-{{$article->id}}" type="number" readonly class="total-prod number" value="{{$total_prod}}"/> €</td><td><button    class="btn-xs btn-info mr-2" onclick="get_article('{{$article->id}}')"><i class="fas fa-pen " data-id="{{$article->id}}"></i></button><button id="delete_item"   class="btn-xs btn-danger" onclick="delete_article('{{$article->id}}')"><i class="fas fa-trash " data-id="{{$article->id}}"></i></button></td>
										</tr>
										<tr class="myproduct product bg-lightgrey tr-prod" id="rowp-{{$article->id}}">
											<td class="myproducttdpose" data-pose="{{$article->pose}}" data-pose_ttc="{{$article->pose_ttc}}" data-id="{{$article->id}}"   ><i>FORFAIT POSE MENUISERIE</i></td><td >{!! \App\Models\Setting::where('Model','Pose')->where('model_id','1')->first()->value !!} €</td><td><input id="qtyp-{{$article->id}}" type="number" step="1" min="1" class="number" value="{{$article->qty}}"  readonly /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="totalp-{{$article->id}}" type="number" readonly class="total-prod number" value="{{$article->pose_ttc}}"/> €</td><td></td>
										</tr>
								@endforeach

								@foreach($portes as $porte)
									@php
										$door=\App\Models\Door::find($porte->door);
										$c++;
									@endphp
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-d-{{$porte->id}}">
										<td class="doortd" data-prix="{{$porte->price}}" data-prixht="{{$porte->price_ht}}" data-id="{{$porte->id}}"  ><b>{!!nl2br($porte->text)!!}<br>{{$porte->note}}</b></td><td >{{$porte->price_ht}} €</td><td><input id="qty-d-{{$porte->id}}" type="number" step="1" min="1" class="number" value="{{$porte->qty}}"  onchange="save_door_qty(this,'{{$porte->id}}','{{$porte->price}}');"/></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="total-d-{{$porte->id}}" type="number" readonly class="total-prod number" value="{{$porte->total_ttc}}"/> €</td><td><button    class="btn-xs btn-info mr-2" onclick="get_door('{{$porte->id}}')"><i class="fas fa-pen " data-id="{{$porte->id}}"></i></button><button    class="btn-xs btn-danger" onclick="delete_door('{{$porte->id}}')"><i class="fas fa-trash " data-id="{{$porte->id}}"></i></button></td>
									</tr>
									<tr class="myproduct product bg-lightgrey tr-prod" id="rowp-d-{{$porte->id}}">
										<td class="doorposetd" data-pose="{{$porte->pose}}" data-pose_ttc="{{$porte->pose_ttc}}" data-id="{{$porte->id}}"   ><i>FORFAIT POSE MENUISERIE</i></td><td >{!! \App\Models\Setting::where('Model','Pose')->where('model_id','1')->first()->value !!} €</td><td><input id="qtyp-d-{{$porte->id}}" type="number" step="1" min="1" class="number" value="{{$porte->qty}}"  readonly /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="totalp-d-{{$porte->id}}" type="number" readonly class="total-prod number" value="{{$porte->pose_ttc}}"/> €</td><td></td>
									</tr>
								@endforeach

								@foreach($volets as $volet)
									@php
										$door=\App\Models\Shutter::find($volet->shutter);
										$c++;
									@endphp
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-v-{{$volet->id}}">
										<td class="volettd" data-prix="{{$volet->price}}" data-prixht="{{$volet->price_ht}}" data-id="{{$volet->id}}" data-surface="{{$volet->surface}}" ><b>{{$volet->text}}<br>{{$volet->note}}</b></td><td >{{$volet->price_ht}} €</td><td><input id="qty-v-{{$volet->id}}" type="number" step="1" min="1" class="number" value="{{$volet->qty}}" readonly  onchange="save_volet_qty(this,'{{$volet->id}}','{{$volet->price}}');" data-qty="{{$volet->qty}}"  /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="total-v-{{$volet->id}}" type="number" readonly class="total-prod number" value="{{$volet->total_ttc}}"/> €</td><td><button    class="btn-xs btn-info mr-2" onclick="get_volet('{{$volet->id}}')"><i class="fas fa-pen " data-id="{{$volet->id}}"></i></button><button    class="btn-xs btn-danger" onclick="delete_volet('{{$volet->id}}')"><i class="fas fa-trash " data-id="{{$volet->id}}"></i></button></td>
									</tr>
									<tr class="myproduct product bg-lightgrey tr-prod" id="rowp-v-{{$volet->id}}">
										<td class="voletposetd" data-pose="{{$volet->pose}}" data-pose_ttc="{{$volet->pose_ttc}}" data-id="{{$volet->id}}"   ><i>FORFAIT POSE MENUISERIE</i></td><td >{!! \App\Models\Setting::where('Model','Pose')->where('model_id','1')->first()->value !!} €</td><td><input id="qtyp-v-{{$volet->id}}" type="number" step="1" min="1" class="number" value="{{$volet->qty}}"  readonly /></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="totalp-v-{{$volet->id}}" type="number" readonly class="total-prod number" value="{{$volet->pose_ttc}}"/> €</td><td></td>
									</tr>
								@endforeach

								@foreach($items as $item)
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-i-{{$item->id}}">
										<td  id="item-{{$item->id}}" class="itemtd" data-prix="{{$item->price_ttc}}" data-prixht="{{$item->price_ht}}" data-id="{{$item->id}}"  ><b>{!! nl2br($item->description)!!}<br>{{$item->note}}</b></td><td >{{$item->price_ht}} €</td><td><input id="qty-i-{{$item->id}}" type="number" step="1" min="1" class="number" value="{{$item->qty}}"  onchange="save_item_qty(this,'{{$item->id}}','{{$item->price_ht}}','{{$item->price_ttc}}');"/></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="{{$item->tva}}"/> %</td><td><input id="total-i-{{$item->id}}" type="number" readonly class="total-prod number" value="{{ ($item->price_ttc * $item->qty) }}"/> €</td><td><button    class="btn-xs btn-info mr-2" onclick="get_item('{{$item->id}}')"><i class="fas fa-pen " data-id="{{$item->id}}"></i></button><button id="delete_item"   class="btn-xs btn-danger" onclick="delete_item('{{$item->id}}')"><i class="fas fa-trash " data-id="{{$item->id}}"></i></td>
									</tr>
								@endforeach
							</tbody>
							<tfoot>
								@if($quote->menuiserie==1)
									<tr class="product bg-grey">
										<td>Loi Anti Gaspillage</td><td  ><input style="text-align:right" id="loi" type="number" class="number bg-transparent" readonly value="{{$quote->loi ?? 94.79}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number  bg-transparent" id="tva_loi" name="tva_loi" style="width:100px" step="0.5" value="{{$quote->tva_loi ?? 5.5}}" readonly onchange="calcul();" /> %</td><td><input id="total_loi" type="number"  class="number" style="max-width:70px" value="{{$quote->total_loi ?? 100}}" onchange="calcul();"/> €</td><td></td>
									</tr>
								@else
									<input type="hidden" id="total_loi" value="0" /><input type="hidden" id="tva_loi" value="0" />
								@endif
								<tr class="product bg-grey">
									<td>Frais de déplacement</td><td  ><input style="text-align:right" id="deplacement" type="number" class="number bg-transparent" readonly value="{{$quote->deplacement ?? 5.5}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number bg-transparent" id="tva_deplacement" name="tva_deplacement" style="width:100px" step="0.5" value="{{$quote->tva_deplacement ?? 5.5}}"   onchange="calcul_deplacement();" /> %</td><td><input id="total_deplacement" type="number"  class="number" style="max-width:70px" value="{{$quote->total_deplacement ?? 0}}" onchange="calcul_deplacement();"/> €</td><td></td>
								</tr>
								<tr class="product bg-grey">
									<td>Remise GROUPE HER ENR</td><td  ><input style="text-align:right" id="remise" type="number" class="number bg-transparent" readonly value="{{$quote->remise ?? 0}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number bg-transparent" id="tva_remise" name="tva_remise" style="width:100px" step="0.5" value="{{$quote->tva_remise ?? 5.5}}"   onchange="calcul_remise();" /> %</td><td><input id="total_remise" type="number"  class="number" style="max-width:70px" value="{{$quote->total_remise ?? 0}}" onchange="calcul_remise();"/> €</td><td></td>
								</tr>
							</tfoot>
						</table>
						<div class="row">
							<div class="col-md-8 row pt-3 pl-3 mt-3 ">
								<table style="max-width:360px;height:100px;float:left;margin-left:15px;" class="table-aide" >
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
								<table style="max-width:360px;height:100px;float:left;margin-left:20px" class="table-aide" >
									<tr>
										<td colspan="2"><strong>Acompte:</strong></td>
									</tr>
									<tr>
										<div class="form-group"><td><div class="form-group"><input type="number" class="form-control" style="max-width:100px" min="0" value="{{$quote->acompte ?? 0}}" id="acompte" onchange="calcul();"/></div></td><td style="padding:0 10px 0 0">€</td>
									</tr>
								</table>
								<table style="max-width:360px;height:100px;float:left;margin-left:20px;background-color:#e3e8ea" class="table-aide" >
									<tr>
										<td colspan="2"><strong>Mètre linéaire:</strong></td>
									</tr>
									<tr>
										<div class="form-group"><td><div class="form-group"><input type="number" class="form-control" style="max-width:100px" min="0" value="{{$quote->surface_produits ?? 0}}" id="surface"  /></div></td><td style="padding:0 10px 0 0">m²</td>
									</tr>
								</table>
							</div>
							<div class="col-md-4">
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
							<div id="finances"  @if(str_contains($quote->modalite, 'Chèque')  || $quote->modalite== '') style="display:none" @else style="display:contents"  @endif >
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
										<input type="number"  class="form-control" step="0.01"  min="0" name="pose" style="max-width:180px" value="{{$quote->pose}}">
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
									<canvas  style="border:1px dotted grey" id="canvas3" width="650"  height="350"  ></canvas><br>
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



<!-- ajouter fenetre -->
<div class="modal fade" id="add-prod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Ajouter une fenêtre </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >

				<div class="row pl-3">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Matière:</strong>
							<input type="hidden" id="article" value="0"/>
							<select  name="genre" required class="form-control" id="genre"   onchange="pricing(0,'')">
								<option></option>
								<option    value="1">PVC</option>
								<option    value="2">Aluminium</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Type:</strong>
							<select  name="type" required class="form-control" id="type"  onchange="pricing(0,'')">
								<option></option>
								<option  @if( old("type")==1)  selected="selected" @endif value="1">Fenêtre à souflet</option>
								<option  @if( old("type")==2)  selected="selected" @endif  value="2">Fenêtre 1 vantail</option>
								<option  @if( old("type")==3)  selected="selected" @endif  value="3">Fenêtre 2 vantaux </option>
								<option  @if( old("type")==4)  selected="selected" @endif  value="4">Fenêtre 3 vantaux</option>
								<option  @if( old("type")==11)  selected="selected" @endif  value="11">Fenêtre 4 vantaux</option>
								<option  @if( old("type")==5)  selected="selected" @endif  value="5">Fenêtre fixe</option>
								<option  @if( old("type")==6)  selected="selected" @endif  value="6">Porte Fenêtre 1 vantail</option>
								<option  @if( old("type")==7)  selected="selected" @endif  value="7">Porte Fenêtre 2 vantaux</option>
								<option  @if( old("type")==8)  selected="selected" @endif  value="8">Coulissant 1 </option>
								<option  @if( old("type")==9)  selected="selected" @endif  value="9">Coulissant 2 </option>
								<option  @if( old("type")==10)  selected="selected" @endif  value="10">Coulissant 3 </option>
								<option  @if( old("type")==12)  selected="selected" @endif  value="12">Porte Fenêtre serrure 1 vantail </option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8  col-md-8">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select   name="couleur" required class="form-control" id="couleur"   onchange="pricing(0,'')">
								<option></option>
								<option @if( old("couleur")==1)  selected="selected" @endif value="1">Extérieur et intérieur blanc</option>
								<option @if( old("couleur")==2)  selected="selected" @endif  value="2">Extérieur couleur et intérieur blanc</option>
								<option @if( old("couleur")==3)  selected="selected" @endif  value="3">Extérieur et intérieur couleur</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4  col-md-4">
						<div class="form-group">
							<strong>Groupe:</strong>
							<select   name="groupe_couleur" required class="form-control" id="groupe_couleur"   onchange="pricing(0,'')">
								<option value="0"></option>
								<option  value="1">1</option>
								<option  value="2">2</option>
								<option  value="3">3</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Hauteur:</strong>
							<input id="hauteur" type="number" name="hauteur" rerquired class="form-control" step ="100" min="200" max="3200"  value="{{old('hauteur')}}" onchange="pricing(0,'')" style="max-width:150px">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Largeur:</strong>
							<input id="largeur" type="number" name="largeur" rerquired class="form-control" step ="100" min="200" max="2200"  value="{{old('largeur')}}" onchange="pricing(0,'')" style="max-width:150px">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong> </strong>
							<label class="pointer"><input type="checkbox"   name="cintrage" id="cintrage" value="1"  onchange="pricing(0,'')"/> Cintrage </label>
							<label class="pointer mt-2"><input type="checkbox"   name="catalogue" id="catalogue" value="1"  onchange="pricing(0,'')"/> Hors catalogue </label>
						</div>
					</div>

					<div class="col-md-12">
						<div class="text-danger pl-5">

						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U <small style="display:none">€</small>:</strong>
							<input readonly id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}" onchange="pricing(0,'')" >
							<input type="hidden" id="modele" value="0"  />
							<input type="hidden" id="pose" value="{!! \App\Models\Setting::where('Model','Pose')->where('model_id','1')->first()->value !!}"  />
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing(0,'')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note"   name="note"  class="form-control" ></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing(0,'')">
						<button type="button" id="insert" onclick="add_article()" disabled class="btn btn-primary mt-3 mr-3">Insérer</button>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>

<!-- modifier fenetre -->
<div class="modal fade" id="edit-prod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Modifier la fenêtre </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >

				<div class="row pl-3">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Matière:</strong>
							<input type="hidden" id="article-edit" value="0"/>
							<select  name="genre" required class="form-control" id="genre-edit"   onchange="pricing(0,'-edit')">
								<option></option>
								<option    value="1">PVC</option>
								<option    value="2">Aluminium</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Type:</strong>
							<select  name="type" required class="form-control" id="type-edit"  onchange="pricing(0,'-edit')">
								<option></option>
								<option  @if( old("type")==1)  selected="selected" @endif value="1">Fenêtre à souflet</option>
								<option  @if( old("type")==2)  selected="selected" @endif  value="2">Fenêtre 1 vantail</option>
								<option  @if( old("type")==3)  selected="selected" @endif  value="3">Fenêtre 2 vantaux </option>
								<option  @if( old("type")==4)  selected="selected" @endif  value="4">Fenêtre 3 vantaux</option>
								<option  @if( old("type")==11)  selected="selected" @endif  value="11">Fenêtre 4 vantaux</option>
								<option  @if( old("type")==5)  selected="selected" @endif  value="5">Fenêtre fixe</option>
								<option  @if( old("type")==6)  selected="selected" @endif  value="6">Porte Fenêtre 1 vantail</option>
								<option  @if( old("type")==7)  selected="selected" @endif  value="7">Porte Fenêtre 2 vantaux</option>
								<option  @if( old("type")==8)  selected="selected" @endif  value="8">Coulissant 1 </option>
								<option  @if( old("type")==9)  selected="selected" @endif  value="9">Coulissant 2 </option>
								<option  @if( old("type")==10)  selected="selected" @endif  value="10">Coulissant 3 </option>
								<option  @if( old("type")==12)  selected="selected" @endif  value="12">Porte Fenêtre serrure 1 vantail </option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8  col-md-8">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select   name="couleur" required class="form-control" id="couleur-edit"   onchange="pricing(0,'-edit')">
								<option  @if( old("couleur")==1)  selected="selected" @endif value="0"></option>
								<option @if( old("couleur")==1)  selected="selected" @endif value="1">Extérieur et intérieur blanc</option>
								<option @if( old("couleur")==2)  selected="selected" @endif  value="2">Extérieur couleur et intérieur blanc</option>
								<option @if( old("couleur")==3)  selected="selected" @endif  value="3">Extérieur et intérieur couleur</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4  col-md-4">
						<div class="form-group">
							<strong>Groupe:</strong>
							<select   name="groupe_couleur" required class="form-control" id="groupe_couleur-edit"   onchange="pricing(0,'-edit')">
								<option value="0"></option>
								<option  value="1">1</option>
								<option  value="2">2</option>
								<option  value="3">3</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Hauteur:</strong>
							<input id="hauteur-edit" type="number" name="hauteur" rerquired class="form-control" step ="100" min="200" max="3200"  value="{{old('hauteur')}}" onchange="pricing(0,'-edit')" style="max-width:150px">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Largeur:</strong>
							<input id="largeur-edit" type="number" name="largeur" rerquired class="form-control" step ="100" min="200" max="2200"  value="{{old('largeur')}}" onchange="pricing(0,'-edit')" style="max-width:150px">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong> </strong>
							<label class=pointer><input type="checkbox"   name="cintrage" id="cintrage-edit" value="1"  onchange="pricing(0,'-edit')"/> Cintrage </label>
							<label class="pointer mt-2"><input type="checkbox"   name="catalogue" id="catalogue-edit" value="1"  onchange="pricing(0,'-edit')"/> Hors catalogue </label>
						</div>
					</div>

					<div class="col-md-12">
						<div class="text-danger-edit pl-5" style="color:red">

						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U <small style="display:none">€</small>:</strong>
							<input readonly id="prix-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}"  >
							<input type="hidden" id="modele-edit" value="0"  />
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-edit" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing(0,'-edit')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-edit" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-edit"   name="note"  class="form-control" ></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing(0,'-edit')">
						<button type="button" id="insert-edit" onclick="edit_article()" disabled class="btn btn-primary mt-3 mr-3">Modifier</button>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>

<div class="modal fade" id="add-door">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Ajouter une porte </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >
				<div class="row pl-3">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<strong>Matière:</strong>
						<select  name="genre" class="form-control" id="matiere" >
							<option value=""></option>
							<option value="pvc">PVC</option>
							<option value="alu">Aluminuim</option>
						</select>
					</div>
				</div>
				<div class="row pl-3">
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<strong>Modèle:</strong>
							<select  name="door" required class="form-control select2" id="door"   onchange="pricing_door('')">
								<option></option>
								@foreach($doors as $door)
									<option class="door-option" value="{{$door->id}}">{{$door->texte}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6  col-md-6">
						<div class="form-group">
							<strong>Style:</strong>
							<select   name="groupe" required class="form-control" id="groupe-d"   onchange="pricing_door('')">
								<option value="0"></option>
								<option  value="1">Extérieur couleur et intérieur blanc</option>
								<option  value="2">Extérieur et intérieur couleur</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select  name="couleur" required class="form-control select2" id="couleur-d"   >
								<option></option>
								<option value="CHENE SHEFFIELD">CHENE SHEFFIELD</option>
								<option value="CHENE NATUREL WOODEC TURNER">CHENE NATUREL WOODEC TURNER</option>
								<option value="WINCHESTER">WINCHESTER</option>
								<option value="CHENE MAT">CHENE MAT</option>
								<option value="CHENE DORE">CHENE DORE</option>
								<option value="CHENE NATUREL WOODEC FONCE">CHENE NATUREL WOODEC FONCE</option>
								<option value="NOIR GRANITE">NOIR GRANITE</option>
								<option value="GRIS ANTHRACITE VEINE">GRIS ANTHRACITE VEINE</option>
								<option value="GRIS ANTHRACITE LISSE III">GRIS ANTHRACITE LISSE III</option>
								<option value="GRIS GRAPHITE">GRIS GRAPHITE</option>
								<option value="CHENE RUSTIQUE">CHENE RUSTIQUE</option>
								<option value="NOYER RUSTIQUE">NOYER RUSTIQUE</option>
								<option value="NOYER">NOYER</option>
								<option value="ACAJOU">ACAJOU</option>
								<option value="CHENE KITAMI MAT">CHENE KITAMI MAT</option>
								<option value="ALU TITANE BRUT">ALU TITANE BRUT</option>
								<option value="GRIS ANTHRACITE CERUSE">GRIS ANTHRACITE CERUSE</option>
								<option value="BRONZE MAT">BRONZE MAT</option>
								<option value="GRIS OMBRE MAT">GRIS OMBRE MAT</option>
								<option value="GRIS QUARTZ MAT">GRIS QUARTZ MAT</option>
								<option value="GRIS BASALTE MAT">GRIS BASALTE MAT</option>
								<option value="GRIS ARGENT">GRIS ARGENT</option>
								<option value="GRIS MAT">GRIS MAT</option>
								<option value="BEIGE II">BEIGE II</option>
								<option value="BLANC BRILLANT">BLANC BRILLANT</option>
								<option value="BLANC MAT">BLANC MAT</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong> </strong>
							<label class=pointer><input type="checkbox"   name="cintrage" id="cintrage-d" value="1"  onchange="pricing_door('')"/> Cintrage </label>
						</div>
					</div>

					<div class="col-md-12">
						<div class="text-door pl-5" style="color:red">

						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U <small style="display:none">€</small>:</strong>
							<input readonly id="prix-d" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"    >
							<input type="hidden" id="prixht-d" value="0"  />
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>TVA <small>%</small>:</strong>
							<input readonly id="tva-d" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="5.5"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-d" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing_door('')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-d" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-d"   name="note"  class="form-control" ></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing_door('')">
						<button type="button" id="insert2" onclick="add_door()"   class="btn btn-primary mt-3 mr-3">Insérer</button>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>

<!-- modifier porte (door)-->
<div class="modal fade" id="edit-door">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Modifier une porte </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >
				<input type="hidden" value="0" id="porte">
				<div class="row pl-3">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<strong>Matière:</strong>
						<select  name="genre" class="form-control" id="matiere-edit" >
							<option value=""></option>
							<option value="pvc">PVC</option>
							<option value="alu">Aluminuim</option>
						</select>
					</div>
				</div>
				<div class="row pl-3">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<strong>Modèle:</strong>
							<select  name="door" required class="form-control select2" id="door-edit"   onchange="pricing_door('-edit')">
								<option></option>
								@foreach($doors as $door)
									<option value="{{$door->id}}">{{$door->texte}}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6  col-md-6">
						<div class="form-group">
							<strong>Style:</strong>
							<select   name="groupe" required class="form-control" id="groupe-d-edit"   onchange="pricing_door('-edit')">
								<option value="0"></option>
								<option  value="1">Extérieur couleur et intérieur blanc</option>
								<option  value="2">Extérieur et intérieur couleur</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select  name="couleur" required class="form-control select2" id="couleur-d-edit"   >
								<option></option>
								<option value="CHENE SHEFFIELD">CHENE SHEFFIELD</option>
								<option value="CHENE NATUREL WOODEC TURNER">CHENE NATUREL WOODEC TURNER</option>
								<option value="WINCHESTER">WINCHESTER</option>
								<option value="CHENE MAT">CHENE MAT</option>
								<option value="CHENE DORE">CHENE DORE</option>
								<option value="CHENE NATUREL WOODEC FONCE">CHENE NATUREL WOODEC FONCE</option>
								<option value="NOIR GRANITE">NOIR GRANITE</option>
								<option value="GRIS ANTHRACITE VEINE">GRIS ANTHRACITE VEINE</option>
								<option value="GRIS ANTHRACITE LISSE III">GRIS ANTHRACITE LISSE III</option>
								<option value="GRIS GRAPHITE">GRIS GRAPHITE</option>
								<option value="CHENE RUSTIQUE">CHENE RUSTIQUE</option>
								<option value="NOYER RUSTIQUE">NOYER RUSTIQUE</option>
								<option value="NOYER">NOYER</option>
								<option value="ACAJOU">ACAJOU</option>
								<option value="CHENE KITAMI MAT">CHENE KITAMI MAT</option>
								<option value="ALU TITANE BRUT">ALU TITANE BRUT</option>
								<option value="GRIS ANTHRACITE CERUSE">GRIS ANTHRACITE CERUSE</option>
								<option value="BRONZE MAT">BRONZE MAT</option>
								<option value="GRIS OMBRE MAT">GRIS OMBRE MAT</option>
								<option value="GRIS QUARTZ MAT">GRIS QUARTZ MAT</option>
								<option value="GRIS BASALTE MAT">GRIS BASALTE MAT</option>
								<option value="GRIS ARGENT">GRIS ARGENT</option>
								<option value="GRIS MAT">GRIS MAT</option>
								<option value="BEIGE II">BEIGE II</option>
								<option value="BLANC BRILLANT">BLANC BRILLANT</option>
								<option value="BLANC MAT">BLANC MAT</option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong> </strong>
							<label class=pointer><input type="checkbox"   name="cintrage" id="cintrage-d-edit" value="1"  onchange="pricing_door('-edit')"/> Cintrage </label>						</div>
					</div>

					<div class="col-md-12">
						<div class="text-door-edit pl-5" style="color:red">

						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U <small style="display:none">€</small>:</strong>
							<input readonly id="prix-d-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"    >
							<input type="hidden" id="prixht-d-edit" value="0"  />
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>TVA <small>%</small>:</strong>
							<input readonly id="tva-d-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="5.5"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-d-edit" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing_door('-edit')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-d-edit" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-d-edit"   name="note"  class="form-control" ></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing_door('-edit')">
						<button type="button" id="insert2-edit" onclick="edit_door()"   class="btn btn-primary mt-3 mr-3">Modifier</button>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>


<div class="modal fade" id="add-volet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Ajouter un volet roulant </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >

				<div class="row pl-3">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<strong>Type:</strong>
							<select  name="type" required class="form-control" id="type-v"  onchange="if(parseInt($('#largeur-v').val())>0){pricing_volet(0,'');}">
								<option></option>
								<option  @if( old("type")==1)  selected="selected" @endif value="1">Multicom</option>
								<option  @if( old("type")==2)  selected="selected" @endif  value="2">Futurcom simple</option>
								<option  @if( old("type")==3)  selected="selected" @endif  value="3">Futurcom avec moustiquaire </option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6  col-md-6">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select   name="couleur" required class="form-control select2" id="couleur-v"    >
								<option></option>
								<option value="BLANC 99">BLANC 99</option>
								<option value="TON PIERRE">TON PIERRE</option>
								<option value="IVOIRE">IVOIRE</option>
								<option value="GRIS 7035">GRIS 7035</option>
								<option value="GRIS 7038">GRIS 7038</option>
								<option value="GRIS 7039">GRIS 7039</option>
								<option value="GRIS 7040">GRIS 7040</option>
								<option value="GRIS ALU">GRIS ALU</option>
								<option value="GRIS 7004 SATINÉ">GRIS 7004 SATINÉ</option>
								<option value="GRIS 9007">GRIS 9007</option>
								<option value="GRIS 7012">GRIS 7012</option>
								<option value="GRIS 7016">GRIS 7016</option>
								<option value="GRIS 7021">GRIS 7021</option>
								<option value="GRIS 7022">GRIS 7022</option>
								<option value="GRIS DB 703">GRIS DB 703</option>
								<option value="NOIR 9005">NOIR 9005</option>
								<option value="MARRON 8011">MARRON 8011</option>
								<option value="MARRON 8014">MARRON 8014</option>
								<option value="MARRON 8019">MARRON 8019</option>
								<option value="BRONZE B 390 S">BRONZE B 390 S</option>
								<option value="GOLDEN OAK">GOLDEN OAK</option>
								<option value="FAUX BOIS FONCÉ">FAUX BOIS FONCÉ</option>
								<option value="FAUX BOIS CLAIR">FAUX BOIS CLAIR</option>
								<option value="IRISH OAK">IRISH OAK</option>
								<option value="WINCHESTER">WINCHESTER</option>
								<option value="GRIS SABLÉ 2800">GRIS SABLÉ 2800</option>
								<option value="NOIR SABLÉ 2100">NOIR SABLÉ 2100</option>
								<option value="NOIR SABLÉ 100">NOIR SABLÉ 100</option>
								<option value="GRIS SABLÉ 2400">GRIS SABLÉ 2400</option>
								<option value="GRIS SABLÉ 2900">GRIS SABLÉ 2900</option>
								<option value="GRIS SABLÉ 900">GRIS SABLÉ 900</option>
								<option value="VERT 6005">VERT 6005</option>
								<option value="VERT 6021">VERT 6021</option>
								<option value="ROUGE 3004">ROUGE 3004</option>
								<option value="BLEU 5023">BLEU 5023</option>
								<option value="BLEU 5024">BLEU 5024</option>
								<option value="BLEU 5003">BLEU 5003</option>
								<option value="BLEU CANON">BLEU CANON</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Hauteur:</strong>
							<input id="hauteur-v" type="number" name="hauteur" rerquired class="form-control" step ="100" min="200" max="3200"  value="{{old('hauteur')}}" onchange="if(parseInt($('#largeur-v').val())>0){pricing_volet(0,'');}" style="max-width:150px">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Largeur:</strong>
							<input id="largeur-v" type="number" name="largeur" rerquired class="form-control" step ="100" min="200" max="2200"  value="{{old('largeur')}}" onchange="pricing_volet(0,'')" style="max-width:150px">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<label class="pointer mt-4"><input type="checkbox"   name="catalogue" id="catalogue-v" value="1"  onchange="pricing_volet(0,'')"/> Hors catalogue </label>
						</div>
					</div>

					<div class="col-md-12">
						<div class="text-volet pl-5" style="color:red">
						</div>
					</div>

				</div>



				<div class="row pl-3">

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U TTC<small style="display:none">€</small>:</strong>
							<input readonly id="prix-v" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}" onchange="pricing_volet(0,'')"  >
							<input type="hidden" id="shutter" value="0"  />
							<input type="hidden" id="prixht-v" value="0"  />

						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-v" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing_volet(0,'')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>TVA <small>%</small>:</strong>
							<input readonly id="tva-v" type="number" name="tva" rerquired class="form-control" step ="0.01" min="0"  value="5.5"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-v" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-v"   name="note"  class="form-control" ></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing_volet(1,'')">
						<button type="button" id="insert-volet" onclick="add_volet()" disabled class="btn btn-primary mt-3 mr-3">Insérer</button>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>


<div class="modal fade" id="edit-volet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Modifier le volet roulant </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >
				<input type="hidden" value="0" id="volet">
				<div class="row pl-3">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<strong>Type:</strong>
							<select  name="type" required class="form-control" id="type-v-edit"  onchange="pricing_volet(0,'-edit')">
								<option></option>
								<option  @if( old("type")==1)  selected="selected" @endif value="1">Multicom</option>
								<option  @if( old("type")==2)  selected="selected" @endif  value="2">Futurcom simple</option>
								<option  @if( old("type")==3)  selected="selected" @endif  value="3">Futurcom avec moustiquaire </option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6  col-md-6">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select   name="couleur" required class="form-control select2" id="couleur-v-edit"    >
								<option></option>
								<option value="BLANC 99">BLANC 99</option>
								<option value="TON PIERRE">TON PIERRE</option>
								<option value="IVOIRE">IVOIRE</option>
								<option value="GRIS 7035">GRIS 7035</option>
								<option value="GRIS 7038">GRIS 7038</option>
								<option value="GRIS 7039">GRIS 7039</option>
								<option value="GRIS 7040">GRIS 7040</option>
								<option value="GRIS ALU">GRIS ALU</option>
								<option value="GRIS 7004 SATINÉ">GRIS 7004 SATINÉ</option>
								<option value="GRIS 9007">GRIS 9007</option>
								<option value="GRIS 7012">GRIS 7012</option>
								<option value="GRIS 7016">GRIS 7016</option>
								<option value="GRIS 7021">GRIS 7021</option>
								<option value="GRIS 7022">GRIS 7022</option>
								<option value="GRIS DB 703">GRIS DB 703</option>
								<option value="NOIR 9005">NOIR 9005</option>
								<option value="MARRON 8011">MARRON 8011</option>
								<option value="MARRON 8014">MARRON 8014</option>
								<option value="MARRON 8019">MARRON 8019</option>
								<option value="BRONZE B 390 S">BRONZE B 390 S</option>
								<option value="GOLDEN OAK">GOLDEN OAK</option>
								<option value="FAUX BOIS FONCÉ">FAUX BOIS FONCÉ</option>
								<option value="FAUX BOIS CLAIR">FAUX BOIS CLAIR</option>
								<option value="IRISH OAK">IRISH OAK</option>
								<option value="WINCHESTER">WINCHESTER</option>
								<option value="GRIS SABLÉ 2800">GRIS SABLÉ 2800</option>
								<option value="NOIR SABLÉ 2100">NOIR SABLÉ 2100</option>
								<option value="NOIR SABLÉ 100">NOIR SABLÉ 100</option>
								<option value="GRIS SABLÉ 2400">GRIS SABLÉ 2400</option>
								<option value="GRIS SABLÉ 2900">GRIS SABLÉ 2900</option>
								<option value="GRIS SABLÉ 900">GRIS SABLÉ 900</option>
								<option value="VERT 6005">VERT 6005</option>
								<option value="VERT 6021">VERT 6021</option>
								<option value="ROUGE 3004">ROUGE 3004</option>
								<option value="BLEU 5023">BLEU 5023</option>
								<option value="BLEU 5024">BLEU 5024</option>
								<option value="BLEU 5003">BLEU 5003</option>
								<option value="BLEU CANON">BLEU CANON</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Hauteur:</strong>
							<input id="hauteur-v-edit" type="number" name="hauteur" rerquired class="form-control" step ="100" min="200" max="3200"  value="{{old('hauteur')}}" onchange="pricing_volet(0,'-edit')" style="max-width:150px">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Largeur:</strong>
							<input id="largeur-v-edit" type="number" name="largeur" rerquired class="form-control" step ="100" min="200" max="2200"  value="{{old('largeur')}}" onchange="pricing_volet(0,'-edit')" style="max-width:150px">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<label class=pointer><input type="checkbox"   name="catalogue" id="catalogue-v-edit" value="1"  onchange="pricing_volet(0,'-edit')"/> Hors catalogue </label>
						</div>
					</div>
					<div class="col-md-12">
						<div class="text-volet-edit pl-5" style="color:red">
						</div>
					</div>

				</div>



				<div class="row pl-3">

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U TTC<small style="display:none">€</small>:</strong>
							<input readonly id="prix-v-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}" onchange="pricing_volet(0,'')" >
							<input type="hidden" id="shutter-edit" value="0"  />
							<input type="hidden" id="prixht-v-edit" value="0"  />

						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte-v-edit" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing_volet(0,'-edit')" >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>TVA <small>%</small>:</strong>
							<input readonly id="tva-v-edit" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="5.5"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Total <small style="display:none">€</small>:</strong>
							<input readonly id="total-v-edit" type="number" name="total" rerquired class="form-control" step ="0.01" min="0"  >
						</div>
					</div>

					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Note :</strong>
							<textarea  id="note-v-edit"   name="note"  class="form-control" ></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing_volet(1,'-edit')">
						<button type="button" id="insert-volet-edit" onclick="edit_volet()" disabled class="btn btn-primary mt-3 mr-3">Modifier</button>
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
							<strong>TVA <small>%</small>:</strong>
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
					<input type="hidden" value="0" id="product"   />
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

	document.addEventListener("DOMContentLoaded", function() {
        // Sélecteur de matière
        var matiereSelect = $("#matiere");
        // Sélecteur de porte avec Select2
        var doorSelect = $("#door");

        // Initialiser Select2
        doorSelect.select2();

        // Écouter les changements sur le sélecteur de matière
        matiereSelect.on("change", function() {
            // Récupérer la valeur sélectionnée dans le sélecteur de matière
            var selectedMatiere = matiereSelect.val();

            // Mettre à jour les options du sélecteur de porte en fonction de la matière sélectionnée
            doorSelect.find("option").each(function() {
                var doorValue = parseInt($(this).val());

                if ((selectedMatiere === "pvc" && doorValue >= 86) || (selectedMatiere === "alu" && doorValue <= 86)) {
                    $(this).prop("disabled", true).hide();
                } else {
                    $(this).prop("disabled", false).show();
                }
            });

            // Mettre à jour Select2 après avoir modifié les options
            doorSelect.trigger("change");
        });
    });

	$(document).ready(function() {

		// Écouteur d'événement pour le changement de valeur dans le menu déroulant `genre`
		$('#genre').on('change', function() {
			var selectedGenre = $(this).val();

			// Vérifiez si la valeur sélectionnée est égale à 1 (PVC)
			if (selectedGenre == 1) {
			// Cacher les options 8, 10 dans le menu déroulant `type`
				$('#type option[value="8"]').hide();
				//$('#type option[value="9"]').hide();
				$('#type option[value="10"]').hide();
				$('#type option[value="12"]').hide();
			} else {
			// Afficher toutes les options dans le menu déroulant `type`
			$('#type option').show();
			$('#type option[value="4"]').hide();
			$('#type option[value="11"]').hide();
			}
		});
	});

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
		var surface=0;
		$('#list-prods .myproduct').each(function(){
    		$(this).find('.myproducttd').each(function(){
				id_item=$(this).data('id');
				qty= parseInt($('#qty-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('prixht')* qty ));
				total_ttc+=parseFloat(( $(this).data('prix') *  qty));
				surface+=parseFloat(( $(this).data('surface')  ));
    		});
    		$(this).find('.doortd').each(function(){
				id_item=$(this).data('id');
				qty= parseInt($('#qty-d-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('prixht')* qty ));
				total_ttc+=parseFloat(( $(this).data('prix') *  qty));
    		});

			$(this).find('.volettd').each(function(){
				id_item=$(this).data('id');
				qty= parseInt($('#qty-v-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('prixht')* qty ));
				total_ttc+=parseFloat(( $(this).data('prix') *  qty));
				surface+=parseFloat(( $(this).data('surface')  ));
    		});

			$(this).find('.itemtd').each(function(){
				id_item=$(this).data('id');
				qty= parseInt($('#qty-i-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('prixht')* qty ));
				total_ttc+=parseFloat(( $(this).data('prix') *  qty));
    		});

			$(this).find('.myproducttdpose').each(function(){
				qty= parseInt($('#qtyp-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('pose') ));
				total_ttc+=parseFloat(( $(this).data('pose_ttc') ));
			});

			$(this).find('.doorposetd').each(function(){
				qty= parseInt($('#qtyp-d-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('pose') ));
				total_ttc+=parseFloat(( $(this).data('pose_ttc') ));
			});

			$(this).find('.voletposetd').each(function(){
				qty= parseInt($('#qtyp-v-'+id_item).val());
				total_ht+=parseFloat(( $(this).data('pose') ));
				total_ttc+=parseFloat(( $(this).data('pose_ttc') ));
			});
		});

		var tva_remise=parseFloat($('#tva_remise').val()) || 0;
		var total_remise=parseFloat($('#total_remise').val()) || 0;

		var p_tva_deplacement=parseFloat($('#tva_deplacement').val()) || 0;
		var total_deplacement=parseFloat($('#total_deplacement').val()) || 0;

		//var loi=parseFloat($('#loi').val()) || 0;
		var total_loi=parseFloat($('#total_loi').val()) || 0;
		var p_tva_loi=parseFloat($('#tva_loi').val()) || 0;

		var loi = total_loi / (1+(p_tva_loi*0.01));
		$('#loi').val(loi.toFixed(2));
		var tva_loi= total_loi-loi ;

		var remise = total_remise / (1+(tva_remise*0.01));
		$('#remise').val(remise.toFixed(2));

		var deplacement = total_deplacement / (1+(p_tva_deplacement*0.01));
		$('#deplacement').val(deplacement.toFixed(2));

		var val_total_ht=total_ht -remise   + loi + deplacement;
		// desactivation calcul manuel (supposant toujours tva =5.5%)
		/*
		$("#total_ht").val(val_total_ht.toFixed(2));
		total_tva = total_ttc-total_ht - (remise*tva_remise*0.01)    + tva_loi + p_tva_deplacement;
	    $('#total_tva').val(total_tva.toFixed(2));
		*/

		total_ttc=total_ttc -total_remise  ;
		//nouveau calcul ici :
		total_ht = total_ttc / 1.055 + loi ;
		total_tva = total_ttc-total_ht;
		$("#total_ht").val(total_ht.toFixed(2));
		$("#total_tva").val(total_tva.toFixed(2));

		total_ttc=total_ttc  + total_loi +total_deplacement;
		$('#total_ttc').val(total_ttc.toFixed(2));


		var aide=parseFloat($('#aide2').val()) || 0;
		var acompte=parseFloat($('#acompte').val()) || 0;

 		var net=parseFloat(total_ttc - aide  - acompte /*- total_remise*/);
		$('#net').val(net.toFixed(2));
		$('#surface').val(surface.toFixed(2));

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
		$('#article').val(0);
		$('#hauteur').val('');
		$('#largeur').val('');
		$('#prix').val('');
		$('#qte').val('1');
		$('#total').val('');
		$('#insert').prop('disabled',true);
		$('#note').val('');
	}

	function init_door(){
		$('#door').val(0);
		$('#prix-d').val('');
		$('#qte-d').val('1');
		$('#total-d').val('');
		$('#note-d').val('');
	}

	function init_volet(){
		$('#shutter').val(0);
		$('#prix-v').val('');
		$('#qte-v').val('1');
		$('#total-v').val('');
		$('#note-v').val('');
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

  	function add_article(){

  	var _token = $('input[name="_token"]').val();
	var modele= parseInt($("#modele").val());
	var type = parseInt($("#type").val());
	var prix=	parseFloat($('#prix').val());
	var note=	$('#note').val();
	var tva =	(prix / 1.055) * 0.055
	var prix_ht = (prix - tva).toFixed(2);
	var qte=	parseInt($('#qte').val());
	var total=parseFloat($('#total').val());
	var quote=	parseInt($('#quote').val());
	var groupe = parseInt($('#groupe_couleur').val());
	var cintrage = $('#cintrage').is(":checked") ? 1 : 0;
	var couleur= $("#couleur").val();
	var hauteur= $("#hauteur").val();
	var largeur= $("#largeur").val();
	var surface= ( (parseInt(hauteur)*parseInt(largeur) * qte ) / 1000000 ).toFixed(3);
	var tva=5.5;
	var pose = parseFloat($("#pose").val());
	var pose_ht= pose* qte;
	var pose_ttc= Math.ceil(pose_ht +  tva * pose_ht* 0.01)   ;

	$('#tva_remise').val(tva);

	var	groupe_text='';
	var cintrage_text='';
	if(groupe>0)
	{
		groupe_text='(Groupe '+groupe+')';
	}
	if(cintrage){
		cintrage_text='(avec cintrage)';
	}

	var product_text= $('#type option:selected').text()+' '+$('#genre option:selected').text()+' - Couleur: '+$('#couleur option:selected').text()+ groupe_text+' - Dimensions [H: '+hauteur+'mm * L: '+largeur+'mm] Mètre linéaire : '+ surface +' m² '+ cintrage_text;

	$.ajax({
        url: "{{ route('add_article') }}",
        method: "POST",
		async:false,
        data: {modele:modele,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,total:total,cintrage:cintrage,couleur:couleur,surface:surface,tva_pose:tva,pose:pose_ht,pose_ttc:pose_ttc,quote:quote,groupe:groupe,hauteur:hauteur,largeur:largeur,type:type,_token:_token},
        success: function (data) {
			if(data!=''){

				item_id=data;
				var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-'+item_id+'"><td class="myproducttd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'" data-surface="'+surface+'" ><b>'+product_text+ '<br>'+note+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" readonly  onchange="save_article_qty(this,'+item_id+','+prix+');"  id="qty-'+item_id+'" data-qty="'+qte+'" /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id="delete_item"   class="btn-xs btn-info mr-2" onclick="get_article('+item_id+')"><i class="fas fa-pen "  ></i></button><button     class="btn-xs btn-danger" onclick="delete_article('+item_id+')"><i class="fas fa-trash "  ></i></button></td></tr>';
				var row2='<tr class="myproduct product bg-lightgrey tr-prod" id="rowp-'+item_id+'"><td class="myproducttdpose"  data-pose="'+pose+'" data-pose_ttc="'+pose_ttc+'" data-id="'+item_id+'" ><i>FORFAIT POSE MENUISERIE</i></td><td>'+pose+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qtyp-'+item_id+'" readonly  /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="totalp-'+item_id+'" type="number" readonly class="total-prod number" value="'+pose_ttc+'"/> €</td><td></td></tr>';

				$('#list-prods').append(row);
				$('#list-prods').append(row2);
				$('#add-prod').modal('hide');

				init();
				calcul();
			}else{
			alert('erreur !')
			}

		}
	});


	$('#insert').prop('disabled',true);
	}

	function get_article(item){
		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('get_article') }}",
			method: "GET",
			data: {article:item,_token:_token},
			success: function (data) {

				$("#article-edit").val(item);
				$("#modele-edit").val(data.modele);
				$('#prix-edit').val(data.prix);
				$('#note-edit').val(data.note);
				$('#qte-edit').val(data.qte);
				$('#total-edit').val(data.total);
				$('#hauteur-edit').val(data.hauteur);
				$('#largeur-edit').val(data.largeur);
				$('#couleur-edit').val(data.couleur);
				$('#groupe_couleur-edit').val(data.groupe);
				$('#type-edit').val(data.type);
				$('#genre-edit').val(data.genre);
				if(data.cintrage)
					$('#cintrage-edit').prop('checked',true);
				else
					$('#cintrage-edit').prop('checked',false);

				if(parseInt(data.type) >0)
					$('#catalogue-edit').prop('checked',false);
				else
					$('#catalogue-edit').prop('checked',true);

				$("#couleur-edit").val(data.couleur);

				pricing(0,'-edit');
				$('#edit-prod').modal('show');

			}
		});
	}

	function edit_article(){
		var _token = $('input[name="_token"]').val();
		var article = $('#article-edit').val();
		var modele= parseInt($("#modele-edit").val());
		var prix=	parseFloat($('#prix-edit').val());
		var note=	$('#note-edit').val();
		var tva =	(prix / 1.055) * 0.055
		var prix_ht = (prix - tva).toFixed(2);
		var qte=	parseInt($('#qte-edit').val());
		var total=parseFloat($('#total-edit').val());
		var groupe = parseInt($('#groupe_couleur-edit').val());
		var cintrage = $('#cintrage-edit').is(":checked") ? 1 : 0;
		var couleur= $("#couleur-edit").val();
		groupe_text='';
		if(groupe>0){
			var	groupe_text='(Groupe '+groupe+')';
		}
		var cintrage_text='';

		var tva_pose=5.5;
		var pose = parseFloat($("#pose").val());
		var pose_ht= pose* qte;
		var pose_ttc= Math.ceil(pose_ht +  tva_pose * pose_ht* 0.01)   ;

		var hauteur= $("#hauteur-edit").val();
		var largeur= $("#largeur-edit").val();
		var surface= ((parseInt(hauteur)*parseInt(largeur) * qte ) / 1000000).toFixed(3);
		$('#row-'+article+' .myproducttd').data('surface',surface);

		if(cintrage)
			cintrage_text='(avec cintrage)';
		var product_text= $('#type-edit option:selected').text()+' '+$('#genre-edit option:selected').text()+' - Couleur: '+$('#couleur-edit option:selected').text()+ groupe_text+' - Dimensions [H: '+hauteur+'mm * L: '+largeur+'mm] Mètre linéaire : '+ surface +' m² '+ cintrage_text;

		$.ajax({
			url: "{{ route('edit_article') }}",
			method: "POST",
			data: {article:article,modele:modele,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,total:total,cintrage:cintrage,couleur:couleur,groupe:groupe,surface:surface,pose:pose_ht,tva_pose:tva_pose,pose_ttc:pose_ttc,hauteur:hauteur,largeur:largeur,_token:_token},
			success: function (item_id) {

				var row='<td class="myproducttd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'" data-surface="'+surface+'"  ><b>'+product_text+ '<br>'+note+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" readonly onchange="save_article_qty(this,'+item_id+','+prix+');"  id="qty-'+item_id+'"  data-qty="qty-'+qte+'" /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button    class="btn-xs btn-info mr-2" onclick="get_article('+item_id+')"><i class="fas fa-pen " data-id="'+item_id+'"></i></button><button id="delete_item"   class="btn-xs btn-danger" onclick="delete_article('+item_id+')"><i class="fas fa-trash "  ></i></td>';
				var row2='<td class="myproducttdpose"  data-pose="'+pose+'" data-pose_ttc="'+pose_ttc+'" data-id="'+item_id+'" ><i>FORFAIT POSE MENUISERIE</i></td><td>'+pose+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qtyp-'+item_id+'" readonly /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="totalp-'+item_id+'" type="number" readonly class="total-prod number" value="'+pose_ttc+'"/> €</td><td></td>';

				$('#row-'+item_id).html(row);
				$('#rowp-'+item_id).html(row2);
				$('#edit-prod').modal('hide');
				calcul();
			}
		});


	}


	function add_door(){

	var _token = $('input[name="_token"]').val();
	var door= parseInt($("#door").val());
	//var prix=	parseFloat($('#prix-d').val());
	var prix_ht=	parseFloat($('#prixht-d').val()).toFixed(2);
	var note=	$('#note-d').val();
	var qte=	parseInt($('#qte-d').val());
	var total=parseFloat($('#total-d').val());
	var quote=	parseInt($('#quote').val());
	var groupe = $('#groupe-d').val();
	var couleur= $("#couleur-d").val();
	var cintrage = $('#cintrage-d').is(":checked") ? 1 : 0;
	var prix= total/qte;
	var tva=5.5;
	var pose = parseFloat($("#pose").val());
	var pose_ht= pose* qte;
	var pose_ttc= Math.ceil(pose_ht +  tva * pose_ht* 0.01)   ;

	if(groupe==1){
		groupe_text=' (Extérieur COULEUR, Intérieur BLANC)';
	}else{
		groupe_text=' (Extérieur COULEUR, Intérieur COULEUR)';
	}
	if(cintrage==1){
		groupe_text+=' avec cintrage';
	}
	var product_text= $('#door option:selected').text()+' '+$('#matiere option:selected').text()+' '+' - Couleur: '+$('#couleur-d option:selected').text()+ groupe_text;

	$.ajax({
	url: "{{ route('add_door') }}",
	method: "POST",
	async:false,
	data: {door:door,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,total:total,couleur:couleur,cintrage:cintrage,groupe:groupe,pose:pose_ht,pose_ttc:pose_ttc,tva_pose:tva,quote:quote,_token:_token},
	success: function (data) {
		if(data!=''){

			item_id=data;//here
			var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-d-'+item_id+'"><td class="doortd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'"  ><b>'+product_text+ '<br>'+note+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" onchange="save_door_qty(this,'+item_id+','+prix+');"  id="qty-d-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-d-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button   class="btn-xs btn-info mr-2" onclick="get_door('+item_id+')"><i class="fas fa-pen "  ></i><button id="delete_item"   class="btn-xs btn-danger" onclick="delete_door('+item_id+')"><i class="fas fa-trash "  ></i></td></tr>';
			var row2='<tr class="myproduct product bg-lightgrey tr-prod" id="rowp-d-'+item_id+'"><td class="doorposetd"  data-pose="'+pose+'" data-pose_ttc="'+pose_ttc+'" data-id="'+item_id+'" ><i>FORFAIT POSE MENUISERIE</i></td><td>'+pose+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qtyp-d-'+item_id+'" readonly /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="totalp-d-'+item_id+'" type="number" readonly class="total-prod number" value="'+pose_ttc+'"/> €</td><td></td></tr>';

			$('#list-prods').append(row);
			$('#list-prods').append(row2);
			$('#add-door').modal('hide');

			init_door();
			calcul();
		}else{
		alert('erreur !')
		}

	}
	});


	}

	function get_door(item){
		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('get_door') }}",
			method: "GET",
			data: {item:item,_token:_token},
			success: function (data) {
				console.log('Detailed data:', data);
 				$("#porte").val(item);
 				$("#door-edit").val(data.door).trigger('change');
 				$('#prix-d-edit').val(data.prix);
 				$('#prixht-d-edit').val(data.prixht);
				$('#note-d-edit').val(data.note);
				$('#qte-d-edit').val(data.qte);
				$('#total-d-edit').val(data.total);
  				$('#couleur-d-edit').val(data.couleur).trigger('change');
				$('#groupe-d-edit').val(data.groupe);
  				if(data.cintrage)
					$('#cintrage-d-edit').prop('checked',true);
				else
					$('#cintrage-d-edit').prop('checked',false);

				pricing(0,'-edit');
				$('#edit-door').modal('show');

			}
		});
	}



	function edit_door(){
		var _token = $('input[name="_token"]').val();

		pricing_door(0,'-edit');

		var item= parseInt($("#porte").val());
		var door= parseInt($("#door-edit").val());
		var prix=	parseFloat($('#prix-d-edit').val());
		var prix_ht=	parseFloat($('#prixht-d-edit').val()).toFixed(2);
		var note=	$('#note-d-edit').val();
		var qte=	parseInt($('#qte-d-edit').val());
		var total=parseFloat($('#total-d-edit').val());
		var quote=	parseInt($('#quote').val());
		var groupe = $('#groupe-d-edit').val();
		var couleur= $("#couleur-d-edit").val();
		var cintrage = $('#cintrage-d-edit').is(":checked") ? 1 : 0;

		var tva_pose=5.5;
		var pose = parseFloat($("#pose").val());
		var pose_ht= pose* qte;
		var pose_ttc= Math.ceil(pose_ht +  tva_pose * pose_ht* 0.01)   ;

		if(groupe==1){
			groupe_text=' (Extérieur COULEUR, Intérieur BLANC)';
		}else{
			groupe_text=' (Extérieur COULEUR, Intérieur COULEUR)';
		}
		if(cintrage==1){
			groupe_text+=' avec cintrage';
		}
		var product_text= $('#door-edit option:selected').text()+' '+$('#matiere-edit option:selected').text()+' '+' - Couleur: '+$('#couleur-d-door option:selected').text()+ groupe_text;


		$.ajax({
			url: "{{ route('edit_door') }}",
			method: "POST",
			data: {item:item,door:door,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,total:total,couleur:couleur,cintrage:cintrage,groupe:groupe,pose:pose_ht,tva_pose:tva_pose,pose_ttc:pose_ttc,_token:_token},
			success: function (item_id) {

				var row='<td class="doortd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'"  ><b>'+product_text+ '<br>'+note+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" onchange="save_door_qty(this,'+item_id+','+prix+');"  id="qty-d-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-d-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button   class="btn-xs btn-info mr-2" onclick="get_door('+item_id+')"><i class="fas fa-pen "  ></i><button   class="btn-xs btn-danger" onclick="delete_door('+item_id+')"><i class="fas fa-trash "  ></i></td>';
				var row2='<td class="doorposetd"  data-pose="'+pose+'" data-pose_ttc="'+pose_ttc+'" data-id="'+item_id+'" ><i>FORFAIT POSE MENUISERIE</i></td><td>'+pose+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qtyp-d-'+item_id+'" readonly  /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="totalp-d-'+item_id+'" type="number" readonly class="total-prod number" value="'+pose_ttc+'"/> €</td><td></td>';

				$('#row-d-'+item_id).html(row);
				$('#rowp-d-'+item_id).html(row2);
				$('#edit-door').modal('hide');
				calcul();
			}
		});


	}

	function add_volet(){

		var _token = $('input[name="_token"]').val();
		var shutter= parseInt($("#shutter").val());
		var type= parseInt($("#type-v").val());
		var prix=	parseFloat($('#prix-v').val());
		var prix_ht=	parseFloat($('#prixht-v').val()).toFixed(2);
		var note=	$('#note-v').val();
		var qte=	parseInt($('#qte-v').val());
		var total=parseFloat($('#total-v').val());
		var quote=	parseInt($('#quote').val());
		var couleur= $("#couleur-v").val();
		var hauteur= $("#hauteur-v").val();
		var largeur= $("#largeur-v").val();
		var surface= ( (parseInt(hauteur)*parseInt(largeur) * qte ) / 1000000 ).toFixed(3);

		var tva_pose=5.5;
		var pose = parseFloat($("#pose").val());
		var pose_ht= pose* qte;
		var pose_ttc= Math.ceil(pose_ht +  tva_pose * pose_ht* 0.01)   ;

		var product_text= $('#type-v option:selected').text()+' '+' - Couleur: '+$('#couleur-v option:selected').text();
		product_text+= ' - Hauteur: '+hauteur+'mm - Largeur: '+largeur + 'mm - Mètre linéaire : '+surface+ '  m²';

		$.ajax({
		url: "{{ route('add_volet') }}",
		method: "POST",
		async:false,
		data: {shutter:shutter,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,total:total,couleur:couleur,surface:surface,pose:pose_ht,pose_ttc:pose_ttc,tva_pose:tva_pose,quote:quote,hauteur:hauteur,largeur:largeur,type:type,_token:_token},
		success: function (data) {
			if(data!=''){

				item_id=data;//here
				var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-v-'+item_id+'" ><td class="volettd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'" data-surface="'+surface+'"  ><b>'+product_text+ '</b><br>'+note+'</td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" readonly onchange="save_volet_qty(this,'+item_id+','+prix+');" data-qty='+qte+' id="qty-v-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-v-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id=""   class="btn-xs btn-info mr-2" onclick="get_volet('+item_id+')"><i class="fas fa-pen "  ></i></button><button id=""   class="btn-xs btn-danger" onclick="delete_volet('+item_id+')"><i class="fas fa-trash "  ></i></button></td></tr>';
				var row2='<tr class="myproduct product bg-lightgrey tr-prod" id="rowp-v-'+item_id+'"><td class="voletposetd"  data-pose="'+pose+'" data-pose_ttc="'+pose_ttc+'" data-id="'+item_id+'" ><i>FORFAIT POSE MENUISERIE</i></td><td>'+pose+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qtyp-v-'+item_id+'" readonly /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="totalp-v-'+item_id+'" type="number" readonly class="total-prod number" value="'+pose_ttc+'"/> €</td><td></td></tr>';

				$('#list-prods').append(row);
				$('#list-prods').append(row2);
				$('#add-volet').modal('hide');

				init_volet();
				calcul();
			}else{
				alert('erreur !')
			}

		}
		});


	}


	function get_volet(item){
		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('get_volet') }}",
			method: "GET",
			data: {item:item,_token:_token},
			success: function (data) {
				console.log('Detailed colet data:', data);
				$("#volet").val(item);
				$("#type-v-edit").val(data.type).trigger('change');
 				$('#prix-v-edit').val(data.prix);
 				$('#prixht-v-edit').val(data.prix_ht);
				$('#note-v-edit').val(data.note);
				$('#qte-v-edit').val(data.qty);
				$('#total-v-edit').val(data.total);
  				$('#couleur-v-edit').val(data.couleur).trigger('change');
				$('#hauteur-v-edit').val(data.hauteur);
				$('#largeur-v-edit').val(data.largeur);
				$('#edit-volet').modal('show');
				if(parseInt(data.type) >0)
					$('#catalogue-v-edit').prop('checked',false);
				else
					$('#catalogue-v-edit').prop('checked',true);
				pricing_volet(0,'-edit');
			}
		});
	}


	function edit_volet(){
		var _token = $('input[name="_token"]').val();
		pricing_volet(0,'-edit');
		var volet= parseInt($("#volet").val());
		var shutter= parseInt($("#shutter-edit").val());
		var type= parseInt($("#type-v-edit").val());
		var prix=	parseFloat($('#prix-v-edit').val());
		var prix_ht=	parseFloat($('#prixht-v-edit').val()).toFixed(2);//here
		var note=	$('#note-v-edit').val();
		var qte=	parseInt($('#qte-v-edit').val());
		var total=parseFloat($('#total-v-edit').val());
 		var couleur= $("#couleur-v-edit").val();
 		var hauteur= $("#hauteur-v-edit").val();
 		var largeur= $("#largeur-v-edit").val();
		var surface= ((parseInt(hauteur)*parseInt(largeur) * qte ) / 1000000 ).toFixed(3);
		$('#row-v-'+volet+' .volettd').data('surface',surface);

		var tva_pose=5.5;
		var pose = parseFloat($("#pose").val());
		var pose_ht= pose* qte;
		var pose_ttc= Math.ceil(pose_ht +  tva_pose * pose_ht* 0.01)   ;

		var product_text= $('#type-v-edit option:selected').text()+' '+' - Couleur: '+$('#couleur-v-edit option:selected').text();
		product_text+= '- Hauteur: '+hauteur+'mm - Largeur: '+largeur+ 'mm - Mètre linéaire : '+surface+ '  m²';

		$.ajax({
			url: "{{ route('edit_volet') }}",
			method: "POST",
			data: {volet:volet,shutter:shutter,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,surface:surface,pose:pose_ht,tva_pose:tva_pose,pose_ttc:pose_ttc,total:total,couleur:couleur,hauteur:hauteur,largeur:largeur,type:type,_token:_token},
			success: function (item_id) {

				var row='<td class="volettd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'" data-surface="'+surface+'"  ><b>'+product_text+ '<br>'+note+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" readonly onchange="save_volet_qty(this,'+item_id+','+prix+');" data-qty='+qte+' id="qty-v-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-v-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id=""   class="btn-xs btn-info mr-2" onclick="get_volet('+item_id+')"><i class="fas fa-pen "  ></i></button><button id=""   class="btn-xs btn-danger" onclick="delete_volet('+item_id+')"><i class="fas fa-trash "  ></i></button></td>';
				var row2='<td class="voletposetd"  data-pose="'+pose+'" data-pose_ttc="'+pose_ttc+'" data-id="'+item_id+'" ><i>FORFAIT POSE MENUISERIE</i></td><td>'+pose+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'"  id="qtyp-v-'+item_id+'"  readonly /></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="totalp-v-'+item_id+'" type="number" readonly class="total-prod number" value="'+pose_ttc+'"/> €</td><td></td>';

				$('#row-v-'+item_id).html(row);
				$('#rowp-v-'+item_id).html(row2);
				$('#edit-volet').modal('hide');

				calcul();

			}
		});


	}

	/* produit libre */
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

		var texte=  description+'<br>'+note;

		$('#tva_remise').val(tva);

		$.ajax({
			url: "{{ route('add_item_men') }}",
			method: "POST",
			async:false,
			data: { prix:prix,prix_ht:prix_ht,qte:qte,tva,description:description,note:note, quote:quote,_token:_token},
			success: function (data) {
				if(data!=''){

					item_id=data;//here
					var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-i-'+item_id+'"><td class="itemtd"  id="item-'+item_id+'" data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'"  ><b>'+texte+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" onchange="save_item_qty(this,'+item_id+','+prix_ht+','+prix+');"  id="qty-i-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tva+'"/> %</td><td><input id="total-i-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id=""   class="btn-xs btn-info mr-2" onclick="get_item('+item_id+')"><i class="fas fa-pen "  ></i></button><button id=""   class="btn-xs btn-danger" onclick="delete_item('+item_id+')"><i class="fas fa-trash "  ></i></button></td></tr>';

					$('#list-prods').append(row);
					$('#add-item').modal('hide');

					init_item();
					calcul();
				}else{
					alert('erreur !')
				}

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
					$("#product").val(item);
					$('#prixht-i-edit').val(data.prix_ht);
					$('#prix-i-edit').val(data.prix);
					$('#total-i-edit').val(data.total);
					$('#note-i-edit').val(data.note);
					$('#tva-i-edit').val(data.tva);
					$('#qte-i-edit').val(data.qty);
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
	var item = $('#product').val();
	pricing_item('-edit');

	var prix_ht=	parseFloat($('#prixht-i-edit').val()).toFixed(2);
	var prix=	parseFloat($('#prix-i-edit').val()).toFixed(2);
	var total=	$('#total-i-edit').val();
	var note=	$('#note-i-edit').val();
	var tva=	$('#tva-i-edit').val();
	var qte=	parseInt($('#qte-i-edit').val());
	var description= $('#description-edit').val();
	var texte=  description+'<br>'+note;

	$.ajax({
		url: "{{ route('edit_item_men') }}",
		method: "POST",
		async:false,
		data: {item:item, prix:prix,prix_ht:prix_ht,qte:qte,tva:tva,description:description,note:note, _token:_token},
		success: function (data) {
			if(data!=''){

				item_id=data;//here
				var row='<td class="itemtd"  id="item-'+item_id+'" data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+item_id+'"  ><b>'+texte+'</b></td><td>'+prix_ht+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" onchange="save_item_qty(this,'+item_id+','+prix_ht+','+prix+');"  id="qty-i-'+item_id+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="'+tva+'"/> %</td><td><input id="total-i-'+item_id+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id=""   class="btn-xs btn-info mr-2" onclick="get_item('+item_id+')"><i class="fas fa-pen "  ></i></button><button id=""   class="btn-xs btn-danger" onclick="delete_item('+item_id+')"><i class="fas fa-trash "  ></i></button></td>';

				$('#row-i-'+item_id).html(row);
				$('#edit-item').modal('hide');

				calcul();
			}else{
				alert('erreur !')
			}

		}
	});


	}

	function delete_article(item){
		if(!confirm("Êtes vous sûres?")) {
    	return false;
  		}

		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('delete_article') }}",
			method: "POST",
			data: {item:item,_token:_token},
			success: function (data) {
				$('#row-'+item).html('');
				$('#rowp-'+item).html('');
				calcul();
			}
		});
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
			$('#row-i-'+item).html('');
			calcul();
		}
		});
	}

	function delete_door(item){
		if(!confirm("Êtes vous sûres?")) {
    	return false;
  		}

		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('delete_door') }}",
			method: "POST",
			data: {item:item,_token:_token},
			success: function (data) {
				$('#row-d-'+item).html('');
				$('#rowp-d-'+item).html('');
				calcul();
			}
		});
	}

	function delete_volet(item){
		if(!confirm("Êtes vous sûres?")) {
    	return false;
  		}

		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('delete_volet') }}",
			method: "POST",
			data: {item:item,_token:_token},
			success: function (data) {
				$('#row-v-'+item).html('');
				$('#rowp-v-'+item).html('');
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
	var tva_remise=	$('#tva_remise').val();
	var remise=$('#remise').val();
	var total_deplacement=	$('#total_deplacement').val();
	var tva_deplacement=	$('#tva_deplacement').val();
	var deplacement=$('#deplacement').val();
	var aide=	$('#aide2').val();
	var aide_renov=	$('#aide_renov').val();
	var aide_cee=	$('#aide_cee').val();
	var acompte=	$('#acompte').val();
	var net=	$('#net').val();
	var loi=	$('#loi').val();
	var total_loi=	$('#total_loi').val();
	var surface=	$('#surface').val();


	$.ajax({
		url: "{{ route('update_totals') }}",
		method: "POST",
		data: {total_ht:total_ht,total_tva:total_tva,total_ttc:total_ttc,total_remise:total_remise,remise:remise,total_deplacement:total_deplacement,deplacement:deplacement,tva_deplacement:tva_deplacement,surface:surface,quote:quote,aide:aide,aide_renov:aide_renov,aide_cee:aide_cee,net:net,acompte:acompte,tva_remise:tva_remise,loi:loi,total_loi:total_loi, _token:_token},
		success: function (data) {
		}
	});

	}


	function pricing(btn,edit){
		if(btn==0)
		{$("#insert"+edit).prop('disabled',true);}
		var hors_catalogue = $('#catalogue'+edit).is(":checked") ? 1 : 0;
		var _token = $('input[name="_token"]').val();
		var genre= $("#genre"+edit).val();
		var type= $("#type"+edit).val();
		var couleur= $("#couleur"+edit).val();
		var largeur= parseInt($("#largeur"+edit).val());
		var hauteur= parseInt($('#hauteur'+edit).val());
		var qte= parseInt($('#qte'+edit).val());
		var cintrage = $('#cintrage'+edit).is(":checked") ? 1 : 0;
		var groupe_couleur =  $("#groupe_couleur"+edit).val();
		if(hors_catalogue){
			$('.text-danger'+edit).html('');
			$("#prix"+edit).attr("readonly", false);
			var total = parseFloat($("#prix"+edit).val()) * qte;
			$("#total"+edit).val(total.toFixed(2));
			$("#modele"+edit).val(0);
			$('#insert'+edit).prop('disabled',false);

		}else{
			$("#prix"+edit).attr("readonly", true);
			if(largeur>0 && hauteur>0){
				$.ajax({
					url: "{{ route('pricing') }}",
					method: "GET",
					data: {genre:genre,type:type,couleur:couleur,largeur:largeur,hauteur:hauteur,cintrage:cintrage,groupe_couleur:groupe_couleur,_token:_token},
					success: function (data) {
						if(parseFloat(data.prix)>0)
						{
							$('.text-danger'+edit).html('');
							$("#modele"+edit).val(data.id);
							//$("#insert").prop('disabled',false);

							$("#prix"+edit).val(data.prix);
							var total = parseFloat(data.prix) * qte;
							$("#total"+edit).val(total.toFixed(2));

						}
						else{
							$('.text-danger'+edit).html('<b class="pb-2"> Modèle non trouvé, vérifiez les données insérées</b>');
							$('#prix'+edit).val(0);
							$('#total'+edit).val(0);
							//$("#insert").prop('disabled',true);
						}
						//calcul();
						$('#insert'+edit).prop('disabled',false);
					}
				});
			}
		}


	}

	function pricing_door(id){
		var _token = $('input[name="_token"]').val();
		var door= $("#door"+id).val();
		var groupe= $("#groupe-d"+id).val();
		var couleur= $("#couleur-d"+id).val();
		var qte= parseInt($('#qte-d'+id).val());
		var p_tva= parseInt($('#tva-d'+id).val());
		var cintrage = $('#cintrage-d'+id).is(":checked") ? 1 : 0;

		if(door>0 && groupe>0  ){
			$.ajax({
				url: "{{ route('pricing_door') }}",
				method: "GET",
				data: {door:door,groupe:groupe,couleur:couleur,cintrage:cintrage,_token:_token},
				success: function (data) {

					if(parseFloat(data.prix)>0)
					{
						$('.text-door'+id).html('');
						$("#door"+id).val(data.id);
						//$("#insert").prop('disabled',false);

						$("#prix-d"+id).val(data.prix);
						var prix_ht = data.prix ;// / (1+(p_tva*0.01));
						$("#prixht-d"+id).val(prix_ht);
						var total = parseFloat(data.prix) * qte * 1.055;
						$("#total-d"+id).val(total.toFixed(2));

					}
					else{
						$('.text-door'+id).html('<b class="pb-2"> Modèle non trouvé, vérifiez les données insérées</b>');
						$('#prix-d'+id).val(0);
						$('#prixht-d'+id).val(0);
						$('#total-d'+id).val(0);
						//$("#insert").prop('disabled',true);
					}
					//calcul();
				}
			});
		}

	}


	function pricing_volet(btn,id){
		if(btn==0)
		{$("#insert-volet"+id).prop('disabled',true);}
		var _token = $('input[name="_token"]').val();
		var largeur= parseInt($("#largeur-v"+id).val());
		var hauteur= parseInt($('#hauteur-v'+id).val());
		var qte= parseInt($('#qte-v'+id).val());
		var type= parseInt($('#type-v'+id).val());
		var p_tva= parseInt($('#tva-v'+id).val());
		var hors_catalogue = $('#catalogue-v'+id).is(":checked") ? 1 : 0;

		if(hauteur > 0 && largeur >0){
			if(hors_catalogue==1){
				$('.text-volet'+id).html('');
				$("#prix-v"+id).attr("readonly", false);
				var prix= $("#prix-v"+id).val();
				var prix_ht = prix / (1+(p_tva*0.01));
				$("#prixht-v"+id).val(prix_ht.toFixed(3));
				var total = parseFloat(prix) * qte;
				$("#total-v"+id).val(total.toFixed(2));
				$("#shutter"+id).val(0);
				$("#insert-volet"+id).prop('disabled',false);
			}else{
				$("#prix-v"+id).attr("readonly", true);
				if(hauteur<800){
					hauteur=800;
				}
				if(largeur<800){
					largeur=800;
				}

				if(type==3){
					if(hauteur>1400 && hauteur < 1501){
						hauteur=1500;
					}
					if(hauteur>2100 && hauteur < 2300){
						hauteur=2300;
					}
					if(hauteur>2500 ){
						hauteur=2500;
					}
				}
				if(type==1 || type==2){
					if(hauteur>1300 && hauteur < 1401){
						hauteur=1400;
					}
					if(hauteur>1400 && hauteur < 1501){
						hauteur=1500;
					}
					if(hauteur>1700 && hauteur < 1801){
						hauteur=1800;
					}
					if(hauteur>2200 && hauteur < 2301){
						hauteur=2300;
					}
					if(hauteur>2600 && hauteur < 2701){
						hauteur=2700;
					}
					if(hauteur>2900 ){
						hauteur=2900;
					}
				}

				$.ajax({
					url: "{{ route('pricing_volet') }}",
					method: "GET",
					data: {type:type,qte:qte,largeur:largeur,hauteur:hauteur,_token:_token},
					success: function (data) {

						if(parseFloat(data.prix)>0)
						{
							$('.text-volet'+id).html('');
							$("#shutter"+id).val(data.id);
							$("#insert-volet"+id).prop('disabled',false);

							$("#prix-v"+id).val(data.prix);
							var prix_ht = data.prix / (1+(p_tva*0.01));
							$("#prixht-v"+id).val(prix_ht);
							var total = parseFloat(data.prix) * qte;
							$("#total-v"+id).val(total);
						}
						else{
							$('.text-volet'+id).html('<b class="pb-2"> Modèle non trouvé, vérifiez les données insérées</b>');
							$('#prix-v'+id).val(0);
							$('#prixht-v'+id).val(0);
							$('#total-v'+id).val(0);
							$("#insert-volet"+id).prop('disabled',true);
						}
						//calcul();
					}
				});

			}//hors_catalogue
		} //hauteur & largeur
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

	function save_article_qty(elm,article,price){
		var _token = $('input[name="_token"]').val();
		var qty=parseInt($(elm).val());
		var total= (qty*price).toFixed(2) ;
		var qty_1=$(elm).data('qty');
		var surface=$('#row-'+article+' .myproducttd').data('surface');

		var single_surface=surface/qty_1;
		var new_surface=single_surface * qty;
		$('#row-'+article+' .myproducttd').data('surface',new_surface);
		$('#total-'+article).val(total);
		var pose = parseInt($('#pose').val());
		var pose_ttc = Math.ceil(( pose +  (pose * 5.5 *0.01 ) ) * qty) ;
		$('#qtyp-'+article).val(qty);
		$('#totalp-'+article).val(pose_ttc);
		$('#rowp-'+article+' .myproducttdpose').data('pose',pose*qty);
		$('#rowp-'+article+' .myproducttdpose').data('pose_ttc',pose_ttc);
		$.ajax({
		url: "{{ route('save_article_qty') }}",
		method: "POST",
		data: {article:article,qty:qty,surface:new_surface,pose_ttc:pose_ttc,total:total, _token:_token},
		success: function (data) {
			calcul();
		}
		});
	}

	function save_door_qty(elm,porte,price){
		var _token = $('input[name="_token"]').val();
		var qty=$(elm).val();
		//var qty=$('#qty-pose-'+article).val(qty);
		var total= (qty*price).toFixed(2) ;
		$('#total-d-'+porte).val(total);
		var pose = parseInt($('#pose').val());
		var pose_ttc = Math.ceil(( pose +  (pose * 5.5 *0.01 ) ) * qty) ;
		$('#qtyp-d-'+porte).val(qty);
		$('#totalp-d-'+porte).val(pose_ttc);
		$('#rowp-d-'+porte+' .doorposetd').data('pose',pose*qty);
		$('#rowp-d-'+porte+' .doorposetd').data('pose_ttc',pose_ttc);
		$.ajax({
		url: "{{ route('save_door_qty') }}",
		method: "POST",
		data: {porte:porte,qty:qty,total:total,pose_ttc:pose_ttc, _token:_token},
		success: function (data) {
			calcul();
		}
		});
	}


	function save_volet_qty(elm,volet,price){
		var _token = $('input[name="_token"]').val();
		var qty=$(elm).val();
		var qty_1=$(elm).data('qty');
		var surface=$('#row-v-'+volet+' .volettd').data('surface');
		var single_surface=surface/qty_1;
		var new_surface=single_surface * qty;
		$('#row-v-'+volet+' .volettd').data('surface',new_surface);
		var total= (qty*price).toFixed(2) ;
		$('#total-v-'+volet).val(total);
		var pose = parseInt($('#pose').val());
		var pose_ttc = Math.ceil(( pose +  (pose * 5.5 *0.01 ) ) * qty );
		$('#qtyp-v-'+volet).val(qty);
		$('#totalp-v-'+volet).val(pose_ttc);
		$('#rowp-v-'+volet+' .voletposetd').data('pose',pose*qty);
		$('#rowp-v-'+volet+' .voletposetd').data('pose_ttc',pose_ttc);
		$.ajax({
		url: "{{ route('save_volet_qty') }}",
		method: "POST",
		data: {volet:volet,qty:qty,total:total,surface:new_surface,pose_ttc:pose_ttc, _token:_token},
		success: function (data) {
			calcul();
		}
		});
	}

	//libre
	function save_item_qty(elm,item,prix_ht,prix_ttc){
		var _token = $('input[name="_token"]').val();
		var qty=parseInt($(elm).val());
		var total= (qty*prix_ttc).toFixed(2);

		$('#item-'+item).data('prix',prix_ttc);
		$('#item-'+item).data('prixht',prix_ht);

		$('#total-i-'+item).val(total);

		$.ajax({
		url: "{{ route('save_item_qty') }}",
		method: "POST",
		data: {item:item,qty:qty, _token:_token},
		success: function (data) {
			calcul();
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

<script type="text/javascript" src="{{asset('js/jquery.signature.js')}}"></script>
<script>
var canvas = document.getElementById("canvas1");
	var signaturePad = new SignaturePad(canvas, {
	backgroundColor: 'rgb(255, 255, 255)',
	minWidth: 2,

	});

	var canvas2 = document.getElementById("canvas2");
	var signaturePad2 = new SignaturePad(canvas2, {
	backgroundColor: 'rgb(255, 255, 255)',
	minWidth: 2,

	});

	var canvas3 = document.getElementById("canvas3");
	var signaturePad3 = new SignaturePad(canvas3, {
	backgroundColor: 'rgb(255, 255, 255)'
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

	function dataURLToBlob(dataURL,target) {
		var parts = dataURL.split(';base64,');
		var contentType = parts[0].split(":")[1];
		var raw = window.atob(parts[1]);
		var rawLength = raw.length;
		var uInt8Array = new Uint8Array(rawLength);

		for (var i = 0; i < rawLength; ++i) {
			uInt8Array[i] = raw.charCodeAt(i);
		}

		var blob= new Blob([uInt8Array], { type: contentType });

		$(target).val(blob);
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

