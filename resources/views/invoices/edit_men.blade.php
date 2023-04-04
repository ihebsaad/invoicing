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
                <h2> Facture <small>Menuiserie</small> {{$invoice->id}} -  {{$invoice->reference}}  </h2>
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
                    <a class="nav-link" id="custom-tabs-three-finance-tab" data-toggle="pill" href="#custom-tabs-three-finance" role="tab" aria-controls="custom-tabs-three-finance" aria-selected="false">Règlement</a>
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
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<i class="fas fa-address-card"></i>
									<?php $customer= \App\Models\Customer::find($invoice->customer);?>
									{{$customer->civility}} {{$customer->name}} {{$customer->lastname}} <br>
									<i class="fas fa-phone mr-2"></i>{{$customer->phone}} <i class="fas fa-envelope mr-2 ml-4"></i> {{$customer->email}} <br>
									<i class="fas fa-map-marker mr-2"></i> {{$customer->address}} - {{$customer->city}}
								</div>
							</div>

								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="form-group">
										<strong>Adresse du chantier:</strong>
										<input type="text"   name="delivery_address" id="delivery_address" class="form-control" placeholder="Adresse" value="{{$invoice->delivery_address ?? $customer->delivery_address}}" style="max-width:400px">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-3">
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

							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="form-group">
									<strong>Chaudière à :</strong>
									<select  class="form-control"   name="chaudiere" style="max-width:180px" >
										<option value=""></option>
										<option  @if($invoice->chaudiere=='Gaz') selected="selected" @endif value="Gaz">Gaz</option>
										<option  @if($invoice->chaudiere=='Fioul') selected="selected" @endif value="Fioul">Fioul</option>
										<option  @if($invoice->chaudiere=='Charbon') selected="selected" @endif value="Charbon">Charbon</option>
										<option  @if($invoice->chaudiere=='Autre') selected="selected" @endif value="Autre">Autre</option>
									</select>
								</div>
							</div>

							@if($invoice->menuiserie)
							<div class="col-xs-12 col-sm-12 col-md-4" id="div-chauffage" >
								<div class="form-group">
									<strong>Type de chauffage :</strong>
									<select  class="form-control" required  name="chauffage"  id="chauffage"  style="max-width:180px;" >
										<option  value=""></option>
										<option  @if($invoice->chauffage=='Electrique') selected="selected" @endif  value="Electrique">Electrique</option>
										<option  @if($invoice->chauffage=='Combustible') selected="selected" @endif  value="Combustible">Combustible</option>
									</select>
								</div>
							</div>
							@endif

							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="form-group">
									<strong>Surface chauffée (m²):</strong>
									<input type="number" class="form-control"   name="surface" value="{{ $invoice->surface }}" style="max-width:180px"/>
								</div>
							</div>
						</div>
						<div class="row pl-3 mt-2">
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="form-group">
									<strong>Type de logement:</strong>
									<select class="form-control"   name="logement"  value="{{ $invoice->logement}}" style="max-width:300px">
										<option value="Maison individuel" @if($invoice->logement=='Maison individuel') selected="selected" @endif >Maison individuel</option>
										<option value="Appartement" @if($invoice->logement=='Appartement') selected="selected" @endif >Appartement</option>
									</select>
								</div>
							</div>



							<div class="col-xs-12 col-sm-12 col-md-4">
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
							<a href="#" class="btn btn-sm btn-success float-right mb-2" data-toggle="modal" data-target="#add-prod" title="Ajouter un produit"  ><i class="fa fa-plus"></i> Ajouter un produit</a>
						<table class="tab-products table-responsive table-striped  " style="width:100%">
							<thead class="th-products">
								<tr>
									<th style="width:35%">Produit</th><th style="width:8%">Prix U</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total</th><th style="width:10%">+/-</th>
								</tr>
							</thead>
							<tbody id="list-prods" style="min-height:300px list-prods">

								@php $c=0;  @endphp
								@foreach($articles as $article)
									@php
										$modele=\App\Models\Modele::find($article->modele);
										$total_prod= $article->total_ttc;
										$c++;
									@endphp
									<tr class="myproduct product bg-lightgrey tr-prod" id="row-{{$modele->id}}">
										<td class="myproducttd" data-prix="{{$article->price}}" data-prixht="{{$article->price_ht}}" data-id="{{$modele->id}}"  ><b>{{$article->text}}<br>{{$article->note}}</b></td><td >{{$article->price}} €</td><td><input id="qty-{{$modele->id}}" type="number" step="1" min="1" class="number" value="{{$article->qty}}"  onchange="calcul();save_article_qty(this,{{$article->id}},{{$article->price}})"/></td><td><input readonly step="0.5" min="5.5" type="number" step="0.5" min="1" class="number bg-transparent" value="5.5"/> %</td><td><input id="total-{{$article->id}}" type="number" readonly class="total-prod number" value="{{$total_prod}}"/> €</td><td><button id="delete_item"   class="btn-sm btn-danger" onclick="delete_item({{$modele->id}},{{$article->id}})"><i class="fas fa-minus " data-id="{{$article->id}}"></i></td>
									</tr>
								@endforeach
							</tbody>
							<tfoot>
								<tr class="product bg-grey">
									<td>Loi Anti Gaspillage</td><td  ><input style="text-align:right" id="loi" type="number" class="number bg-transparent" readonly value="{{$invoice->loi ?? 94.79}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number  bg-transparent" id="tva_loi" name="tva_loi" style="width:100px" step="0.5" value="{{$invoice->tva_loi ?? 5.5}}" readonly onchange="calcul();" /> %</td><td><input id="total_loi" type="number"  class="number" style="max-width:70px" value="{{$invoice->total_loi ?? 100}}" onchange="calcul();"/> €</td><td></td>
								</tr>
								<tr class="product bg-grey">
									<td>Remise Catalogue Groupe HER ENR</td><td  ><input style="text-align:right" id="remise" type="number" class="number bg-transparent" readonly value="{{$invoice->remise ?? 0}}" />€</td><td style="text-align:center;padding-right:15px">1</td><td><input type="number" class="number  bg-transparent" id="tva_remise" name="tva_remise" style="width:100px" step="0.5" value="{{$invoice->tva_remise ?? 0}}" readonly onchange="calcul();" /> %</td><td><input id="total_remise" type="number"  class="number" style="max-width:70px" value="{{$invoice->total_remise ?? 0}}" onchange="calcul();$('#remise2').val($(this).val())"/> €</td><td></td>
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
												<select class="form-control" style="max-width:200px" name="type_aide" id="type_aide" onchange="calcul();" >
													<option></option>
													<option @if($invoice->type_aide=='Ma Prime Renov') selected="selected" @endif value="Ma Prime Renov">Prime Renov</option>
													<option @if($invoice->type_aide=='Coup de pouce') selected="selected" @endif value="Coup de pouce">Coup de pouce</option>
													<option @if($invoice->type_aide=='Prime CEE') selected="selected" @endif value="Prime CEE">Prime CEE</option>
												</select>
											</div>
										</td>
										<td style="padding-right:0">
											<div class="form-group">
												<input type="number" class="form-control" style="max-width:100px" min="0" value="{{$invoice->aide ?? 0}}" id="aide" onchange="calcul();$('#aide2').val($(this).val())"/>
											</div>
										</td>
										<td style="">€</td>
									</tr>
								</table>
								<table style="max-width:360px;height:100px;float:left;margin-left:60px" class="table-aide" >
									<tr>
										<td colspan="2"><strong>Acompte:</strong></td>
									</tr>
									<tr>
										<div class="form-group"><td><div class="form-group"><input type="number" class="form-control" style="max-width:100px" min="0" value="{{$invoice->acompte ?? 0}}" id="acompte" onchange="calcul();"/></div></td><td style="padding:0 10px 0 0">€</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table class="totals">
									<tr><td colspan="2">Total HT</td><td><input id="total_ht" type="number"  class="number numbers bg-transparent" readonly  value="{{$invoice->total_ht ?? 0}}"/> €</td></tr>
									<tr><td colspan="2">Total TVA</td><td><input id="total_tva" type="number"  class="number numbers bg-transparent"  readonly  value="{{$invoice->total_tva ?? 0}}"/> €</td></tr>
									<tr><td colspan="2">TOTAL TTC</td><td><input id="total_ttc" type="number" readonly  class="number numbers bg-transparent" value="{{$invoice->total_ttc ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Remise</td><td><input id="remise2" type="number" readonly  class="number numbers bg-transparent" value="{{$invoice->total_remise ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Acompte</td><td><input id="acompte2" type="number" readonly  class="number numbers bg-transparent" value="{{$invoice->acompte ?? 0}}" /> €</td></tr>
									<tr><td colspan="2" style="color:#f07f32">Aide éligible</td><td><input id="aide2" type="number" readonly  class="number numbers bg-transparent" value="{{$invoice->aide ?? 0}}" /> €</td></tr>
									<tr><td colspan="2">Net à payer</td><td><input id="net" type="number" readonly  class="number numbers bg-transparent" value="{{intval($invoice->net ?? 0)}}" /> €</td></tr>
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
									<select  class="form-control"   id="modalite" name="modalite" style="max-width:260px" onchange="check_finances()">
										<option value=""></option>
										<option  @if($invoice->modalite=='Chèque') selected="selected" @endif value="Chèque">Chèque</option>
										<option @if($invoice->modalite=='2 Chèques') selected="selected" @endif value="2 Chèques">2 Chèques</option>
										<option @if($invoice->modalite=='3 Chèques') selected="selected" @endif value="3 Chèques">3 Chèques</option>
										<option @if($invoice->modalite=='4 Chèques') selected="selected" @endif value="4 Chèques">4 Chèques</option>
										<option  @if($invoice->modalite=='Financement DOMOFINANCE') selected="selected" @endif value="Financement DOMOFINANCE">Financement DOMOFINANCE</option>
										<option  @if($invoice->modalite=='Financement FRANFINANCE') selected="selected" @endif value="Financement FRANFINANCE">Financement FRANFINANCE</option>
										<option  @if($invoice->modalite=='Financement SOFINCO') selected="selected" @endif value="Financement SOFINCO">Financement SOFINCO</option>
										<option  @if($invoice->modalite=='Financement PROJEXIO') selected="selected" @endif value="Financement PROJEXIO">Financement PROJEXIO</option>
										<option  @if($invoice->modalite=='Chèque & Financement DOMOFINANCE') selected="selected" @endif value="Chèque & Financement DOMOFINANCE">Chèque et Financement DOMOFINANCE</option>
										<option  @if($invoice->modalite=='Chèque & Financement FRANFINANCE') selected="selected" @endif value="Chèque & Financement FRANFINANCE">Chèque et Financement FRANFINANCE</option>
										<option  @if($invoice->modalite=='Chèque & Financement SOFINCO') selected="selected" @endif value="Chèque & Financement SOFINCO">Chèque et Financement SOFINCO</option>
										<option  @if($invoice->modalite=='Chèque & Financement PROJEXIO') selected="selected" @endif value="Chèque & Financement PROJEXIO">Chèque et Financement PROJEXIO</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div id="finances"  @if( str_contains($invoice->modalite, 'Chèque')  || $invoice->modalite== '') style="display:none" @else style="display:contents"  @endif >
								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant financé en € :</strong>
										<input type="number"  class="form-control"  min="0"  name="montant_finance" style="max-width:180px" value="{{$invoice->montant_finance}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Report 1ère échéance :</strong>
										<input type="number"  class="form-control" min="0"   name="report_echeance" style="max-width:180px" value="{{$invoice->report_echeance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Nombre de mensualités :</strong>
										<input type="number"  class="form-control" min="0"  name="mensualites" style="max-width:180px" value="{{$invoice->mensualites}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel sans assurance en €:</strong>
										<input type="number"  class="form-control"  min="0" step="0.01" name="montant_mensuel" style="width:180px" value="{{$invoice->montant_mensuel}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Montant mensuel de l'assurance en €:</strong>
										<input type="number"  class="form-control" min="0" step="0.01" name="montant_assurance" style="max-width:180px" value="{{$invoice->montant_assurance}}">
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% Taux nominal :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taux_nominal" style="max-width:180px" value="{{$invoice->taux_nominal}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>% TAEG :</strong>
										<input type="number"  class="form-control" min="0"  step="0.01" name="taeg" style="max-width:180px" value="{{$invoice->taeg}}" >
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6">
									<div class="form-group">
										<strong>Solde de la pose en €:</strong>
										<input type="number"  class="form-control"   min="0" step="0.01" name="pose" style="max-width:180px" value="{{$invoice->pose}}">
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8">
								<div id="cheques"   >
									<table style="width:80%;;" id='cheques-table'>
										<tr id="chq-1"  @if($invoice->modalite!='4 Chèques' && $invoice->modalite!='3 Chèques' && $invoice->modalite!='2 Chèques' && $invoice->modalite!='Chèque' )  style="display:none" @endif >
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 1</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant1" style="max-width:180px" value="{{$invoice->montant1}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 1</strong>
													<textarea class="form-control"   min="0" step="0.01" name="note1"   >{{$invoice->note1}}</textarea>
												</div>
											</td>
										</tr>
										<tr id="chq-2"  @if($invoice->modalite!='4 Chèques' && $invoice->modalite!='3 Chèques' && $invoice->modalite!='2 Chèques' )  style="display:none" @endif >
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 2</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant2" style="max-width:180px" value="{{$invoice->montant2}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 2</strong>
													<textarea class="form-control"   min="0" step="0.01" name="note2"  >{{$invoice->note2}}</textarea>
												</div>
											</td>
										</tr>
										<tr id="chq-3"  @if($invoice->modalite!='4 Chèques' && $invoice->modalite!='3 Chèques' ) style="display:none" @endif>
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 3</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant3" style="max-width:180px" value="{{$invoice->montant3}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 3</strong>
													<textarea  class="form-control"   min="0" step="0.01" name="note3"  >{{$invoice->note3}}</textarea>
												</div>
											</td>
										</tr>
										<tr id="chq-4" @if($invoice->modalite!='4 Chèques') style="display:none" @endif >
											<td class="vtop">
											<div class="form-group">
												<strong>Montant chèque 4</strong>
												<input type="number"  class="form-control"   min="0" step="0.01" name="montant4" style="max-width:180px" value="{{$invoice->montant4}}">
											</div>
											</td>
											<td class="vtop">
												<div class="form-group">
													<strong>Note 4</strong>
													<textarea   class="form-control"   min="0" step="0.01" name="note4"  >{{$invoice->note4}}</textarea>
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


			</div>

		</div>
	</div>





	<div class="modal fade" id="add-prod">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Ajouter un produit </h4>
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
							<select  name="genre" required class="form-control" id="genre"   onchange="pricing()">
								<option></option>
								<option   selected="selected"   value="1">PVC</option>
								<option    value="2">Aluminium</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="form-group">
							<strong>Type:</strong>
							<select  name="type" required class="form-control" id="type"  onchange="pricing()">
								<option></option>
								<option  @if( old("type")==1)  selected="selected" @endif value="1">Fenêtre à souflet</option>
								<option  @if( old("type")==2)  selected="selected" @endif  value="2">Fenêtre 1 vantail</option>
								<option  @if( old("type")==3)  selected="selected" @endif  value="3">Fenêtre 2 vantaux </option>
								<option  @if( old("type")==4)  selected="selected" @endif  value="4">Fenêtre 3 vantaux</option>
								<option  @if( old("type")==5)  selected="selected" @endif  value="5">Fenêtre fixe</option>
								<option  @if( old("type")==6)  selected="selected" @endif  value="6">Porte Fenêtre 1 vantail</option>
								<option  @if( old("type")==7)  selected="selected" @endif  value="7">Porte Fenêtre 2 vantaux</option>
								<option  @if( old("type")==8)  selected="selected" @endif  value="8">Coulissant 1 </option>
								<option  @if( old("type")==9)  selected="selected" @endif  value="9">Coulissant 2 </option>
								<option  @if( old("type")==10)  selected="selected" @endif  value="10">Coulissant 3 </option>
							</select>
						</div>
					</div>

					<div class="col-xs-12 col-sm-8  col-md-8">
						<div class="form-group">
							<strong>Couleur:</strong>
							<select   name="couleur" required class="form-control" id="couleur"   onchange="pricing()">
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
							<select   name="groupe_couleur" required class="form-control" id="groupe_couleur"   onchange="pricing()">
								<option></option>
								<option  value="1">1</option>
								<option  value="2">2</option>
								<option  value="3">3</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Hauteur:</strong>
							<input id="hauteur" type="number" name="hauteur" rerquired class="form-control" step ="100" min="200" max="3200"  value="{{old('hauteur')}}" onchange="pricing()" style="max-width:150px">
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong>Largeur:</strong>
							<input id="largeur" type="number" name="largeur" rerquired class="form-control" step ="100" min="200" max="2200"  value="{{old('largeur')}}" onchange="pricing()" style="max-width:150px">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="form-group">
							<strong> </strong>
							<label class=pointer><input type="checkbox"   name="cintrage" id="cintrage" value="1"  onchange="pricing()"/> Cintrage </label>						</div>
					</div>

					<div class="col-md-12">
						<div class="text-danger pl-5">

						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Prix U <small style="display:none">€</small>:</strong>
							<input readonly id="prix" type="number" name="prix" rerquired class="form-control" step ="0.01" min="0"  value="{{old('prix')}}"  >
							<input type="hidden" id="modele" value="0"  />
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="form-group">
							<strong>Qté :</strong>
							<input  id="qte" type="number" name="qte" rerquired class="form-control" step ="1" min="1"  value="1" onchange="pricing()" >
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
					<div class="col-xs-12 col-sm-12 col-md-12 text-right" onmouseover="pricing()">
						<button type="button" id="insert" onclick="add_article()" disabled class="btn btn-primary mt-3 mr-3">Insérer</button>
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
    	});/*
		$(this).find('.myproductpose').each(function(){
				//id_item=$(this).data().id;
				//qty= ($('#qty-'+id_item).val());
				total_ht+=(( $(this).data().pose  ));
				total_ttc+=(( $(this).data().posettc));

    		});*/
		});
		var tva_remise=parseFloat($('#tva_remise').val()) || 0;
		var total_remise=parseFloat($('#total_remise').val()) || 0;

		//var loi=parseFloat($('#loi').val()) || 0;
		var total_loi=parseFloat($('#total_loi').val()) || 0;
		var p_tva_loi=parseFloat($('#tva_loi').val()) || 0;

		var loi = total_loi / (1+(p_tva_loi*0.01));
		$('#loi').val(loi.toFixed(2));
		var tva_loi= total_loi-loi ;

		var remise = total_remise / (1+(tva_remise*0.01));
		$('#remise').val(remise.toFixed(2));

		$("#total_ht").val(total_ht-remise    + loi);
		total_tva = total_ttc-total_ht - (remise*tva_remise*0.01)    + tva_loi ;
	    $('#total_tva').val(total_tva);
		total_ttc=total_ttc-total_remise   +total_loi;
		$('#total_ttc').val(total_ttc);

		var aide=parseFloat($('#aide').val()) || 0;
		var acompte=parseFloat($('#acompte').val()) || 0;

 		var net=parseFloat(total_ttc - aide  - acompte);
		$('#net').val(net);
		update_totals();
	}

	function check_finances(){
		if($('#modalite').val().includes('Chèque')  || $('#modalite').val()==''){
			$('#finances').hide('slow');
		}else{
			$('#finances').css('display','contents');
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
	}

	function total_prod(){
		var total_prod=parseFloat($('#price').val()) * parseInt($('#qty').val()) ;
		$('#total_prod').val(total_prod);
	}



	function add_article(){

	var _token = $('input[name="_token"]').val();
	var modele= parseInt($("#modele").val());
	var prix=	parseFloat($('#prix').val());
	var note=	$('#note').val();
	var tva =	(prix / 1.055) * 0.055
	var prix_ht = (prix - tva).toFixed(2);
	var qte=	parseInt($('#qte').val());
	var total=parseFloat($('#total').val());
	var quote=	parseInt($('#quote').val());
	var groupe = $('#groupe_couleur').val();
	var cintrage = $('#cintrage').is(":checked") ? 1 : 0;

	var tva=5.5;
	$('#tva_remise').val(tva);

	var cintrage_text='';
	var	groupe_text='(Groupe '+groupe+')';

	if(cintrage){
		cintrage_text='(avec cintrage)';
	}

	var product_text= $('#type option:selected').text()+' '+$('#genre option:selected').text()+' - Couleur: '+$('#couleur option:selected').text()+ groupe_text+' - Dimensions [H: '+$('#hauteur').val()+'cm * L: '+$('#largeur').val()+'cm]'+ cintrage_text;

	$.ajax({
	url: "{{ route('add_article') }}",
	method: "POST",
	async:false,
	data: {modele:modele,prix:prix,prix_ht:prix_ht,note:note,qte:qte,texte:product_text,total:total,cintrage:cintrage, quote:quote,_token:_token},
	success: function (data) {

			item_id=data;
			var row='<tr class="myproduct product bg-lightgrey tr-prod" id="row-'+modele+'"><td class="myproducttd"  data-prix="'+prix+'" data-prixht="'+prix_ht+'" data-id="'+modele+'"  ><b>'+product_text+ '<br>'+note+'</b></td><td>'+prix+' €</td><td><input type="number" step="1" min="1" class="number" value="'+qte+'" onchange="calcul();save_article_qty(this,'+data+','+prix+')"  id="qty-'+modele+'"/></td><td><input  step="0.5" min="5.5" type="number" step="1" min="1" class="number bg-transparent" readonly value="5.5"/> %</td><td><input id="total-'+data+'" type="number" readonly class="total-prod number" value="'+total+'"/> €</td><td><button id="delete_item"   class="btn-sm btn-danger" onclick="delete_item('+modele+','+item_id+')"><i class="fas fa-minus "  ></i></td></tr>';

			$('#list-prods').append(row);
			$('#add-prod').modal('hide');

			init();

	}
	});

	calcul();

}

	function delete_item(product,item){
		if(!confirm("Êtes vous sûres?")) {
    	return false;
  		}

		var _token = $('input[name="_token"]').val();

		$.ajax({
			url: "{{ route('delete_article') }}",
			method: "POST",
			data: {item:item,_token:_token},
			success: function (data) {
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
	var tva_remise=	$('#tva_remise').val();
	//var remise=  total_remise- (total_remise*tva_remise*0.01);
	var remise=$('#remise').val();
	var aide=	$('#aide').val();
	var type_aide=	$('#type_aide').val();
	var acompte=	$('#acompte').val();
	var net=	$('#net').val();
	var loi=	$('#loi').val();
	var total_loi=	$('#total_loi').val();


	$.ajax({
		url: "{{ route('update_totals') }}",
		method: "POST",
		data: {total_ht:total_ht,total_tva:total_tva,total_ttc:total_ttc,total_remise:total_remise,remise:remise,invoice:invoice,aide:aide,type_aide:type_aide,net:net,acompte:acompte,tva_remise:tva_remise,loi:loi,total_loi:total_loi, _token:_token},
		success: function (data) {
		}
	});

	}


	function pricing(){
		var _token = $('input[name="_token"]').val();
		var genre= $("#genre").val();
		var type= $("#type").val();
		var couleur= $("#couleur").val();
		var largeur= parseInt($("#largeur").val());
		var hauteur= parseInt($('#hauteur').val());
		var qte= parseInt($('#qte').val());
		var cintrage = $('#cintrage').is(":checked") ? 1 : 0;
		var groupe_couleur =  $("#groupe_couleur").val();
		if(largeur>0 && hauteur>0){
			$.ajax({
				url: "{{ route('pricing') }}",
				method: "GET",
				data: {genre:genre,type:type,couleur:couleur,largeur:largeur,hauteur:hauteur,cintrage:cintrage,groupe_couleur:groupe_couleur,_token:_token},
				success: function (data) {

					if(parseFloat(data.prix)>0)
					{
						$('.text-danger').html('');
						$("#modele").val(data.id);
						$("#insert").prop('disabled',false);

						$("#prix").val(data.prix);
						var total = parseFloat(data.prix) * qte;
						$("#total").val(total);

					}
					else{
						$('.text-danger').html('<b class="pb-2"> Modèle non trouvé, vérifiez les données insérées</b>');
						$('#prix').val(0);
						$('#total').val(0);
						$("#insert").prop('disabled',true);
					}
					calcul();
				}
			});
		}
	}



	function save_article_qty(elm,article,price){
		var _token = $('input[name="_token"]').val();
		var qty=$(elm).val();
		//var qty=$('#qty-pose-'+article).val(qty);
		var total= (qty*price).toFixed(2) ;
		$('#total-'+article).val(total);

		$.ajax({
		url: "{{ route('save_article_qty') }}",
		method: "POST",
		data: {article:article,qty:qty,total:total, _token:_token},
		success: function (data) {

		}
		});
	}
</script>



@endsection

