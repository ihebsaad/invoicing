
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
		   width:200px;
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
		   text-align:left;
		   vertical-align:middle;

	   }
	   .financement{
		   background-color:#f6f6f6;
		   border:1px solid grey;
		   padding:5px 5px;
		   margin-top:10px;
		   width:80%;
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
		.checkboxes label {
		display: inline-block;
		padding-right: 10px;
		white-space: nowrap;
		}
		.checkboxes input {
		vertical-align: middle;
		}
		.checkboxes label span {
		vertical-align: middle;
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
				   		SARL au capital de 300 000 euros<br>
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
				   @if( $invoice->logement!='')<b>Logement :</b>{{ $invoice->logement }}    @endif  @if($invoice->surface!='')<b>Surface @if($invoice->menuiserie== -6 || $invoice->menuiserie== -60 || $invoice->menuiserie==  -61 || $invoice->menuiserie==  -62 || $invoice->menuiserie==  -63) à isoler @elseif($invoice->menuiserie  -1 || $invoice->menuiserie  -2 || $invoice->menuiserie  -5 ) chauffée @endif (m²):</b>   {{ $invoice->surface }}<br>@endif
				   @if( $invoice->surface_maison!='')Surface de la maison : {{$invoice->surface_maison}}  (m²)<br> @endif
				   <b>Date de visite technique préalable :</b>   {{ $date_facture }}
			   </td>
			   <td style="width:50%;">
				   <b style="font-size:22px;color:#f07f32">{{$type}} N° : {{ $reference }} </b><br>
				   Créé le : <b>{{date('d/m/Y', strtotime($invoice->created_at))}}</b>    Conseiller: <b>{{$par}}</b>
			   </td>
		   </tr>
	   </table>
		@php
			$isolation=false;
			if($invoice->menuiserie==-6 || $invoice->menuiserie==-61 || $invoice->menuiserie==-62 || $invoice->menuiserie==-63 )
				$isolation=true;

		@endphp

	   <table class="tab-products" style="min-height:150px;width:100%;margin-top:5px;margin-bottom:5px">
		   <thead class="th-products">
			   <tr>
				   <th style="width:5%">Image</th><th style="width:36%">Désignation</th>@if($isolation)<th style="width:3%">U</th>@endif<th style="width:5%">Qté</th><th style="width:7%">P.U HT</th><th style="width:9%">Montant HT</th><th style="width:6%">TVA</th><th style="width:9%">Montant TTC</th>
			   </tr>
		   </thead>
		   <tbody >
			   <tr class="product " >
			   		<?php
						$tva_totals= [];
						$unite=''; $total_prod_ht=$total_prod_ttc=0;
					?>
				   @foreach($items as $item)
				   <?php
				  		$product=\App\Models\Product::withTrashed()->find($item->product);
						  $url_img='';
						  if($item->image!='')
						  $url_img=asset("storage/".$item->image);
						if(isset($product)){

							if ($product->image)
								$url_img =asset('images/products/' . $product->image) ;

							$total_prod_ht = floatval($product->prix_ht) * intval($item->qty);
							$total_prod_ttc = floatval($product->prix) * intval($item->qty);
							$unite = $product->unite != '' ? $product->unite : '';
							$tva_rate = $item->tva;
							if(!isset($tva_totals[''.$tva_rate])) {
							$tva_totals[''.$tva_rate] = [
								'montant_ht' => 0,
								'montant_tva' => 0,
							];
							}
							$tva_totals[''.$tva_rate]['montant_ht'] += $total_prod_ht;
							$tva_totals[''.$tva_rate]['montant_tva'] += $total_prod_ttc - $total_prod_ht;
?>
							<tr class="product"  >
								<td>@if($url_img!='') <img src="{!! $url_img !!}"  width="100" style="max-width:100px"></img>@endif</td><td class="text" ><b>{{$product->name}}<br>{!! nl2br($product->description) !!}</b></td>@if($isolation)<td>{!! $unite !!}</td>@endif<td>{{$item->qty}}</td><td>{{$product->prix_ht}} €</td><td>{{$total_prod_ht}} €</td><td>{{$item->tva}} %</td><td>{{$total_prod_ttc}} €</td>
							</tr>
							@if($product->pose > 0)
								<?php
									$tva_rate=$product->tva_pose;
									$pose_ht=$product->pose * intval($item->qty);
									$pose_ttc=$product->pose_ttc * intval($item->qty);
									if(!isset($tva_totals[''.$tva_rate])) {
									$tva_totals[''.$tva_rate] = [
										'montant_ht' => 0,
										'montant_tva' => 0,
									];
									}
									$tva_totals[''.$tva_rate]['montant_ht'] += $pose_ht;
									$tva_totals[''.$tva_rate]['montant_tva'] += $pose_ttc - $pose_ht;
								?>
								<tr class="product"  >
									<td></td><td class="text" ><i>Pose {{$product->name}}</i></td>@if($isolation)<td></td>@endif<td>{{$item->qty}}</td><td>{{$product->pose}} €</td><td>{{$pose_ht }} €</td><td>{{$product->tva_pose}} %</td><td>{{$pose_ttc}} €</td>
								</tr>

							@else
								<!--
								<?php
								/*
									$tva_rate = $item->tva;
									if(!isset($tva_totals[''.$tva_rate])) {
									$tva_totals[''.$tva_rate] = [
										'montant_ht' => 0,
										'montant_tva' => 0,
									];
									}
									$tva_totals[''.$tva_rate]['montant_ht'] += $total_prod_ht;
									$tva_totals[''.$tva_rate]['montant_tva'] += $total_prod_ttc - $total_prod_ht;
									$unite =  $item->unite!='' ? $item->unite : '';
									*/
								?>

								<tr class="product"  >
									<td>@if($item->image!='') <img src="{!! $url_img !!}"  width="100" style="max-width:100px"></img>@endif</td><td class="text" >{!! nl2br($item->description) !!}</td><td>{!! $unite !!}</td><td>{{$item->qty}}</td><td  >{{$item->price_ht}} €</td><td>{{ floatval($item->price_ht) * intval($item->qty) }} €</td><td>{{$item->tva}} %</td><td>{{  floatval($item->price_ttc) * intval($item->qty)  }} €</td>
								</tr>
								-->
							@endif
							<?php
							}else{

								$total_prod_ht = floatval($item->price_ht) * intval($item->qty);
								$total_prod_ttc = floatval($item->price_ttc) * intval($item->qty);
								$tva_rate = $item->tva; // Get the TVA rate for the current item
								// Update the TVA totals array
								if(!isset($tva_totals[''.$tva_rate])) {
								$tva_totals[''.$tva_rate] = [
									'montant_ht' => 0,
									'montant_tva' => 0,
								];
								}
								$tva_totals[''.$tva_rate]['montant_ht'] += $total_prod_ht;
								$tva_totals[''.$tva_rate]['montant_tva'] += $total_prod_ttc - $total_prod_ht;
								$unite =  $item->unite!='' ? $item->unite : '';
								if ($item->image)
									$url_img =asset('images/products/' . $item->image) ;
							?>
							<tr class="product"  >
								<td>@if($item->image!='') <img src="{!! $url_img !!}"  width="100" style="max-width:100px"></img>@endif</td><td class="text" >{!! nl2br($item->description .'<br>'.$item->note) !!}</td>@if($isolation)<td>{!! $unite !!}</td>@endif<td>{{$item->qty}}</td><td  >{{$item->price_ht}} €</td><td>{{ floatval($item->price_ht) * intval($item->qty) }} €</td><td>{{$item->tva}} %</td><td>{{  floatval($item->price_ttc) * intval($item->qty)  }} €</td>
							</tr>
						<?php	} ?>
				   @endforeach
			   </tr>
			   @if($invoice->deplacement>0)
				   <tr class="product" style="color:#f07f32">
				   		<td></td><td>Frais de déplacment</td><td style="text-align:center"></td>@if($isolation)<td ></td>@endif<td></td><td> {{$invoice->deplacement}}  €</td><td> {{ $invoice->tva_deplacement ?? 0 }} %</td><td>{{$invoice->total_deplacement ?? 0}} €</td>
				   </tr>
			   @endif

			   @if($invoice->remise>0)
				   <tr class="product" style="color:#f07f32">
				   		<td></td><td>{{$texte_remise}}</td><td style="text-align:center"></td><td ></td>@if($isolation)<td></td>@endif<td> {{$invoice->remise}}  €</td><td> {{ $invoice->tva_remise ?? 0 }} %</td><td>{{$invoice->total_remise ?? 0}} €</td>
				   </tr>
			   @endif
			   @if($invoice->protocole>0)
				   <tr class="product" style="color:#f07f32">
				   		<td></td><td>PRIME PROTOCOLE SECURITAIRE GROUPE HER ENR</td><td style="text-align:center"></td><td ></td>@if($isolation)<td></td>@endif<td> {{$invoice->protocole}}  €</td><td> {{ $invoice->tva_protocole ?? 0 }} %</td><td>{{$invoice->total_protocole ?? 0}} €</td>
				   </tr>
			   @endif
		   </tbody>
	   </table>

	   <div style="width:100%;page-break-inside: avoid;">
		   <div style="width:65%;float:left;font-size:9px">
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

				<div style="width:100%;padding-top:30px;page-break-inside: avoid;">
				   @if($invoice->modalite!='')
					   <b>Règlement par :</b> {{ $invoice->modalite }}

					   @if(str_contains($invoice->modalite, 'Financement') )
						   <table class="financement">
							   <tr><td>Montant Financé :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{number_format($invoice->montant_finance,2,',',' ')}} €</td><td>Montant mensuel<br>de l'assurance :</td><td style="font-weight:bold;" class="text-right">{{number_format($invoice->montant_assurance,2,',',' ')}} €</td></tr>
							   <tr><td>Report 1ère échéance (en jours) :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{$invoice->report_echeance}} jours</td><td>Taux débiteur :</td><td style="font-weight:bold;" class="text-right">{{$invoice->taux_nominal}} %</td></tr>
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
		   </div>
		   <div style="width:35%;float:left;">
			   <table class="totals">
			   <tr><td colspan="2">Total HT</td><td class="text-right">{{number_format($invoice->total_ht,2,',',' ')}} €</td></tr>
			   <?php
			   $total_tvas=0;
			   if(count($tva_totals)>1){
					foreach ($tva_totals as $tva_rate => $totals) {
						$total_tvas+=$totals["montant_tva"];
						echo '<tr><td colspan="2">TVA '.$tva_rate.'%</td><td class="text-right">'.number_format($totals["montant_tva"],2,',',' ').' €</td></tr>';
					}
				}
				if($invoice->remise>0 && $total_tvas>0){  ?>
				<tr><td colspan="2">Total TVA</td><td class="text-right">{{number_format($total_tvas,2,',',' ')}} €</td></tr>
				<?php
				}else{
				?>
			   <tr><td colspan="2">Total TVA</td><td class="text-right">{{number_format($invoice->total_tva,2,',',' ')}} €</td></tr>
			   <?php } ?>
			   <tr><td colspan="2">Total TTC</td><td class="text-right">{{number_format($invoice->total_ttc,2,',',' ')}} €</td></tr>
			   @if($invoice->aide>0)
			   		@if($invoice->aide_cee>0)
			   			<tr style="color:#f07f32"><td colspan="2" style="font-size:9px;max-width:90px;">- Prime CEE EDF<br><small>  Siren EDF 552 081 317</small></td><td class="text-right">- {{number_format($invoice->aide_cee,2,',',' ')}} €</td></tr>
			   		@endif
			   		@if($invoice->aide_renov>0)
						<tr style="color:#f07f32"><td colspan="2" style="font-size:9px;max-width:90px;">- Montant Estimatif<br>Prime Renov</td><td class="text-right">- {{number_format($invoice->aide_renov,2,',',' ')}} €</td></tr>
			   		@endif
			   @endif
			   @if($invoice->acompte>0)
			   <tr style="color:#f07f32"><td colspan="2" >Acompte</td><td class="text-right">{{number_format($invoice->acompte,2,',',' ')}} €</td></tr>
			   @endif
			   <!--
			   @if($invoice->remise>0)
			  		<tr style="color:#f07f32"><td colspan="2" >Remise <small>GROUPE<br>HER ENR</small></td><td class="text-right">{{number_format($invoice->total_remise,2,',',' ')}} €</td></tr>
			   @endif
				-->
			   <tr><td colspan="2">Net à payer</td><td class="text-right">{{number_format($invoice->net,2,',',' ')}} €</td></tr>
			   </table>
		   </div>
	   </div>

	   <div class="clearfix pagebreak"></div>
		   <div style="width:100%;font-weight:bold;padding-top:15px">
		   		@if($type =='Devis')
				  	@if($format=='avecsignature')
						@php
							$lieu=\App\Models\Signature::where('quote',$invoice->id)->first()->lieu ?? '';
							$date=\App\Models\Signature::where('quote',$invoice->id)->first()->date ?? '';
							$signature=\App\Models\Signature::where('quote',$invoice->id)->first()->signature ?? '';
							$signature_her=\App\Models\Signature::where('quote',$invoice->id)->first()->signature_her ?? '';
						@endphp
						<table style="width:100%;font-size:10px">
							<tr rowspan="2"><td>Fait à</td>@if($lieu !='')<img src="{{$lieu}}" width= '130'     height='auto'/>@endif<td></td><td>Le</td>@if($date !='')<td><img src="{{$date}}" width= '130'     height= 'auto'/>@endif</td></tr>
							<tr><td colspan="4" style="padding-top:10px;padding-bottom:10px">  <div class="checkboxes">  <label><input type="checkbox"> <span> J'ai lu et j'accepte les Conditions Générales de Ventes</span></label></div></td></tr>
							<tr><td colspan="4">Signature précédée de la mention "Bon pour accord"</td></tr>
						</table>
						<div style="border:1px solid grey;width:60%;height:110px">
							@if($signature !='')<img style="margin-left:15px;margin-top:15px;" src="{{$signature}}"  width='200'     height= ''/>@endif
						</div>
						<table style="width:100%;font-size:10px;margin-top:20px;">
							<tr><td>Professionnel:</td></tr>
							<tr><td>Le groupe HER ENR s'engage à exécuter les travaux dans les conditions indiquées</td></tr>
						</table>
						<div style="border:1px solid grey;width:60%;height:110px">
							@if($signature_her !='')<img style="margin-left:15px;margin-top:15px;" src="{{$signature_her}}"  width='200'     height= ''/>@endif
						</div>												
					@else
						<table style="width:300px;font-size:10px">
							<tr rowspan="2"><td>Fait à</td><td></td><td>Le</td><td></td></tr>
							<tr><td colspan="4" style="padding-top:10px;padding-bottom:10px">  <div class="checkboxes">  <label><input type="checkbox"> <span> J'ai lu et j'accepte les Conditions Générales de Ventes</span></label></div></td></tr>
							<tr><td colspan="4">Signature précédée de la mention "Bon pour accord"</td></tr>
						</table>
						<div style="border:1px solid grey;width:60%;height:100px">
						</div>
						<table style="width:100%;font-size:10px;margin-top:20px;">
							<tr ><td>Professionnel:</td></tr>
							<tr><td >Le groupe HER ENR s'engage à exécuter les travaux dans les conditions indiquées</td></tr>
						</table>
						<div style="border:1px solid grey;width:60%;height:100px">
						</div>
					@endif
				@endif
		   </div>
	   <div class="clearfix"></div>


   </div>
   </section>
@include('invoices.cgv2')
@endsection
