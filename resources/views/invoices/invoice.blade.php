
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
	   }
	   .vtop{
			vertical-align:top;
		}
	   .text-right{
			text-align:right;
	   }
		.body{
			font-family:'Nunito';
			padding:0px 10px 0px 10px;
			color:#0e334f;
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
		   bottom: -100px;
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
		   <td><img src="{!! public_path('img/logo.png')!!}"  width="170" style="margin-right:50px"></img></td><td><img src="{!! public_path('img/bat.png')!!}"  width="50" style="margin-right:20px" ></img></td><td><img src="{!! public_path('img/sol.png')!!}"  width="80" style="margin-right:10px"></img></td><td><img src="{!! public_path('img/pv.png')!!}"  width="80" style="margin-right:10px"></img></td><td><img src="{!! public_path('img/pac.png')!!}"  width="80" style="margin-right:10px"></img></td><td><img src="{!! public_path('img/bois.png')!!}"  width="80"></img></td>
	   </tr>
   </table>
   <div class="container">
	   <table style="width:100%;">
		   <tr>
			   <td style="width:50%;">
				   <span><b>SARL GROUPE H.E.R ENR</b></span><br>
				   <span>11 RUE KARL MARX</span><br>
				   <span>82000 MONTAUBAN</span><br>
				   <span><b>Tél :</b> 09.77.59.57.42</span><br>
				   <span><b>Email :</b> contact@groupe-her.com</span><br><br>
				   <b>Adresse du chantier:</b><br>
				   <span>{{ $invoice->delivery_address ?? $invoice->customer()->first()->delivery_address }}</span><br>
				   @if($invoice->delivery_postal!='')<span>{{ $invoice->delivery_postal ?? $invoice->customer()->first()->delivery_postal }}, {{ $invoice->delivery_city ?? $invoice->customer()->first()->delivery_city }} - {{ $invoice->delivery_country ?? $invoice->customer()->first()->delivery_country }}</span><br>@endif
			   </td>
			   <td style="width:50%;">
				   <b>Client:</b> {{ $invoice->customer()->first()->civility }} {{ $invoice->customer()->first()->lastname }} {{ $invoice->customer()->first()->name }} <br>
				   @if($invoice->customer()->first()->lastname2!='')<span style="margin-left:35px">{{ $invoice->customer()->first()->civility2 }} {{ $invoice->customer()->first()->lastname2 }} {{ $invoice->customer()->first()->name2 }}</span><br>@endif
				   <b>Adresse:</b> <span>{{ $invoice->customer()->first()->address }}</span><br>
				   @if($invoice->customer()->first()->postal!='') <span>{{ $invoice->customer()->first()->postal }}, {{ $invoice->customer()->first()->city }} - {{ $invoice->customer()->first()->country }}</span><br>@endif
				   <span>@if( $invoice->customer()->first()->phone!='')<b>Tél :</b> {{ $invoice->customer()->first()->phone }}    @endif @if( $invoice->customer()->first()->email!='') <b>Email:</b> {{ $invoice->customer()->first()->email }} @endif</span>
				   <br>
			   </td>
		   </tr>
	   </table>
	   <table style="width:100%;margin-top:5px;margin-bottom:5px">
		   <tr>
			   <td style="width:50%;">
				   @if( $invoice->logement!='')<b>Logement :</b>{{ $invoice->logement }}    @endif  @if($invoice->surface!='')<b>Surface chauffée (m²) :</b>   {{ $invoice->surface }}<br>@endif
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
					   @php
						   $product=\App\Models\Product::find($item->product);
						   $total_prod_ht=floatval($product->prix_ht) * intval($item->qty);
						   $total_prod_ttc=floatval($product->prix) * intval($item->qty);
					   @endphp
					   <tr class="product"  >
						   <td class="text" ><b>{{$product->name}}<br>{!! nl2br($product->description) !!}</b></td><td>{{$item->qty}}</td><td>{{$product->prix_ht}} €</td><td>{{$total_prod_ht}} €</td><td>{{$item->tva}} %</td><td>{{$total_prod_ttc}} €</td>
					   </tr>
					   @if($product->pose > 0)
						   <tr class="product"  >
							   <td class="text" ><i>Pose {{$product->name}}</i></td><td>1</td><td>{{$product->pose}} €</td><td>{{$product->pose}} €</td><td>{{$product->tva_pose}} %</td><td>{{$product->pose_ttc}} €</td>
						   </tr>
					   @endif
				   @endforeach
			   </tr>

			   @if($invoice->remise>0)
				   <tr class="product" style="color:#f07f32">
					   <td>Remise Catalogue Groupe HER ENR</td><td style="text-align:center"></td><td ></td><td> {{$invoice->remise}}  €</td><td> {{ $invoice->tva_remise ?? 0 }} %</td><td>{{$invoice->total_remise ?? 0}} €</td>
				   </tr>
			   @endif
		   </tbody>
	   </table>

	   <div style="width:100%;page-break-inside: avoid;">
		   <div style="width:67%;float:left;font-size:9px">
			   {!!nl2br($invoice->description) !!}
			   <div class="clearfix"></div>
			   @if($invoice->chaudiere!='' && $invoice->chaudiere!='Autre')
				   Dépose de la chaudière individuelle: <b> Chaudière à {{$invoice->chaudiere}}</b><br>
			   @endif
				<b>Délai de Livraison : 30 jours</b><br>
				<b>Durée de validité du devis : 15 jours</b>
		   </div>
		   <div style="width:33%;float:left;">
			   <table class="totals">
			   <tr><td colspan="2">Total HT</td><td class="text-right">{{number_format($invoice->total_ht,2,',',' ')}} €</td></tr>
			   <tr><td colspan="2">Total TVA</td><td class="text-right">{{number_format($invoice->total_tva,2,',',' ')}} €</td></tr>
			   <tr><td colspan="2">Total TTC</td><td class="text-right">{{number_format($invoice->total_ttc,2,',',' ')}} €</td></tr>
			   @if($invoice->aide>0)
			   <tr style="color:#f07f32"><td colspan="2" style=";font-size:9px;max-width:90px;">Montant Estimatif<br>{{$invoice->type_aide}}</td><td class="text-right">{{number_format($invoice->aide,2,',',' ')}} €</td></tr>
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
						   <tr><td>Report 1ère échéance :</td><td class="text-right" style="padding-right:20px;font-weight:bold;">{{$invoice->report_echeance}} jours</td><td>Taux nominal :</td><td style="font-weight:bold;" class="text-right">{{$invoice->taux_nominal}} %</td></tr>
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
			   <table style="width:100%;font-size:10px">
				   <tr rowspan="2"><td>Fait à</td><td></td><td>Le</td><td></td></tr>
				   <tr><td colspan="4"> J'ai lu et j'accepte les Conditions Générales de Ventes</td></tr>
				   <tr><td colspan="4">Signature précédée de la mention "Bon pour accord"</td></tr>
			   </table>
			   <div style="border:1px solid grey;width:100%;height:120px">
			   </div>
		   </div>
	   </div>
	   <div class="clearfix"></div>


   </div>
   </section>
   <footer>
	   SARL au capital de 50 000 euros<br>
	   SIRET 851 566 455 00032  - R.C.S MONTAUBAN - NAF 3511Z<br>
	   TVA intracommunautaire : FR95851566455<br>
   </footer>

<!--page conditions de ventes--->
<div class="pagebreak"></div>
<div class="text-center"><B style="font-size:16px"> Conditions Générales de vente</b></div>
<div class="conditions">
Article 1 : EXPEDITION LIVRAISON. Les dates d'expédition et délais de livraison sont donnés à titre indicatif et ne sauraient engager GROUPE HER ENR qui, toutefois, s’efforcera de les
respecter selon les possibilités de stock et de distribution, En conséquence, un retard d'expédition ou de livraison ne peut être prétexte à résiliation de commande ni à dommages et intérêts, en cas de refus de
marchandise par le destinataire, comme en cas de défaillance de celui-ci pour quelque cause que ce soit, les frais de retour s’ajouteront à la créance de GROUPE HER ENR.<br>
Article 2 : RECLAMATIONS. Aucune réclamation pour quelque cause de ce soit, ne sera admise si elle n'est pas notifiée au siège de GROUPE HER ENR dans les huit jours de la réception de la marchandise, par
lettre recommandée avec avis de réception<br>
Article 3 : PRIX PAIEMENT. Les prix des produits, fournitures et services sont ceux du tarif GROUPE HER ENR applicable au jour de la facturation. Ils ne comprennent pas les frais éventuels déconditionnement,
transport, déplacement, installation, vacation, taxes et droits divers qui les grèvent et sont à la charge du client qui s'oblige à les acquitter en même temps. Les factures sont payables en totalité et au comptant au
siège de GROUPE HER ENR. Les effets ou acceptations de paiement différés ne font ni novation ni dérogation aux autres clauses des présentes ; les frais y afférents sont supportés par le client qui s'y oblige. De
convention expresse, le défaut de paiement à réception de facture ou à son exacte échéance, entraînera de plein droit sans qu'il soit besoin d'une mise en demeure :<br>
La suspension des services de GROUPE HER ENR, et l'annulation de sa garantie et / ou responsabilité pour les produits, fournitures et services impayés,<br>
L'exigibilité immédiate de toutes les sommes restant dues quel que soit le mode de paiement convenu (par traite acceptée ou autre);<br>
Et après envoi d'une mise en demeure :<br>
L'exigibilité à titre de clause pénale, d'une indemnité forfaitaire et irréductible égale à 15% des sommes dues avec un minimum de 100 euros, outre les interdits moratoires calculés à un taux égal à 1,5 fois le taux
légal.<br>
Les présentes dispositions sont expressément voulues et acceptées par les parties, et s'appliqueront avec rigueur sans qu'aucun acompte ou offre de consignation puisse arrêter les effets.<br>
Le paiement anticipé par rapport à la date d'échéance contractuelle (conditions particulières), n'ouvrira droit pour le client à aucun escompte.<br>
Article 4 : FINANCEMENT, En cas de vente à crédit, Iadite vente est régie par les dispositions de la loi du 10 janvier 1971, lesquelles sont reprises dans le formulaire d'offre préalable de crédit, signé en même temps
que le contrat de vente à domicile.<br>
Article 5 : DROIT DE RETENTION. La société GROUPE HER a sur tout le matériel qui lui est confié par le client pour entretien, rechargement, ré épreuve, réparation, ou toute autre opération, un droit de rétention et
de préférence en garantie de Ioule ses créances même nées à propos d'opérations antérieures ou étrangères au matériel retenu.
Article 6 : RESERVE DE PROPRIETE. Le transfert de propriété des produits et fournitures vendus par GROUPE HER ENR est suspendu jusqu'au paiement intégral du prix en principal et accessoires, et ce compris
tous frais de transport et autres, tous droits et taxes, Le transfert de la garde a lieu à la livraison, et il incombe en conséquence dès ce moment au client de prendre toutes dispositions pour assurer les dommages
causés à/ou par les produits vendus.<br>
Article 7 : OBLIGATIONS DU CLIENT, Le client reconnaît avoir été parfaitement informé du mode de fonctionnement du produit vendu ou vérifié qui est désormais sous sa garde exclusive et à ses risques et périls. Il
s'engage, outre le respect des clauses présentes, à :<br>
- Respecter les indications et prescriptions de la société GROUPE HER ENR et des fabricants quant à l'utilisation, la conservation, l'entretien, la vérification, le rechargement, et la protection desdits produits.
- Vérifier la qualité des techniciens et agents vérificateurs de la société GROUPE HER ENR seuls accrédités à visiter la clientèle, et interdire toute intervention étrangère à la société GROUPE HER ENR pour
quelque motif que ce soit, sur les produits venus ou vérifiés.<br>
- Assister lui-même, ou le cas échéant, déléguer son personnel pour assister aux opérations de maintenance effectuées sur place, signer les bons correspondant, certifiant ainsi de leur bonne exécution.<br>
- N'effectuer aucune modification ou détérioration volontaire sur les produits vendus ou vérifiés.<br>
- Se conformer aux obligations de sa police d'assurance.<br>
Dans l'hypothèse où le client ne se conformerait pas aux obligations résultant des présentes, la responsabilité ou la garantie de la société GROUPE HER ENR ne pourront être ni engagées ni recherchées.<br>
Article 7.1 : Le client bénéficie d’une garantie légale de conformité régie par les dispositions des articles 217-1 du code de la consommation et d’une garantie contre les vices cachés de la chose vendue qui la
rendent impropre à l’usage auquel elle est destinée sur le fondement des articles 1641 et s du Code civil.<br>
C’est garanti légales s’appliquent indépendamment des garanties commerciales de la société vendeuse.<br>
Article 8 : OBLIGATIONS DE LA SOCIÉTÉ GROUPE HER ENR. Les garanties et responsabilités exposées ci-après ne s'appliquent que pour autant que le client se soit scrupuleusement conformé aux obligations
du présent contrat, notamment celles visées à l'article 7, et à la réglementation en vigueur.<br>
a) Garantie : Les produits vendus bénéficient pour le non professionnel ou consommateur de la garantie légale résultant des articles 1641 et suivants du code Civil contre toutes les conséquences des défauts ou
vices cachés. Le produit vendu par de la société GROUPE HER ENR est garanti contractuellement au minimum 1 an, selon les garanties du fabricant, à partir du jour de son installation ou de sa réparation.<br>
L'obligation de la société GROUPE HER ENR au titre de cette garantie est limitée à son choix, à la réparation, au remplacement ou au remboursement de la valeur facturée des produits ou éléments reconnus
défectueux après examen contradictoire, à l'exclusion de la réparation de tout préjudice de quelque nature que ce soit. Les opérations liées à cette garantie contractuelle s'effectuent par la société GROUPE HER
ENR gratuitement, pièces et main d'œuvre. Sont exclus de la présente garantie de façon générale, tout non-fonctionnement ou défectuosité provenant de l'usure normale. La société GROUPE HER ENR n'autorise
personne à assumer pour elle les charges résultant de la présente garantie.<br>
b) Responsabilité : La responsabilité de la société GROUPE HER ENR ne pourra être recherchée ou engagée à quelque titre que ce soit, s'il n'est nullement établi par le client que le produit en cause a été utilisé en
temps utile conformément aux prescriptions d'utilisation. Qu'en tout état de cause, l'installation est conforme aux exigences des lois et règlements en vigueur en cette matière.
c) LES DÉMARCHES ADMINISTRATIVES:  Sauf stipulation expresse contraire du CLIENT, les formalités administratives de déclaration en mairie, ou autre et les frais qui en découlent incombent spécifiquement au CLIENT et non à la société GROUPE HER ENR.<br>
Un certain nombre de démarches administratives sont à prévoir. Le client peut les accomplir ou mandater notre société pour leur prise en charge. Nous pouvons assister le client pour la demande préalable auprès de
la Mairie concernant le projet photovoltaïque. Dans ce cas, le client devra rédiger un mandat qui donnera le pouvoir à la société venderesse de composer et déposer un dossier administratif de demande préalable
auprès de la mairie (cerfa, plan de situation de terrain, plan de toiture, représentation de la futur installation…). La société venderesse s’occupe de la certification par Consuel (organisme officiel qui certifie la conformité
de l’installation électrique d’un bâtiment). Le client devra également contacter son assureur afin de l’informer, dans l’hypothèse où il devient producteur l’électricité : cela concerne aussi bien le nouveau matériel à
déclarer que la responsabilité civile. Les travaux de raccordement et la mise en service seront assurés par Enedis. Les frais de raccordement : l’adhésion à cette option est souscrite hors frais de raccordement. Le prix
du raccordement n’est pas fixe mais varie en fonction de chaque situation. En effet, si des travaux d’extension du réseau sont à prévoir ou encore des boîtiers de protection à rajouter, le prix peut être plus important
que la moyenne. Enedis est la seule entité pouvant évaluer ce prix. Un ordre de raccordement vous sera envoyé précisant la solution retenue et le coût qui vous sera facturé. En cas de devis de raccordement
anormalement élevé, vous pouvez vous rapprocher de l’autorité concédant (Autorité Organisatrice de Distribution de l’Electricité – AODE) du réseau sur lequel sera raccordée l’installation de production. Le délai
maximal d’obtention du devis de raccordement est fixé entre 3 et 6 mois. Le producteur à 3 mois pour accepter l’ordre de raccordement.<br>
Article 9 : AUTRES. Conformément à la loi du 6 janvier 1971 relative à l'informatique, aux fichiers et aux libertés, le client dispose d'un droit d'accès et de rectification des données le concevant qu'il peut exercer
auprès du siège de la société GROUPE HER ENR.<br>
Article 10 : LITIGES / MEDIATION  L’ordonnance n°2015-1033 du 20 août 2015 relative au règlement extrajudiciaire des litiges de consommation dispose que « tout consommateur a le droit de recouvrir gratuitement à un médiateur de la consommation
en vue de la résolution amiable du litige qui l’oppose à un professionnel. A cet effet, le professionnel garantit au consommateur le recours effectif à un dispositif de médiation de la consommation ».<br>
En cas de litige, vous devez vous adresser en priorité au service clients de l’entreprise par téléphone (du lundi au vendredi sauf jour férié ou chômé, de 9h00 à 12h00 et de 14h00 à 17h00) ou par courrier postal, le
numéro de téléphone et l’adresse figurant au recto du présent contrat. Le consommateur trouvera sur le site de la médiation de la consommation toutes les informations qui leur permettront d’exercer leur droit à la
médiation dans les conditions prévues au titre Ier du livre VI du code de la consommation. En absence de solution dans les 21 jours qui suivent votre demande, vous pouvez saisir la Commission Paritaire de Médiation
de la Vente Directe (www.mediationvente-directe.fr) 100, av. de Président Kennedy 75016 PARIS, qui recherchera gratuitement un règlement amiable.<br>
<div class="text-center"><b >EXTRAIT DU CODE DE LA CONSOMMATION</b></div><br>
Article L121-17- Préalablement à la conclusion d'un contrat de vente ou de fourniture de services, le professionnel communique au consommateur, de manière lisible et compréhensible, les informations suivantes :<br>
1° Les informations prévues aux articles L. 111-l et L. 111-2;<br>
-Les caractéristiques essentielles du bien ou du service, compte tenu du support de communication utilisé et du bien ou service concerné ;<br>
-Le prix du bien ou du service, en application des articles L. 113-3 et L. 113-3-1;<br>
- En l'absence d'exécution immédiate du contrat, la date ou le délai auquel le professionnel s'engage à livrer le bien ou à exécuter le service ;<br>
- Les informations relatives à son identité, à ses coordonnées postales, téléphoniques et électroniques et à ses activités, pour autant qu'elles ne ressortent pas du contexte, ainsi que, s'il y a lieu, celles relatives aux
garanties légales, aux fonctionnalités du contenu numérique et, le cas échéant, à son interopérabilité, à l'existence et aux modalités de mise en œuvre des garanties et aux autres conditions contractuelles. La liste et
le contenu précis de ces informations sont fixés par décret en Conseil d'État.<br>
2° Lorsque le droit de rétractation existe, les conditions, le délai elles modalités d'exercice de ce droit ainsi que le formulaire type de rétractation, dont les conditions de présentation et les mentions qu'il contient sont
fixées par décret en Conseil d’État ;<br>
3° Le cas échéant, le fait que le consommateur supporte les frais de renvoi du bien en cas de rétractation et, pour les contrats à distance, le coût de renvoi du bien lorsque celui-ci, en raison de sa nature, ne peut
normalement être renvoyé par la poste ;<br>
4° L'information sur l'obligation du consommateur de payer des frais lorsque celui-ci exerce son droit de rétractation d'un contrat de prestation de services, de distribution d'eau, de fourniture de gaz ou d'électricité et
d'abonnement à un réseau de chauffage urbain dont il a demandé expressément l'exécution avant la fin du délai de rétractation ; ces frais sont calculés selon les modalités fixées à l'article L. 121-21-5 ;<br>
5° Lorsque le droit de rétractation ne peut être exercé en application de l'article L. 121-21-1. L'information selon laquelle le consommateur ne bénéficie pas de ce droit ou, le cas échéant, les circonstances dans
lesquelles le consommateur perd son droit de rétractation ;<br>
6° Les informations relatives aux coordonnées du professionnel, le cas échéant aux coûts de l'utilisation de la technique de communication à distance, à l'existence de codes de bonne conduite, le cas échéant aux
cautions et garanties, aux modalités de résiliation, aux modes de règlement des litiges et aux autres conditions contractuelles, dont la liste et le contenu sont fixés par décret en Conseil d'État.<br>
II. - Si le professionnel n'a pas respecté ses obligations d'information concernant les frais supplémentaires mentionnés au I de l'article L. 113-3-1 et au 3° du I du présent article, le consommateur n'est pas tenu au
paiement de ces frais.<br>
III.- La charge de la preuve concernant le respect des obligations d'information mentionnées à la présente sous-section pèse sur le professionnel.<br>
Article L121-24 -Le contrat visé à l'article L. 121-23 doit comprendre un formulaire détachable destiné à faciliter l'exercice de la faculté de renonciation dans les conditions prévues à l'article L. 121-25. Un décret en
Conseil d'État précisera les mentions devant figurer sur ce formulaire. Ce contrat ne peut comporter aucune clause attributive de compétence. Tous les exemplaires du contrat doivent être signés et datés de la main
même du client.
</div>
<div class="coupon">
<img src="{!! public_path('img/cut.png')!!}"  width="10" />-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>
SI VOUS ANNULEZ VOTRE COMMANDE, VOUS POUVEZ UTILISER LE FORMULAIRE DETACHABLE CI-CONTRE ANNULATION DE COMMANDE. (Vous pouvez utiliser le formulaire
détachable ci-dessous) Compléter et signer le formulaire. L'envoyer en lettre recommandée avec AR Utiliser l'adresse figurant au verso. L'expédier au plus tard le quatorzième jour à partir du jour
de la commande, ou si ce délai expire normalement un samedi, un dimanche, ou un jour férié ou chômé, le 1er jour ouvrable suivant.<br>
</div>
<div class="formulaire">
Je soussigné, déclare annuler la commande ci-après :<br>
Nature de la marchandise et/ou du service commandé : ______________________________________________Date de la commande ________________________________<br>
Nom du conseillé : ______________________________________________<br>
Nom et Prénom du client : ________________________________________<br>
Adresse du client : ____________________________________________________________________________________________________________________________<br>
<div class="text-center"><b>Signature</b></div><br>


</div>
@endsection
