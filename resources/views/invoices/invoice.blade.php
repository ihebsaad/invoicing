
@extends('layouts.pdf')

@section('content')

    <script type="text/php">

    if (isset($pdf)) {
     //Shows number center-bottom of A4 page with $x,$y values
        $x = 520;  //X-axis i.e. vertical position
        $y = 820; //Y-axis horizontal position
        $text = "Page {PAGE_NUM} / {PAGE_COUNT}";  //format of display message
        $font =  $fontMetrics->get_font("helvetica", "bold");
        $size = 8;
        $color = array(0,0,0);
        $color2 = array(136,136,136);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
        $pdf->page_text(30, $y,'{{$type}} N° {{$reference}}' , $font, $size, $color, $word_space, $char_space, $angle);
    }

    </script>
   <style>
	   @font-face {
		   font-family: 'Nunito';
	   }/*
	   .vtop{
			vertical-align:top;
		}*/
	   .text-right{
			text-align:right;
	   }
		.body{
			/*font-family:'Nunito';*/
			padding:0px 10px 0px 10px;
			color:#0e334f;
			font-weight:normal;
		}
		.container{
			font-size:11px;
		}
		.tab-products{
		   border-bottom:1px solid #f07f32;
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
		   max-width: 250px;
		   /*overflow: hidden;
		   text-overflow: ellipsis;
		   white-space: nowrap;*/

	   }
	   .text{
		   font-size:9px!important;
		   font-weight:normal!important;
		   text-align:left!important;
			font-family:halvetica,sans-serif!important;
	   }
	   .totals{
		   float:right;
		   width:180px;
		   font-weight:bold;
		   background-color:#f6f6f6;
		   border:1px solid #f07f32;
		   /*page-break-after: always; */
		   page-break-inside: avoid;
	   }
	   .totals td{
		   padding:5px 2px 2px 12px;
	   }
	   footer {
		   position: fixed;
		   bottom: -120px;
		   left: 0px;
		   right: 0px;
		   height: 100px;
		   text-align: center;
		   font-size:10px;
		   line-height:11px;
		   font-weight:normal;
		   page-break-inside: avoid;
	   }
	   header {
		   position: fixed;
		   top:0;
		   left: 0px;
		   right: 0px;
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
		   vertical-align:middle;

	   }
	   .financement{
		   background-color:#f6f6f6;
		   border:1px solid grey;
		   padding:5px 5px;
		   margin-top:10px;
	   }
	   .pagenum:before {
		   content: counter(page);
	   }
	   .page{
	   counter-reset: page;
	   }
	   /* coupons */
	   .pagebreak { page-break-before: always; } /* page-break-after works, as well */
	   .conditions{
		   width:100%;
		   font-size:9px!important;
		   line-height:9px!important;
		   font-weight:normal!important;
		   color:#000!important;
	   }
	   .coupon{
		   width:100%;
		   font-size:9px!important;
		   line-height:9px!important;
		   font-weight:normal!important;
		   color:#000!important;
	   }
	   .formulaire{
		   width:100%;
		   font-size:10px!important;
		   line-height:10px!important;
		   font-weight:normal!important;
		   color:#000!important;
	   }
	   .text-center{
		   text-align:center;
	   }
	   	body { counter-increment: pageplus1, page; counter-reset: pageplus1 1; }

		.pageplus1:after {
		content: counter(pageplus1);
		}
   </style>
   <section class="body">

	<table style="margin-top:-25px">
	   <tr>
		   <td><img src="{!! public_path('img/logo.png')!!}"  width="170" style="margin-right:50px"></img></td><td style=" "><img src="{!! public_path('img/edf.jpg')!!}"  width="120" style="margin-right:40px;margin-top:30px" ></img><img src="{!! public_path('img/bat.png')!!}"  width="60" style="margin-right:50px" ></img></td><td><img src="{!! public_path('img/sol.png')!!}"  width="80" style=""></img><br><img src="{!! public_path('img/pv.png')!!}"  width="80" style=""></img></td><td><img src="{!! public_path('img/pac.png')!!}"  width="80"  ></img><br><img src="{!! public_path('img/bois.png')!!}"  width="80"></img></td>
	   </tr>
   </table>
   <div class="container">
	   <table style="width:100%;">
		   <tr>
			   <td style="width:50%;">
				   <span><b>SARL GROUPE H.E.R ENR</b></span><br>
				   <span>11 RUE KARL MARX</span><br>
				   <span>82000 MONTAUBAN</span><br>
				   <span><b>Tél :</b> 09.77.59.57.42</span>  <span><b>Email :</b> contact@groupe-her.com</span><br><br>
				   <div style="font-size:9px">
				   		SARL au capital de 50 000 euros<br>
	   					SIRET 851 566 455 00032  - R.C.S MONTAUBAN - NAF 3511Z<br>
	   					TVA intracommunautaire : FR95851566455<br>
					</div><br>
					<b>Adresse du chantier:</b><br>
				   <span>{{ $invoice->delivery_address ?? $invoice->customer()->first()->delivery_address  ?? '' }}</span><br>
				   @if($invoice->delivery_postal!='')<span>{{ $invoice->delivery_postal ?? $invoice->customer()->first()->delivery_postal }}, {{ $invoice->delivery_city ?? $invoice->customer()->first()->delivery_city }} - {{ $invoice->delivery_country ?? $invoice->customer()->first()->delivery_country }}</span><br>@endif
			   </td>
			   <td style="width:50%;">
				   <b>Client:</b> {{ $invoice->customer()->first()->company  ?? '' }} {{ $invoice->customer()->first()->civility  ?? '' }} {{ $invoice->customer()->first()->lastname  ?? '' }} {{ $invoice->customer()->first()->name  ?? '' }} <br>
				   @if(isset($invoice->customer()->first()->lastname2))<span style="margin-left:35px">{{ $invoice->customer()->first()->civility2  ?? '' }} {{ $invoice->customer()->first()->lastname2  ?? '' }} {{ $invoice->customer()->first()->name2  ?? '' }}</span><br>@endif
				   <b>Adresse:</b> <span>{{ $invoice->customer()->first()->address  ?? '' }}</span><br>
				   @if(isset($invoice->customer()->first()->postal)) <span>{{ $invoice->customer()->first()->postal  ?? ''}}, {{ $invoice->customer()->first()->city  ?? '' }} - {{ $invoice->customer()->first()->country  ?? ''}}</span><br>@endif
				   <span>@if( isset($invoice->customer()->first()->phone))<b>Tél :</b> {{ $invoice->customer()->first()->phone }}    @endif @if( isset($invoice->customer()->first()->email)) <b>Email:</b> {{ $invoice->customer()->first()->email }} @endif</span>
				   <br>
			   </td>
		   </tr>
	   </table>
	   <table style="width:100%;margin-top:5px;margin-bottom:5px">
		   <tr>
			   <td style="width:50%;">
				   @if( $invoice->logement!='')<b>Logement :</b>{{ $invoice->logement }}    @endif  @if($invoice->surface!='')<b>Surface @if($invoice->menuiserie==-7)à isoler @else chauffée @endif (m²) :</b>   {{ $invoice->surface }}<br>@endif
				   <b>Date de visite technique préalable :</b>   {{ $date_facture }}
			   </td>
			   <td style="width:50%;">
				   <b style="font-size:22px;color:#f07f32">{{$type}} N° : {{ $reference }} </b><br>
				   Créé le : <b>{{date('d/m/Y', strtotime($invoice->created_at))}}</b>    Conseiller: <b>{{$par}}</b>
			   </td>
		   </tr>
	   </table>


	   <table class="tab-products" style="min-height:150px;width:100%;margin-top:5px;margin-bottom:5px">
		   <thead class="th-products">
			   <tr>
				   <th style="width:40%">Désignation</th><th style="width:6%">Qté</th><th style="width:8%">P.U HT</th><th style="width:10%">Montant HT</th><th style="width:6%">TVA</th><th style="width:10%">Montant TTC</th>
			   </tr>
		   </thead>
		   <tbody >
			   <tr class="product " >
				   @foreach($items as $item)
				  		@php $product=\App\Models\Product::withTrashed()->find($item->product); @endphp

				   		@if(isset($product))
					   		@php
								$total_prod_ht=floatval($product->prix_ht) * intval($item->qty);
								$total_prod_ttc=floatval($product->prix) * intval($item->qty);
					   		@endphp

							<tr class="product"  >
								<td class="text" ><b>{{$product->name}}<br>{!! nl2br($product->description) !!}</b></td><td>{{$item->qty}}</td><td>{{$product->prix_ht}} €</td><td>{{$total_prod_ht}} €</td><td>{{$item->tva}} %</td><td>{{$total_prod_ttc}} €</td>
							</tr>
							@if($product->pose > 0)
								<tr class="product"  >
									<td class="text" ><i>Pose {{$product->name}}</i></td><td>{{$item->qty}}</td><td>{{$product->pose}} €</td><td>{{$product->pose * intval($item->qty) }} €</td><td>{{$product->tva_pose}} %</td><td>{{$product->pose_ttc * intval($item->qty)}} €</td>
								</tr>
							@endif
						@else
							<tr class="product"  >
								<td class="text" >{!! nl2br($item->description) !!}</td><td>{{$item->qty}}</td><td  >{{$item->price_ht}} €</td><td>{{ floatval($item->price_ht) * intval($item->qty) }} €</td><td>{{$item->tva}} %</td><td>{{  floatval($item->price_ttc) * intval($item->qty)  }} €</td>
							</tr>
						@endif
				   @endforeach
			   </tr>

			   @if($invoice->remise>0)
				   <tr class="product" style="color:#f07f32">
					   <td>Remise GROUPE HER ENR</td><td style="text-align:center"></td><td ></td><td> {{$invoice->remise}}  €</td><td> {{ $invoice->tva_remise ?? 0 }} %</td><td>{{$invoice->total_remise ?? 0}} €</td>
				   </tr>
			   @endif
		   </tbody>
	   </table>

	   <div style="width:100%;page-break-inside: avoid;">
		   <div style="width:67%;float:left;font-size:9px">
		   		@if($invoice->aide_cee>0)
			   		<div style="font-size:11px">Tout ou partie des travaux relatifs à ce devis ou bon de commande sont éligibles à une prime d'un montant de {{number_format($invoice->aide,0,',',' ')}} euros dont EDF (SIREN 552 081 317) est à l'origine dans le cadre du dispositif des Certificats d'Economies d'Energie. Le montant de cette prime ne pourra être révisé à la baisse qu'en cas de modification du volume de Certificats d'Economies d'Energie attaché à l'opération ou aux opérations d'économies d'énergie ou de la situation de précarité énergétique et ce, de manière proportionnelle. Dans le cadre de la réglementation un contrôle qualité des travaux sur site ou par contact pourra être demandé. Un refus de ce contrôle sur site ou par contact via EDF ou un prestataire d'EDF conduira au refus de cette prime par EDF.</div><br>
			   	@endif
			   {!!nl2br($invoice->description) !!}
			   <div class="clearfix"></div>
			   @if($invoice->chaudiere!='' && $invoice->chaudiere!='Autre')
				   Dépose de la chaudière individuelle: <b> Chaudière à {{$invoice->chaudiere}}</b><br>
			   @endif
				<b>Délai de Livraison : 90 jours</b><br>
				<b>Durée de validité du devis : 15 jours</b>
		   </div>
		   <div style="width:33%;float:left;">
			   <table class="totals">
			   <tr><td colspan="2">Total HT</td><td class="text-right">{{number_format($invoice->total_ht,2,',',' ')}} €</td></tr>
			   <tr><td colspan="2">Total TVA</td><td class="text-right">{{number_format($invoice->total_tva,2,',',' ')}} €</td></tr>
			   <tr><td colspan="2">Total TTC</td><td class="text-right">{{number_format($invoice->total_ttc,2,',',' ')}} €</td></tr>
			   @if($invoice->aide>0)
			   		@if($invoice->aide_cee>0)
			   			<tr style="color:#f07f32"><td colspan="2" style=";font-size:9px;max-width:90px;">- Prime CEE EDF<br><small>  Siren EDF 552 081 317</small></td><td class="text-right">- {{number_format($invoice->aide_cee,2,',',' ')}} €</td></tr>
			   		@endif
			   		@if($invoice->aide_renov>0)
						<tr style="color:#f07f32"><td colspan="2" style=";font-size:9px;max-width:90px;">- Montant Estimatif<br>Prime Renov</td><td class="text-right">- {{number_format($invoice->aide_renov,2,',',' ')}} €</td></tr>
			   		@endif
			   @endif
			   @if($invoice->acompte>0)
			   <tr style="color:#f07f32"><td colspan="2" >Acompte</td><td class="text-right">{{number_format($invoice->acompte,2,',',' ')}} €</td></tr>
			   @endif
			   <tr><td colspan="2">Net à payer</td><td class="text-right">{{number_format($invoice->net,2,',',' ')}} €</td></tr>
			   </table>
		   </div>
	   </div>
	   <div class="clearfix"></div>
	   <div style="width:100%;page-break-inside: avoid;">
		   <div style="width:55%;float:left;font-size:9px;padding-top:10px">
			   @if($invoice->modalite!='')
				   <b>Règlement par :</b> {{ $invoice->modalite }}

				   @if(str_contains($invoice->modalite, 'Financement') )
					   <table class="financement">
						   <tr><td>Montant Financé :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant_finance,2,',',' ')}} €</td><td>Montant mensuel<br>de l'assurance :</td><td style="font-weight:bold;" class="text-right">{{number_format($invoice->montant_assurance,2,',',' ')}} €</td></tr>
						   <tr><td>Report 1ère échéance :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{$invoice->report_echeance}} jours</td><td>Taux débiteur :</td><td style="font-weight:bold;" class="text-right">{{$invoice->taux_nominal}} %</td></tr>
						   <tr><td>Nombre de mensualités :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{$invoice->mensualites}}</td><td>TAEG :</td><td style="font-weight:bold;" class="text-right">{{$invoice->taeg}} %</td></tr>
						   <tr><td>Montant mensuel<br>sans assurance :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant_mensuel,2,',',' ')}} €</td><td>Solde de la pose :</td><td style="font-weight:bold;" class="text-right">{{number_format($invoice->pose,2,',',' ')}} €</td></tr>
					   </table>
				   @endif
				   @if( str_contains($invoice->modalite, 'Chèques') || $invoice->modalite=='Chèque')
					   <table class="financement">
							@if($invoice->modalite=='4 Chèques' || $invoice->modalite=='3 Chèques' || $invoice->modalite=='2 Chèques' || $invoice->modalite=='Chèque' )
					 		<tr><td class="vtop">Montant:</td><td class="text-right vtop" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant1,2,',',' ')}} €</td><td class="vtop">Note:</td><td class="text vtop">{{ $invoice->note1 }}</td></tr>
							@endif
							@if($invoice->modalite=='4 Chèques' || $invoice->modalite=='3 Chèques'|| $invoice->modalite=='2 Chèques'   )
							<tr><td class="vtop">Montant 2:</td><td class="text-right vtop" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant2,2,',',' ')}} €</td><td class="vtop">Note 2:</td><td class="text vtop">{{ $invoice->note2 }}</td></tr>
							@endif
							@if($invoice->modalite=='4 Chèques' || $invoice->modalite=='3 Chèques' )
							<tr><td class="vtop">Montant 3:</td><td class="text-right vtop" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant3,2,',',' ')}} €</td><td class="vtop">Note 3</td><td class="text vtop">{{ $invoice->note3 }}</td></tr>
							@endif
							@if($invoice->modalite=='4 Chèques'   )
							<tr><td class="vtop">Montant 4:</td><td class="text-right vtop" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant4,2,',',' ')}} €</td><td class="vtop">Note 4:</td><td class="text vtop">{{ $invoice->note4 }}</td></tr>
							@endif
					   </table>
				   @endif
			   @endif
		   </div>

		   <div style="width:45%;float:left;font-weight:bold;padding-top:15px">
		   		@if($type =='Devis')
					@php
						$lieu=\App\Models\Signature::where('quote',$invoice->id)->first()->lieu ?? '';
						$date=\App\Models\Signature::where('quote',$invoice->id)->first()->date ?? '';
						$signature=\App\Models\Signature::where('quote',$invoice->id)->first()->signature ?? '';
					@endphp
					<table style="width:100%;font-size:10px">
						<tr rowspan="2"><td>Fait à</td>@if($lieu !='')<img src="{{$lieu}}" width= '60'     height='auto'/>@endif<td></td><td>Le</td>@if($date !='')<td><img src="{{$date}}" width= '60'     height= 'auto'/>@endif</td></tr>
						<tr><td colspan="4"> J'ai lu et j'accepte les Conditions Générales de Ventes</td></tr>
						<tr><td colspan="4">Signature précédée de la mention "Bon pour accord"</td></tr>
					</table>
					<div style="border:1px solid grey;width:100%;height:120px">
						@if($signature !='')<img style="margin-left:15px;margin-top:15px;" src="{{$signature}}"  width='200'     height= ''/>@endif
					</div>
				@endif
		   </div>
	   </div>
	   <div class="clearfix"></div>


   </div>
   </section>
@include('invoices.cgv2')
@endsection
