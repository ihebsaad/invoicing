<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',7)->where('genre',1)->count();

        //Check if the seeder exist in the DB
        //Porte fenetre 2V
        if ($seeder==0) {
            $modeles =
            [
            /*Larg= 1200*/
                [
                    'genre'    =>1 ,  //pvc
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2000,
                    'largeur'  =>1200 ,
                    'prix'  =>782 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2100,
                    'largeur'  =>1200 ,
                    'prix'  =>805 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2200,
                    'largeur'  =>1200 ,
                    'prix'  =>824 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2300,
                    'largeur'  =>1200 ,
                    'prix'  =>860 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2400,
                    'largeur'  =>1200 ,
                    'prix'  =>868 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2500,
                    'largeur'  =>1200 ,
                    'prix'  =>890 ,
                ],

            /*Larg= 1300*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1300 ,
                'prix'  =>805 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1300 ,
                'prix'  =>828 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1300 ,
                'prix'  =>852 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1300 ,
                'prix'  =>882 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1300 ,
                'prix'  =>895 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1300 ,
                'prix'  =>919 ,
            ],
            /*Larg= 1400*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1400 ,
                'prix'  =>828 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1400 ,
                'prix'  =>852 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1400 ,
                'prix'  =>874 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1400 ,
                'prix'  =>910 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1400 ,
                'prix'  =>922 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1400 ,
                'prix'  =>945 ,
            ],
            /*Larg= 1500*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1500 ,
                'prix'  =>853 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1500 ,
                'prix'  =>874 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1500 ,
                'prix'  =>900 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1500 ,
                'prix'  =>934 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1500 ,
                'prix'  =>945 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1500 ,
                'prix'  =>975 ,
            ],
            /*Larg= 1600*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1600 ,
                'prix'  =>874 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1600 ,
                'prix'  =>900 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1600 ,
                'prix'  =>927 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1600 ,
                'prix'  =>960 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1600 ,
                'prix'  =>975 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1600 ,
                'prix'  =>1001 ,
            ],
            /*Larg= 1700*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1700 ,
                'prix'  =>900 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1700 ,
                'prix'  =>923 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1700 ,
                'prix'  =>952 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1700 ,
                'prix'  =>984 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1700 ,
                'prix'  =>1001 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1700 ,
                'prix'  =>1023 ,
            ],
            /*Larg= 1800*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1800 ,
                'prix'  =>931 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1800 ,
                'prix'  =>958 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1800 ,
                'prix'  =>984 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1800 ,
                'prix'  =>1023 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1800 ,
                'prix'  =>1037 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1800 ,
                'prix'  =>1065 ,
            ],
            /*Larg= 1900*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1900 ,
                'prix'  =>812 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1900 ,
                'prix'  =>981 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1900 ,
                'prix'  =>1008 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1900 ,
                'prix'  =>1084 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1900 ,
                'prix'  =>1065 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1900 ,
                'prix'  =>1091 ,
            ],
            /*Larg= 2000*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>2000 ,
                'prix'  =>978 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>2000 ,
                'prix'  =>1008 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>2000 ,
                'prix'  =>1037 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>2000 ,
                'prix'  =>1076 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>2000 ,
                'prix'  =>1087 ,
            ],
            /*Larg= 2100*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>2100 ,
                'prix'  =>1001 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>2100 ,
                'prix'  =>1035 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>2100 ,
                'prix'  =>1058 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>2200 ,
                'prix'  =>1071 ,
            ]

        ];

            Modele::insert($modeles);

        }


    }
}
