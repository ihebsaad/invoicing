
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
			font-weight:400;
		}
		.container{
			font-size:11px;
		}
		.tab-products{
		   border-bottom:2px solid #f07f32;
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
		   line-height:12px!important;
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
		.pose{
			border-bottom:1px solid #f07f32;
		}
		.product td{
			padding-bottom:10px;
		}
		.tab1 td{
			padding-top:20px!important;
			padding-bottom:20px!important;
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
				   <span>{{ $invoice->delivery_address ?? $invoice->customer()->first()->delivery_address ?? '' }}</span><br>
				   @if(isset($invoice->delivery_postal))<span>{{ $invoice->delivery_postal ?? $invoice->customer()->first()->delivery_postal }}, {{ $invoice->delivery_city ?? $invoice->customer()->first()->delivery_city }} - {{ $invoice->delivery_country ?? $invoice->customer()->first()->delivery_country }}</span><br>@endif
			   </td>
			   <td style="width:50%;">
				   <b>Client:</b> {{ $invoice->customer()->first()->company  ?? '' }} {{ $invoice->customer()->first()->civility ?? '' }} {{ $invoice->customer()->first()->lastname ?? '' }} {{ $invoice->customer()->first()->name ?? '' }} <br>
				   @if(isset($invoice->customer()->first()->lastname2))<span style="margin-left:35px">{{ $invoice->customer()->first()->civility2  ?? '' }} {{ $invoice->customer()->first()->lastname2  ?? '' }} {{ $invoice->customer()->first()->name2  ?? '' }}</span><br>@endif
				   <b>Adresse:</b> <span>{{ $invoice->customer()->first()->address  ?? '' }}</span><br>
				   @if($invoice->customer()->first()->postal!='') <span>{{ $invoice->customer()->first()->postal  ?? '' }}, {{ $invoice->customer()->first()->city  ?? '' }} - {{ $invoice->customer()->first()->country  ?? '' }}</span><br>@endif
				   <span>@if( isset($invoice->customer()->first()->phone))<b>Tél :</b> {{ $invoice->customer()->first()->phone }}    @endif @if( isset($invoice->customer()->first()->email)) <b>Email:</b> {{ $invoice->customer()->first()->email  ?? '' }} @endif</span>
				   <br>
			   </td>
		   </tr>
	   </table>
	   <table style="width:100%;margin-top:5px;margin-bottom:5px">
		   <tr>
			   <td style="width:50%;">
				   @if( $invoice->logement!='')<b>Logement :</b>{{ $invoice->logement }}    @endif  @if($invoice->surface!='')<b>Surface @if($invoice->menuiserie==-7)à isoler @else chauffée @endif  (m²) :</b>   {{ $invoice->surface }}<br>@endif
				   <b>Date de visite technique préalable :</b>   {{ $date_facture }}
			   </td>
			   <td style="width:50%;">
				   <b style="font-size:22px;color:#f07f32">{{$type}} N° : {{ $reference }} </b><br>
				   Créé le : <b>{{date('d/m/Y', strtotime($invoice->created_at))}}</b>    Conseiller: <b>{{$par}}</b>
			   </td>
		   </tr>
	   </table>
		@php
	   		$texte_loi='<b>Gestion, évacuation et traitement des déchets de chantier.</b></br> Comprend :<br>- La main d’œuvre liée à la dépose et au tri<br>- Le transport des déchets de chantier vers un ou plusieurs points de collecte.<br>- Les coûts de traitement.<br>- Ouvrages déconstruits (déchets susceptibles d’être en mélange)<br>- Le point de collecte envisagé : Déchetterie';
		@endphp
		@if($type=='Devis' && $invoice->menuiserie==1)
		<table class="tab-products tab1" style="min-height:150px;width:100%;margin-top:50px;margin-bottom:5px">
		   <thead class="th-products">
			   <tr>
			   	<th style="width:15%">Image</th><th style="width:75%">Désignation</th><th style="width:10%">Montant TTC</th>
			   </tr>
		   </thead>
		   <tbody >
			   	<tr class="product " >
					<td  style="border-bottom: 1px solid #f07f32">
						<img src="{!! public_path('img/okno.png')!!}"  width="100" />
					</td>
					<td class="text"  style="border-bottom: 1px solid #f07f32">
						Le GROUPE HER ENR est sensible à la qualité des produits installés chez ses clients.<br>
						Pour cela nous avons choisi le Groupe OKNOPLAST.<br>
						Représenté dans 17 pays, il fait parti du top 3 mondial dans la fabrication de menuiserie.<br>
						Une gamme spécialement conçue pour le GROUPE HER ENR
						<h3>CHARME MINI</h3>

						<h5>L'ÉLÉGANCE DES COURBES ET UN MAXIMUM DE LUMIÈRE</h5>
						La fenêtre en PVC Charme Mini offre luminosité et sécurité. En effet cette menuiserie PVC révolutionne votre intérieur grâce à un battement central réduit ainsi que des nouvelles générations de renforts. La finesse de son battement central permet une luminosité maximale de la pièce. La fenêtre standard en PVC Charme Mini est également disponible en porte fenêtre pour s'adapter à tous vos intérieurs.<br>
						<h5>FENÊTRES PVC CHARME MINI : UNE SÉCURITÉ RENFORCÉE</h5>
						La gamme Charme Mini comporte plusieurs équipements étudiés spécialement pour renforcer la sécurité du logement, comme un vitrage retardateur d'effraction ou des points multiples de fermeture à galets.<br>
					</td>
					<td style="border-bottom: 1px solid #f07f32" ></td>
				</tr>
				<tr class="product" >
					<td style="border-bottom: 1px solid #f07f32" ></td>
					<td class="text" style="border-bottom: 1px solid #f07f32">
						Garantie menuiserie : 10 ans <br>
						Garantie quincaillerie : 10 ans <br>
						Hors frais de déplacement et main d'œuvre.<br>
						DEVIS CHIFFRES AVEC POSE ET CONSOMABLE COMPRIS<br>
						REALISATION DES TRAVAUX FAITE PAR LES SALARIÉES DU GROUPE HER ENR
					</td>
					<td style="border-bottom: 1px solid #f07f32"></td>
				</tr>
				<tr class="product" >
					<td   ><img src="{!! public_path('img/loi.png')!!}"  width="100" /> </td><td class="text" >{!!nl2br($texte_loi)!!}</td><td   >{{$invoice->total_loi ?? 100}} €</td>
				</tr>
		   </tbody>
	   </table>
	   <div class="pagebreak"></div>
		@endif
	   <table class="tab-products" style="min-height:150px;width:100%;margin-top:5px;margin-bottom:5px">
		   <thead class="th-products">
			   <tr>
			   	<th style="width:14%">Image</th><th style="width:39%">Désignation</th><th style="width:5%">Qté</th><th style="width:8%">P.U HT</th><th style="width:9%">Montant HT</th><th style="width:5%">TVA</th><th style="width:10%">Montant TTC</th>
			   </tr>
		   </thead>
		   <tbody >
		  		@if($type=='Facture')
			   		<tr class="product" >
					   <td ><img src="{!! public_path('img/loi.png')!!}"  width="100" /> </td><td class="text">{!!nl2br($texte_loi)!!}</td><td style="text-align:center"></td><td></td><td> {{$invoice->loi ?? 94.79}}  €</td><td> {{$invoice->tva_loi ?? '5.5'}} %</td><td>{{$invoice->total_loi ?? 100}} €</td>
				   </tr>
				@endif
			   <tr class="product " >
			   		@php
						$count_articles=count($articles); $i=0;
					@endphp
				   @foreach($articles as $article)
					   @php
					   		$i++;
						   $modele=\App\Models\Modele::find($article->modele);
						   $total_prod_ht=floatval($article->price_ht) * intval($article->qty);
						   $total_prod_ttc=$article->total_ttc;
						   $couleur=$article->couleur;
							if($couleur==1){
								$couleur_text='Extérieur et intérieur blanc';
							}elseif($couleur==2){
								$couleur_text='Extérieur couleur et intérieur blanc';
							}else{
								$couleur_text='Extérieur et intérieur couleur';
							}

						   $cintrage='_1';
						   if($article->cintrage)
						   		$cintrage='_2';

						   $img='img/m'.$modele->type.$cintrage.'.jpg';
						   switch ($modele->type) {
							case 1:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE FENETRE A SOUFFLET EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Ouvrant 70mm
								-	Dormant rénovation, aile de 65
								-   Joint de propreté total
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée KISKA : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
							case 2:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE FENETRE 1 VANTAIL EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Ouvrant 70mm
								-	Dormant rénovation, aile de 65
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Joint de propreté total
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée KISKA : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
							case 3:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE FENETRE 2 VANTAUX EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Ouvrant 70mm
								-	Dormant rénovation, aile de 65
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Joint de propreté total
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée KISKA : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
							case 4:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE FENETRE 2 VANTAUX EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Ouvrant 70mm
								-	Dormant rénovation, aile de 65
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Joint de propreté total
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée KISKA : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
								// fenetre fixe
							case 5:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE FENETRE FIXE EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Dormant rénovation, aile de 65
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
							case 6:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE PORTES-FENETRES EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Ouvrant 70mm
								-	Dormant rénovation, aile de 65
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Joint de propreté total
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Seuil bas Aluminium
								-	Ferrage standard
								-	Poignée KISKA : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple ou serrure à barillet
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE';
								break;
							case 7:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE PORTES-FENETRES EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
								-	Système d’ouverture Oscillo-Battant
								-	Parclose Charme
								-	Ouvrant 70mm
								-	Dormant rénovation, aile de 65
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Joint de propreté total
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/16/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Seuil bas Aluminium
								-	Ferrage standard
								-	Poignée KISKA : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
								-	Performance thermique du vitrage : Uw = 1,1 W/m².K
								-	Facteur solaire : Sw = 0.45 W/m².K
								-	Fermeture par crémone simple ou serrure à barillet
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE';
								break;
								case 8:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES ALUMINIUM DE LA MARQUE OKNOPLAST - GAMME ALUHAUS
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE COULISSANT EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Ouvrant 44mm
								-	Dormant rénovation, aile de 60
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Bouclier thermique
								-	Rail aluminium anodisé
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/20/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée CUADRO : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacent)
								-	Coefficient de transmission surfacique : Uw = 1,77 W/m².K
								-	Performance thermique du vitrage : Uw = 1,77 W/m².K
								-	Facteur solaire : Sw = 0,43 W/m².K
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
								case 9:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES ALUMINIUM DE LA MARQUE OKNOPLAST - GAMME ALUHAUS
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE COULISSANT EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Ouvrant 44mm
								-	Dormant rénovation, aile de 60
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Bouclier thermique
								-	Rail aluminium anodisé
								-	Couleur 2 faces : '.$couleur_text.'
								-	Vitrage 4/20/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée CUADRO : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,77 W/m².K
								-	Performance thermique du vitrage : Uw = 1,77 W/m².K
								-	Facteur solaire : Sw = 0,43 W/m².K
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;
								case 10:
								$desc='
								-	POSE EN RENOVATION DE MENUISERIES ALUMINIUM DE LA MARQUE OKNOPLAST - GAMME ALUHAUS
								-	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
								-	INSTALLATION DE COULISSANT EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
								-	Ouvrant 44mm
								-	Dormant rénovation, aile de 60
								-	Dim. Fabrication (Dos de dormant sans les ailes)
								-	Bouclier thermique
								-	Rail aluminium anodisé
								-	Couleur 2 faces : Blanc (Ral 9016) Modification en fonction de la couleur choisie
								-	Vitrage 4/20/4 FE (argon) Ug = 1,1
								-	Intercalaire Warm-Edge Noir 9005
								-	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
								-	Pièce d’appui non comprise dans la hauteur
								-	Ferrage standard
								-	Poignée CUADRO : Blanc
								-	Hauteur de poignée standard
								-	2 aérateurs à fente Aéromat (suivant emplacement)
								-	Coefficient de transmission surfacique : Uw = 1,77 W/m².K
								-	Performance thermique du vitrage : Uw = 1,77 W/m².K
								-	Facteur solaire : Sw = 0,43 W/m².K
								-	Habillage intérieur : A déterminer au métrage
								-	Habillage extérieur : A déterminer au métrage
								-	LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.';
								break;

								// Porte

							}

					   @endphp
					   <tr class="product"  >
						   <td @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif ><img src="{!! public_path($img)!!}"   style="max-width:120px;max-height:90px;" /></td><td  @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif class="text" ><b>{{$article->text}} @if($article->note!='')<br>{{$article->note}} @endif </b><br>{!!nl2br($desc)!!}</td><td @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif >{{$article->qty}}</td><td @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif >{{$article->price_ht}} €</td><td @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif>{{$total_prod_ht}} €</td><td @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif >5.5 %</td><td @if($i!=$count_articles) style="border-bottom: 1px solid #f07f32" @endif >{{$total_prod_ttc}} €</td>
					   </tr>
				   @endforeach
			   </tr>
			   <tr class="product " >
			   		@php
						$count_portes=count($portes); $i=0;
					@endphp
				   	@foreach($portes as $porte)
					   @php
					   		$i++;
						   	$door=\App\Models\Door::find($porte->door);
						   	$total_prod_ht=floatval($porte->price_ht) * intval($porte->qty);
						   	$total_prod_ttc=$porte->total_ttc;
							$groupe=$porte->groupe;
						   	$couleur=$porte->couleur;
							if($groupe==1){
								$couleur_text= $couleur.' (Extérieur couleur et intérieur blanc) ';
							}else{
								$couleur_text= $couleur.' (Extérieur et intérieur couleur) ';
							}

							$desc='
							- Gamme Koncept
							- Ouvrant 70mm
							- Dormant rénovation, aile de 35
							- Dim. Fabrication (Dos de dormant sans les ailes)
							- Joint de propreté total
							- Couleur 2 faces : '.$couleur_text .'
							- Panneaux de portes à définir (catalogue)
							- Seuil bas aluminium
							- Ferrage standard
							- Poignée double béquille
							- Crémone 3 points auto (GU Sécury Automatic)
							- Type de cylindre : Sécurité (Standard)
							- Paumelle : D3D ou GU HAHN
							- Hauteur de poignée standard
							- Habillage intérieur : A déterminé au métrage
							- Habillage extérieur : A déterminer au métrage
							- LES ELEMENTS SUIVANT SONT A CONFIRMER AU METTRAGE.
							';
						   	$img='img/m11.jpg';

					   @endphp
					   <tr class="product"  >
						   <td @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif ><img src="{!! public_path($img)!!}"   style="max-width:120px;max-height:90px;" /></td><td  @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif class="text" ><b>{{$porte->text}} @if($porte->note!='')<br>{{$porte->note}} @endif </b><br>{!!nl2br($desc)!!}</td><td @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif >{{$porte->qty}}</td><td @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif >{{$porte->price_ht}} €</td><td @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif>{{$total_prod_ht}} €</td><td @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif >5.5 %</td><td @if($i!=$count_portes) style="border-bottom: 1px solid #f07f32" @endif >{{$total_prod_ttc}} €</td>
					   </tr>
				  	@endforeach
			   </tr>

			   <tr class="product " >
			   		@php
						$count_volets=count($volets); $i=0;
					@endphp
				   	@foreach($volets as $volet)
					   @php
					   		$i++;
						   	$shutter=\App\Models\Shutter::find($volet->shutter);
						   	$total_prod_ht=floatval($volet->price_ht) * intval($volet->qty);
						   	$total_prod_ttc=$volet->total_ttc;
						   	$couleur=$volet->couleur;
							if($shutter->type==1){
								$desc='
								VOLET ROULANT SOMFI
								<b>FOURNITURE ET POSE EN RENOVATION DE VOLET ROULANT SOLAIRE</b>
								DE LA MARQUE FUTUROL
								CAISSON A PAN COUPE
								RENOVATION LAMES ALUMINIUM ISOLEE 43 MM
								COULISSE 53x22
								MOTEUR SOLAIRE SOMFI
								EMETTEURS MURAL 1 CANAL
								GARANTIE 7 ANS PIECE, MAIN D’ŒUVRE ET DEPLACEMENT)
								COULEUR : '.$couleur.'<br>'.$volet->text;
								;
							}
							if($shutter->type==2){
								$desc='
								VOLET ROULANT FUTURCOM
								<b>FOURNITURE ET POSE EN RENOVATION DE VOLET ROULANT SOLAIRE DE LA MARQUE FUTUROL</b>
								CAISSON A PAN COUPE
								RENOVATION LAMES ALUMINIUM ISOLEE 43 MM
								COULISSE 53x22
								MOTEUR SOLAIRE FUTURCOM
								EMETTEURS MURAL 1 CANAL
								GARANTIE 7 ANS PIECE (HORS FRAIS DE DEPLACEMENT ET MAIN D’ŒUVRE)
								COULEUR : '.$couleur.'<br>'.$volet->text;
							}
							if($shutter->type==3){
								$desc='
								VOLET ROULANT FUTURCOM AVEC MOUSTIQUAIRE MOTORISEE INTEGREE
								<b>FOURNITURE ET POSE EN RENOVATION DE VOLET ROULANT SOLAIRE DE LA MARQUE FUTUROL</b>
								CAISSON A PAN COUPE
								RENOVATION LAMES ALUMINIUM ISOLEE 43 MM
								COULISSE 53x22
								MOTEUR SOLAIRE FUTURCOM
								EMETTEURS MURAL 1 CANAL
								GARANTIE 7 ANS PIECE (HORS FRAIS DE DEPLACEMENT ET MAIN D’ŒUVRE)
								COULEUR : '.$couleur.'<br>'.$volet->text;
							}
						   	$img='img/volet.png';

					   @endphp
					   <tr class="product"  >
						   <td @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif ><img src="{!! public_path($img)!!}"   style="max-width:120px;max-height:90px;" /></td><td  @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif class="text" >{!!nl2br($desc)!!} @if($volet->note!='')<br>{{$volet->note}} @endif </b></td><td @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif >{{$volet->qty}}</td><td @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif >{{$volet->price_ht}} €</td><td @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif>{{$total_prod_ht}} €</td><td @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif >5.5 %</td><td @if($i!=$count_volets) style="border-bottom: 1px solid #f07f32" @endif >{{$total_prod_ttc}} €</td>
					   </tr>
				  	@endforeach
			   </tr>


			   @if($invoice->remise>0)
				   <tr class="product" style="color:#f07f32">
					   <td colspan="2">Remise Catalogue Groupe HER ENR</td><td style="text-align:center"></td><td></td><td> {{$invoice->remise}}  €</td><td> {{$invoice->tva_remise ?? '5.5'}} %</td><td>{{$invoice->total_remise}} €</td>
				   </tr>
			   @endif
		   </tbody>
	   </table>

	   <div style="width:100%;page-break-inside: avoid;">
		   <div style="width:67%;float:left;font-size:9px">
		   		@if($invoice->aide_cee>0)
			   		<p class="text" style="font-size:9px;font-weight:normal!important;">Tout ou partie des travaux relatifs à ce devis ou bon de commande sont éligibles à une prime d'un montant de {{number_format($invoice->aide,0,',',' ')}} euros dont EDF (SIREN 552 081 317) est à l'origine dans le cadre du dispositif des Certificats d'Economies d'Energie. Le montant de cette prime ne pourra être révisé à la baisse qu'en cas de modification du volume de Certificats d'Economies d'Energie attaché à l'opération ou aux opérations d'économies d'énergie ou de la situation de précarité énergétique et ce, de manière proportionnelle. Dans le cadre de la réglementation un contrôle qualité des travaux sur site ou par contact pourra être demandé. Un refus de ce contrôle sur site ou par contact via EDF ou un prestataire d'EDF conduira au refus de cette prime par EDF.</p><br>
			   	@endif
			   {!!nl2br($invoice->description) !!}
			   <div class="clearfix"></div>
			   @if($invoice->chaudiere!='' && $invoice->chaudiere!='Autre')
				   Dépose de la chaudière individuelle: <b> Chaudière à {{$invoice->chaudiere}}</b><br>
			   @endif
			   @if($invoice->chauffage!='')<b> Chauffage {{$invoice->chauffage}}</b><br>@endif
				<b>Délai de Livraison : 180 jours</b><br>
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
		   <div style="width:55%;float:left;font-size:9px;padding-top:10px;padding-right:20px">
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
					   <table class="financement" style="color:black">
							@if($invoice->modalite=='4 Chèques' || $invoice->modalite=='3 Chèques' || $invoice->modalite=='2 Chèques' || $invoice->modalite=='Chèque' && $invoice->montant1>0 )
					 		<tr><td class="vtop">Montant:</td><td class="vtop" style="padding-right:20px;font-weight:bold;">  {{number_format($invoice->montant1,2,',',' ')}} €</td><td class="vtop">Note:</td><td class=" vtop">{{ $invoice->note1 }}</td></tr>
							@endif
							@if($invoice->modalite=='4 Chèques' || $invoice->modalite=='3 Chèques'|| $invoice->modalite=='2 Chèques' && $invoice->montant2>0   )
							<tr><td class="vtop">Montant 2:</td><td class="vtop" style="padding-right:20px;font-weight:bold;">  {{number_format($invoice->montant2,2,',',' ')}} €</td><td class="vtop">Note 2:</td><td class=" vtop">{{ $invoice->note2 }}</td></tr>
							@endif
							@if($invoice->modalite=='4 Chèques' || $invoice->modalite=='3 Chèques' && $invoice->montant3>0  )
							<tr><td class="vtop">Montant 3:</td><td class="vtop" style="padding-right:20px;font-weight:bold;">  {{number_format($invoice->montant3,2,',',' ')}} €</td><td class="vtop">Note 3</td><td class=" vtop">{{ $invoice->note3 }}</td></tr>
							@endif
							@if($invoice->modalite=='4 Chèques'  && $invoice->montant4>0  )
							<tr><td class="vtop">Montant 4:</td><td class="vtop" style="padding-right:20px;font-weight:bold;">  {{number_format($invoice->montant4,2,',',' ')}} €</td><td class="vtop">Note 4:</td><td class=" vtop">{{ $invoice->note4 }}</td></tr>
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


@endsection
