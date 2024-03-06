<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles12Serrure_Alu extends Seeder  //Porte Fenêtre serrure 1 vantail
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type', 12)->where('genre',2)->count();
        //Coulissant 2V PVC
        //Check if the seeder exist in the DB
        if ($seeder == 0) {
            $modeles =
                [

                    /*larg= 500*/
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2300,
                        'largeur'  => 500,
                        'prix'  => 471,
                    ],


                    /*larg= 600*/
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2300,
                        'largeur'  => 600,
                        'prix'  => 478,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2400,
                        'largeur'  => 1100,
                        'prix'  => 492,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2500,
                        'largeur'  => 600,
                        'prix'  => 508,
                    ],
                    /*larg= 700*/
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 500,
                        'largeur'  => 2300,
                        'prix'  => 483,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 600,
                        'largeur'  => 2400,
                        'prix'  => 502,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 700,
                        'largeur'  => 2500,
                        'prix'  => 513,
                    ],
                    /*larg= 800*/
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2300,
                        'largeur'  => 800,
                        'prix'  => 492,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2400,
                        'largeur'  => 800,
                        'prix'  => 513,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2500,
                        'largeur'  => 800,
                        'prix'  => 527,
                    ],

                    /*larg= 900*/
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2300,
                        'largeur'  => 900,
                        'prix'  => 499,
                    ],
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2400,
                        'largeur'  => 900,
                        'prix'  => 526,
                    ],

                    /*Larg= 1000*/
                    [
                        'genre'    => 2,
                        'type'    => 12,
                        'couleur'    => 1,
                        'hauteur'    => 2300,
                        'largeur'  => 1000,
                        'prix'  => 502,
                    ],
                ];

            Modele::insert($modeles);
        }
    }
}
