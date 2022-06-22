
@extends('layouts.pdf')
 
 @section('content')
	<style>
		 body{
			 font-family:'Nunito';
			 padding:0px 20px 0px 20px;
			 color:#0e334f;
		 }		
		 .container{
			 font-size:11px;
		 }
 		.th-products{
			background-color:#f07f32;color:white;padding:5px 20px;
			letter-spacing:2px;
			text-align:center;
			height:40px!important;
		}
		.product td{
			padding-top:4px;
			padding-bottom:4px;
			text-align:center;

		}

		.totals{
			float:right;
			width:180px;
			font-weight:bold;
			background-color:#f6f6f6;
			border:1px solid #f07f32;
		}
		.totals td{
			padding:5px 2px 2px 12px;
		}
		footer {
            position: fixed; 
            bottom: -60px; 
            left: 0px; 
            right: 0px;
            height: 100px; 
			text-align: center;
			font-size:11px;
		}
		.clearfix {
  			overflow: auto;
		}
		.clearfix::after {
  			content: "";
  			clear: both;
  			display: table;
		}

		 .financement td{
			text-align:center;
		}

		.financement{			
			background-color:#f6f6f6;
			border:1px solid grey;	
			padding:5px 5px;
			margin-top:10px;		
		}
	</style>
 	<table>
		<tr>
			<td><img src="{!! public_path('img/logo.png')!!}"  width="120" style="margin-right:20px"></img></td><td><img src="{!! public_path('img/qualibat.jpg')!!}"  width="120"></img></td><td><img src="{!! public_path('img/qualisol.jpg')!!}"  width="120"></img></td><td><img src="{!! public_path('img/qualipv.jpg')!!}"  width="120"></img></td><td><img src="{!! public_path('img/qualipac.jpg')!!}"  width="120"></img></td>
		</tr>
	</table>
	<div class="container">
		<div style="width:100%;">
			<div style="width:50%;float:left;">
				 <span><b>SARL GROUPE H.E.R</b></span><br>
				 <span>7 Avenue Didier Daurat</span><br>
				 <span>31700 BLAGNAC</span><br>
				 <span><b>Tél :</b> 09.77.59.57.42</span><br>
				 <span><b>Email :</b> contact@groupe-her.com</span><br><br>
				 <b>Adresse de livraison:</b><br>
				 <span>{{ $invoice->delivery_address ?? $invoice->customer()->first()->delivery_address }}</span><br>
				 <span>{{ $invoice->delivery_postal ?? $invoice->customer()->first()->delivery_postal }}, {{ $invoice->delivery_city ?? $invoice->customer()->first()->delivery_city }} - {{ $invoice->delivery_country ?? $invoice->customer()->first()->delivery_country }}</span><br>
			</div>
			<div style="width:50%;float:left;height:100px">
				<b>Client:</b> {{ $invoice->customer()->first()->civility }}  {{ $invoice->customer()->first()->lastname }} {{ $invoice->customer()->first()->name }}<br>			
				 <span style="margin-left:35px">{{ $invoice->customer()->first()->civility2 }} {{ $invoice->customer()->first()->lastname2 }} {{ $invoice->customer()->first()->name2 }}</span><br>			
				 <b>Adresse:</b> <span>{{ $invoice->customer()->first()->address }}</span><br>
				 <span>{{ $invoice->customer()->first()->postal }}, {{ $invoice->customer()->first()->city }} - {{ $invoice->customer()->first()->country }}</span><br>
				 <span>@if( $invoice->customer()->first()->phone!='')<b>Tél :</b> {{ $invoice->customer()->first()->phone }}    @endif @if( $invoice->customer()->first()->email!='') <b>Email:</b> {{ $invoice->customer()->first()->email }} @endif</span>
				 <br>
			</div>
		 </div>
		 <br>
		<div style="width:100%;">
			 <b style="font-size:22px;color:#f07f32">Facture N° : {{ $reference }} </b><br>
			 Créé le : {{date('d/m/Y', strtotime($invoice->created_at))}}
		</div>
		<br>
		<div style="width:100%;height:30px">
			<div style="width:50%;float:left;">
				 @if( $invoice->logement!='')<b>Logement :</b>{{ $invoice->logement }}    @endif @if($invoice->surface!='')<b>Surface chauffée (m²) :</b>   {{ $invoice->surface }}<br>@endif
				 <b>Date de visite technique préalable :</b>   {{ $date_facture }}<br>
			</div>
		</div>
		<br>


		<table class="tab-products" style="min-height:150px;width:100%;margin-top:20px;margin-bottom:20px">
			<thead class="th-products">
				<tr>
					<th style="width:45%">PRODUIT</th><th style="width:8%">PRIX U</th><th style="width:8%">QTÉ</th><th style="width:8%">TVA</th><th style="width:14%">TOTAL</th>
				</tr>
			</thead>
			<tbody >
				<tr class="product " >
					@foreach($items as $item)
						@php 
							$product=\App\Models\Product::find($item->product); 
							$total_prod=floatval($product->prix) * intval($item->qty);
						@endphp
						<tr class="product "  >
							<td>{{$product->name}}<br>{!!nl2br($product->description)!!}</td><td>{{$product->prix}} €</td><td>{{$item->qty}}</td><td>{{$item->tva}} %</td><td>{{$total_prod}} €</td>
						</tr>
					@endforeach											
				</tr>
				@if($invoice->type_aide!='')
				<!--<tr class="product" style="color:#f07f32">
					<td>{{$invoice->type_aide}}</td><td>- {{$invoice->aide}}  €</td><td>1</td><td></td><td>- {{$invoice->aide}}  €</td>
				</tr>	-->		
				@endif
				@if($invoice->remise>0)
					<tr class="product" style="color:#f07f32">
						<td>Remise</td><td> {{$invoice->remise}}  €</td><td style="text-align:center">1</td><td> {{$invoice->total_remise ?? '5.5'}} %</td><td>{{$invoice->total_remise}} €</td>
					</tr>
				@endif
			</tbody>
		</table>

		<div style="width:100%;">
			<div style="width:65%;float:left;font-size:9px">
				{!!nl2br($invoice->description) !!}
				<div class="clearfix"></div>
				@if($invoice->chaudiere!='')
					Dépose de la chaudière individuelle autre qu'à condensation : <b>Chaudière à {{$invoice->chaudiere}}</b><br>
				@endif
				Contrat d'entretien et vérification de l'installation de la pompe à chaleur AIR/EAU pendant 1 an avec déplacement inclus
			</div>
			<div style="width:35%;float:left;">
				<table class="totals">
				<tr><td colspan="2">Sous Total</td><td>{{$invoice->total_ht}} €</td></tr>
				<tr><td colspan="2">Total TVA</td><td>{{$invoice->total_tva}} €</td></tr>
				<tr><td colspan="2">Total TTC</td><td>{{$invoice->total_ttc}} €</td></tr>
				@if($invoice->aide>0)
				<tr style="color:#f07f32"><td colspan="2" style=";font-size:9px;max-width:90px;">Montant Estimatif<br>{{$invoice->type_aide}}</td><td>{{$invoice->aide}} €</td></tr>
				@endif
				<tr><td colspan="2">Net à payer</td><td>{{intval($invoice->net)}} €</td></tr>
				</table>
			</div>
		</div>
		<div class="clearfix"></div>
		<div style="width:100%;">
			<div style="width:65%;float:left;font-size:9px;padding-top:30px">
				@if($invoice->modalite!='')
					<b>Règlement par :</b> {{ $invoice->modalite }}
				
					@if($invoice->modalite!='Chèque')
						<table class="financement">
							<tr><td>Montant Financé :</td><td style="padding-right:20px;font-weight:bold;">{{$invoice->montant_finance}} €</td><td>Montant mensuel<br>de l'assurance :</td><td style="font-weight:bold;">{{$invoice->montant_assurance}} €</td></tr>
							<tr><td>Report 1ère échéance :</td><td style="padding-right:20px;font-weight:bold;">{{$invoice->report_echeance}} jours</td><td>Taux nominal :</td><td style="font-weight:bold;">{{$invoice->taux_nominal}} %</td></tr>
							<tr><td>Nombre de mensualités :</td><td style="padding-right:20px;font-weight:bold;">{{$invoice->mensualites}}</td><td>TAEG :</td><td style="font-weight:bold;">{{$invoice->taeg}} %</td></tr>
							<tr><td>Montant mensuel<br>sans assurance :</td><td style="padding-right:20px;font-weight:bold;">{{$invoice->montant_mensuel}} €</td><td>Solde de la pose :</td><td style="font-weight:bold;">{{$invoice->pose}} €</td></tr>
						</table>
					@endif
				@endif
			</div>
			<div style="width:35%;float:left;font-weight:bold;padding-top:30px">


			</div>
		</div>
		<div class="clearfix"></div>


	</div>

	<footer>
		SARL au capital de 50 000 euros<br>
		SIRET 85156645500024 - R.C.S TOULOUSE - NAF 4321A<br>
		TVA intracommunautaire : FR95851566455<br>
	</footer>
 @endsection
 