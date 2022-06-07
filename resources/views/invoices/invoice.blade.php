
@extends('layouts.pdf')
 
@section('content')
	<style>


		body{
			font-family:'Nunito';
			padding:10px 20px 0px 20px;
			color:#0e334f;
		}		
		.container{
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
				<span><b>Tel :</b> 09.77.59.57.42</span><br>
				<span><b>Mail :</b> contact@groupe-her.com</span><br><br>
			</div>
			<div style="width:50%;float:left;">
				<b>Client:</b> {{ $invoice->customer()->first()->civility }} {{ $invoice->customer()->first()->name }} {{ $invoice->customer()->first()->lastname }}<br>			
				<b>Adresse de livraison</b><br>
				<span>M. TANGUY Joseph et Mme TANGUY Julienne</span><br>
				<span>10 Rue de la République</span><br>
				<span>31390, MARQUEFAVE</span><br>
				<span>France</span><br>
			</div>
		</div>
		<div style="width:100%;">
			<b>Facture N° {{ $reference }} </b>
		</div>
		<div style="width:100%;">
			<div style="width:50%;float:left;">
				Date d'émission : {{ $date_facture }}
			</div>
			<div style="width:50%;float:left;">
				Règlement: par chèque
			</div>
		</div>


	</div>
@endsection
