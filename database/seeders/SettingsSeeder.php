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
                    ],
                    [
                        'name' => 'Fenêtre 1V',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '2',
                        'genre' => '1',//PVC
                    ],
                    [
                        'name' => 'Fenêtre 2V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '3',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Fenêtre 3V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '4',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Fenêtre 4V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '11',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Fenêtre fixe',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '5',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Porte fenêtre 1V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '6',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Porte fenêtre 2V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '7',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Coulissant 2',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '9',
                        'genre' => '1',
                    ],

                    //ALU
                    [
                        'name' => 'Fenêtre à souflet',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '1',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Fenêtre 1V',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '2',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Fenêtre 2V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '3',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Fenêtre fixe',
                        'value' => '2.7',
                        'model' => 'Modele',
                        'model_id' => '5',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Porte fenêtre 1V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '6',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Porte fenêtre 2V',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '7',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Coulissant 1',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '8',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Coulissant 2',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '9',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Coulissant 3',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '10',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Porte Fenêtre serrure 1 vantail',
                        'value' => '2.6',
                        'model' => 'Modele',
                        'model_id' => '12',
                        'genre' => '2',

                    ],

                    //volets
                    [
                        'name' => 'Multicom',
                        'value' => '2.6',
                        'model' => 'Shutter',
                        'model_id' => '1',
                        'genre' => '0',
                    ],
                    [
                        'name' => 'Futurcom',
                        'value' => '2.6',
                        'model' => 'Shutter',
                        'model_id' => '2',
                        'genre' => '0',
                    ],
                    [
                        'name' => 'Futurcom avec moustiquaire',
                        'value' => '2.6',
                        'model' => 'Shutter',
                        'model_id' => '3',
                        'genre' => '0',
                    ],


                    // Groupes couleurs
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G1',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '1',
                        'genre' => '1',

                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G2',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '2',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '3',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G1',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '4',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G2',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '5',
                        'genre' => '1',
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '6',
                        'genre' => '1',
                    ],
                    //genre 2
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G1',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '1',
                        'genre' => '2',

                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G2',
                        'value' => '200',
                        'model' => 'Color',
                        'model_id' => '2',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Extérieur couleur, Interieur blanc G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '3',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G1',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '4',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G2',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '5',
                        'genre' => '2',
                    ],
                    [
                        'name' => 'Extérieur couleur & intérieur couleur G3',
                        'value' => '300',
                        'model' => 'Color',
                        'model_id' => '6',
                        'genre' => '2',
                    ],
                    // coeff cintrage
                    [
                        'name' => 'Cintrage',
                        'value' => '1.4',
                        'model' => 'Bending',
                        'model_id' => '1',
                        'genre' => '0',
                    ],
                    // pose menuiserie pour les moment pour tous égale à 200
                    [
                        'name' => 'Pose menuiserie',
                        'value' => '200',
                        'model' => 'Pose',
                        'model_id' => '1',
                        'genre' => '0',
                    ]

                ];

            $setting = Setting::insert($settings);
            //Creation of the seeder in the DB;
            //Seeders::create(array('class_name'=>__CLASS__));
        }
    }
}
