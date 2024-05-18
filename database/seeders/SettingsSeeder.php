<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Seeders;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Seeders::where('class_name', __CLASS__)->count();

        //Check if the seeder exist in the DB
        //if ($seeder==0) {
        if (Setting::count() == 0) {
            $settings =
                [
                //PVC
                    [
                        'name' => 'Fenêtre à souflet',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '1',
                        'genre' => '1',//PVC
                        'text' => '-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE FENETRE A SOUFFLET EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -   Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Fenêtre 1V',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '2',
                        'genre' => '1',//PVC
                        'text' =>	'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE FENETRE 1 VANTAIL EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Fenêtre 2V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '3',
                        'genre' => '1',
                        'text' =>'- POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE FENETRE 2 VANTAUX EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Fenêtre 3V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '4',
                        'genre' => '1',
                        'text' =>'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE FENETRE 2 VANTAUX EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Fenêtre fixe',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '5',
                        'genre' => '1',
                        'text' =>'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE FENETRE FIXE EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Vitrage 4/16/4 FE (argon) Ug = 1,1
                        -	Intercalaire Warm-Edge Noir 9005
                        -	Appui bas pour dormant rénovation 110.102.2 (haut. 2mm)
                        -	Pièce d’appui non comprise dans la hauteur
                        -	Coefficient de transmission surfacique : Uw = 1,3 W/m².K
                        -	Performance thermique du vitrage : Uw = 1,1 W/m².K
                        -	Facteur solaire : Sw = 0.45 W/m².K
                        -	Fermeture par crémone simple
                        -	Habillage intérieur : A déterminer au métrage
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Porte fenêtre 1V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '6',
                        'genre' => '1',
                        'text' =>'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE PORTES-FENETRES EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Porte fenêtre 2V',
                        'value' => '2.3',
                        'model' => 'Modele',
                        'model_id' => '7',
                        'genre' => '1',
                        'text' =>'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE PORTES-FENETRES EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Fenêtre 4V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '11',
                        'genre' => '1',
                        'text' =>'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE FENETRE 2 VANTAUX EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    //ALU
                    [
                        'name' => 'Fenêtre à souflet',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '1',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Fenêtre 1V',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '2',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Fenêtre 2V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '3',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Fenêtre fixe',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '5',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Porte fenêtre 1V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '6',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Porte fenêtre 2V',
                        'value' => '2.3',
                        'model' => 'Modele',
                        'model_id' => '7',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Coulissant 1',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '8',
                        'genre' => '2',
                        'text' =>'-	POSE DE MENUISERIES ALUMINIUM DE LA MARQUE OKNOPLAST - GAMME ALUHAUS
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Coulissant 2',
                        'value' => '2.3',
                        'model' => 'Modele',
                        'model_id' => '9',
                        'genre' => '2',
                        'text' =>'-	POSE DE MENUISERIES ALUMINIUM DE LA MARQUE OKNOPLAST - GAMME ALUHAUS
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE COULISSANT EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Ouvrant 44mm
                        -	Dormant rénovation, aile de 60
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Bouclier thermique
                        -	Rail aluminium anodisé
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Coulissant 3',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '10',
                        'genre' => '2',
                        'text' =>'-	POSE DE MENUISERIES ALUMINIUM DE LA MARQUE OKNOPLAST - GAMME ALUHAUS
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],
                    [
                        'name' => 'Porte Fenêtre serrure 1 vantail',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '12',
                        'genre' => '2',
                        'text' =>'-	POSE DE MENUISERIES PVC DE LA MARQUE OKNOPLAST – MODELE CHARME MINI – FINITION PURE
                        -	INSTALLATION DE MATERIAUX D’ISOLATION THERMIQUE DES PAROIS VITREES VERTICALES
                        -	INSTALLATION DE PORTES-FENETRES EN DOUBLE VITRAGE VENANT EN REMPLACEMENT DE MENUISERIES SIMPLE VITRAGE
                        -	Système breveté équipé de renforts en acier sur l’ensemble du dormant et des ouvrants
                        -	Système d’ouverture Oscillo-Battant
                        -	Parclose Charme
                        -	Ouvrant 70mm
                        -	Dormant rénovation, aile de 65
                        -	Dim. Fabrication (Dos de dormant sans les ailes)
                        -	Joint de propreté total
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
                        -	Habillage extérieur : A déterminer au métrage'
                    ],

                    //volets
                    [
                        'name' => 'Multicom',
                        'value' => '2.6',
                        'model' => 'Shutter',
                        'model_id' => '1',
                        'genre' => '0',
                        'text' => 'VOLET ROULANT SOMFI
                        <b>FOURNITURE ET POSE DE VOLET ROULANT SOLAIRE</b>
                        DE LA MARQUE FUTUROL
                        CAISSON A PAN COUPE
                        RENOVATION LAMES ALUMINIUM ISOLEE 43 MM
                        COULISSE 53x22
                        MOTEUR SOLAIRE SOMFI
                        EMETTEURS MURAL 1 CANAL
                        GARANTIE 7 ANS PIECE, MAIN D’ŒUVRE ET DEPLACEMENT)',
                    ],
                    [
                        'name' => 'Futurcom',
                        'value' => '2.6',
                        'model' => 'Shutter',
                        'model_id' => '2',
                        'genre' => '0',
                        'text' => 'VOLET ROULANT FUTURCOM
                        <b>FOURNITURE ET POSE DE VOLET ROULANT SOLAIRE DE LA MARQUE FUTUROL</b>
                        CAISSON A PAN COUPE
                        RENOVATION LAMES ALUMINIUM ISOLEE 43 MM
                        COULISSE 53x22
                        MOTEUR SOLAIRE FUTURCOM
                        EMETTEURS MURAL 1 CANAL
                        GARANTIE 7 ANS PIECE (HORS FRAIS DE DEPLACEMENT ET MAIN D’ŒUVRE)',
                    ],
                    [
                        'name' => 'Futurcom avec moustiquaire',
                        'value' => '2.6',
                        'model' => 'Shutter',
                        'model_id' => '3',
                        'genre' => '0',
                        'text' => 'VOLET ROULANT FUTURCOM AVEC MOUSTIQUAIRE MOTORISEE INTEGREE
                        <b>FOURNITURE ET POSE DE VOLET ROULANT SOLAIRE DE LA MARQUE FUTUROL</b>
                        CAISSON A PAN COUPE
                        RENOVATION LAMES ALUMINIUM ISOLEE 43 MM
                        COULISSE 53x22
                        MOTEUR SOLAIRE FUTURCOM
                        EMETTEURS MURAL 1 CANAL
                        GARANTIE 7 ANS PIECE (HORS FRAIS DE DEPLACEMENT ET MAIN D’ŒUVRE)',
                    ],

                    // Groupes couleurs
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G1',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '1',
                        'genre' => '1',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G2',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '2',
                        'genre' => '1',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '3',
                        'genre' => '1',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G1',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '4',
                        'genre' => '1',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G2',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '5',
                        'genre' => '1',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '6',
                        'genre' => '1',
                        'text' =>''
                    ],
                    //genre 2
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G1',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '1',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G2',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '2',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '3',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G1',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '4',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G2',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '5',
                        'genre' => '2',
                        'text' =>''
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '6',
                        'genre' => '2',
                        'text' =>''
                    ],
                    // coeff cintrage
                    [
                        'name' => 'Cintrage',
                        'value' => '1.4',
                        'model' => 'Bending',
                        'model_id' => '1',
                        'genre' => '0',
                        'text' =>''
                    ],
                    // pose menuiserie pour les moment pour tous égale à 200
                    [
                        'name' => 'Pose menuiserie',
                        'value' => '200',
                        'model' => 'Pose',
                        'model_id' => '1',
                        'genre' => '0',
                        'text' =>''
                    ],
                    // text portes
                    [
                        'name' => 'Texte Portes',
                        'value' => '',
                        'model' => 'Door',
                        'model_id' => '1',
                        'genre' => '0',
                        'text' =>'  - Gamme Koncept
                        - Ouvrant 70mm
                        - Dormant rénovation, aile de 35
                        - Dim. Fabrication (Dos de dormant sans les ailes)
                        - Joint de propreté total
                        - Panneaux de portes à définir (catalogue)
                        - Seuil bas aluminium
                        - Ferrage standard
                        - Poignée double béquille
                        - Crémone 3 points auto (GU Sécury Automatic)
                        - Type de cylindre : Sécurité (Standard)
                        - Paumelle : D3D ou GU HAHN
                        - Hauteur de poignée standard
                        - Habillage intérieur : A déterminé au métrage
                        - Habillage extérieur : A déterminer au métrage'
                    ]

                ];

            $setting = Setting::insert($settings);
            //Creation of the seeder in the DB;
            //Seeders::create(array('class_name'=>__CLASS__));
        }
    }
}
