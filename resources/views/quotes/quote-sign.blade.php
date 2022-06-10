
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
			padding-top:8px;
			padding-bottom:8px;
			text-align:center;
		}
		.totals{
			margin-top:40px;
			float:right;
			width:180px;
			font-weight:bold;
			background-color:#f6f6f6;
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
	</style>
 
	<img src="{!! public_path('img/logo.png')!!}"  width="180"></img>
	<div class="container">
		<div style="width:100%;">
			<div style="width:50%;float:left;">
				 <span><b>SARL GROUPE H.E.R</b></span><br>
				 <span>7 Avenue Didier Daurat</span><br>
				 <span>31700 BLAGNAC</span><br>
				 <span><b>Tél :</b> 09.77.59.57.42</span><br>
				 <span><b>Email :</b> contact@groupe-her.com</span><br><br>
			</div>
			<div style="width:50%;float:left;">
				 <b>Client:</b> {{ $quote->customer()->first()->civility }} {{ $quote->customer()->first()->name }} {{ $quote->customer()->first()->lastname }}<br>			
				 <b>Adresse de livraison:</b><br>
				 <span>{{ $quote->customer()->first()->address }}</span><br>
				 <span>{{ $quote->customer()->first()->postal }}, {{ $quote->customer()->first()->city }}</span><br>
				 <br>
			</div>
		 </div>
		<div style="width:100%;font-size:22px;color:#f07f32">
			 <b>Facture N° : {{ $reference }} </b>
		</div>
		<div style="width:100%;">
			<div style="width:50%;float:left;">
				 <b>Date d'émission :</b>   {{ $date_facture }}
			</div>
			<div style="width:50%;float:left;">
				 <b>Règlement par :</b> {{ $quote->modalite }}
			</div>
		</div>
		<br>
		<div style="width:100%;">
			{!!nl2br($quote->description) !!}
		</div>

		<table class="tab-products" style="min-height:150px;width:100%;margin-top:20px;margin-bottom:20px">
			<thead class="th-products">
				<tr>
					<th style="width:45%">PRODUIT</th><th style="width:8%">PRIX U</th><th style="width:8%">QTÉ</th><th style="width:8%">TVA</th><th style="width:14%">TOTAL</th>
				</tr>
			</thead>
			<tbody >
				<tr class="product ">
					@foreach($items as $item)
						@php 
							$product=\App\Models\Product::find($item->product); 
							$total_prod=floatval($product->prix) * intval($item->qty);
						@endphp
						<tr class="product ">
							<td>{{$product->name}}</td><td>{{$product->prix}} €</td><td>{{$item->qty}}</td><td>{{$item->tva}} %</td><td>{{$total_prod}} €</td>
						</tr>
					@endforeach								
								
				</tr>				
			</tbody>
		</table>


		<table class="totals">
			<tr><td colspan="2">Sous Total</td><td>{{$quote->total_ht}} €</td></tr>
			<tr><td colspan="2">Total TVA</td><td>{{$quote->total_tva}} €</td></tr>
			@if($quote->remise>0)
			<tr><td>Remise</td><td>{{$quote->remise}}%</td><td>{{$quote->total_remise}} €</td></tr>
			@endif
			<tr><td colspan="2">Total</td><td>{{$quote->total_ttc}} €</td></tr>
		</table>
		<div style="width:100%;">
			<br>
		</div>
		<div style="width:100%;">
		
			@if(\App\Models\Signature::where('quote',$quote->id)->exists())
				@php 
					$url_img=\App\Models\Signature::where('quote',$quote->id)->first()->user_image;
				@endphp
				<b>Signature:</b><br>
				<img src="{{$url_img}}" width= '160'     height= ''/>
			@endif
	 	</div>


	</div>

	<footer>
		SARL au capital de 50 000 euros<br>
		SIRET 85156645500024 - R.C.S TOULOUSE - NAF 4321A<br>
		TVA intracommunautaire : FR95851566455<br>
	</footer>
 @endsection
 