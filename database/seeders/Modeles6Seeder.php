<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',6)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [

            /*Larg= 1200*/
            [
                'genre'    =>1 ,
				'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1200 ,
                'prix'  => 2419,
            ],
            [
                'genre'    =>1 ,
				'type'    =>6 ,
                'couleur'    => 1,
                'hauteur'    =>2100 ,
                'largeur'  =>1200 ,
                'prix'  => 2494,
            ],
            [
                'genre'    =>1 ,
				'type'    =>6 ,
                'couleur'    => 1,
                'hauteur'    => 2200,
                'largeur'  =>1200 ,
                'prix'  => 2557,
            ],
            [
                'genre'    =>1 ,
				'type'    =>6 ,
                'couleur'    => 1,
                'hauteur'    => 2300,
                'largeur'  =>1200 ,
                'prix'  => 2669,
            ],
            [
                'genre'    =>1 ,
				'type'    =>6 ,
                'couleur'    => 1,
                'hauteur'    => 2400,
                'largeur'  =>1200 ,
                'prix'  => 2696,
            ],
            [
                'genre'    =>1 ,
				'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1200 ,
                'prix'  => 2768,
            ],
        /*Larg=1300*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1300 ,
            'prix'  => 2494,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1300 ,
            'prix'  => 2569,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1300 ,
            'prix'  => 2644,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1300 ,
            'prix'  => 2747,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1300 ,
            'prix'  => 2785,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>1300 ,
            'prix'  => 2861,
        ],
        /*larg=1400*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1400 ,
            'prix'  => 2569,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1400 ,
            'prix'  => 2644,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1400 ,
            'prix'  => 2715,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1400 ,
            'prix'  => 2829,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1400 ,
            'prix'  => 2868,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>1400 ,
            'prix'  => 2939,
        ],
        /*Larg=1500*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1500 ,
            'prix'  => 2644,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1500 ,
            'prix'  => 2715,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1500 ,
            'prix'  => 2798,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1500 ,
            'prix'  => 2909,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1500 ,
            'prix'  => 2939,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>1500 ,
            'prix'  => 3038,
        ],
        /*larg=1600*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1600 ,
            'prix'  => 2715,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1600 ,
            'prix'  => 2798,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1600 ,
            'prix'  => 2885,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1600 ,
            'prix'  => 2992,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1600 ,
            'prix'  => 3038,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>1600 ,
            'prix'  => 3118,
        ],
        /*larg=1700*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1700 ,
            'prix'  => 2798,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1700 ,
            'prix'  => 2868,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1700 ,
            'prix'  => 2965,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1700 ,
            'prix'  => 3070,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1700 ,
            'prix'  => 3118,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2500,
            'largeur'  =>1700 ,
            'prix'  => 3196,
        ],
        /*larg=1800*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1800 ,
            'prix'  => 2893,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1800 ,
            'prix'  => 2985,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1800 ,
            'prix'  => 3070,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1800 ,
            'prix'  => 3196,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1800 ,
            'prix'  => 3235,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1800 ,
            'prix'  => 3324,
        ],
        /*larg=1900*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1900 ,
            'prix'  => 2972,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1900 ,
            'prix'  => 3058,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1900 ,
            'prix'  => 3150,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1900 ,
            'prix'  => 3271,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1900 ,
            'prix'  => 3324,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2500,
            'largeur'  =>1900 ,
            'prix'  => 3415,
        ],
       /*larg=2000*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>2000 ,
            'prix'  => 3046,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>2000 ,
            'prix'  => 3150,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>2000 ,
            'prix'  => 3235,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>2000 ,
            'prix'  => 3358,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>2000 ,
            'prix'  => 3402,
        ],
       /*larg=2100*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>2100 ,
            'prix'  => 3118,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>2100 ,
            'prix'  => 3222,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>2100 ,
            'prix'  => 3308,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>2100 ,
            'prix'  => 3434,
        ],
       /*larg=2200*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>2200 ,
            'prix'  => 3157,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>2200 ,
            'prix'  => 3257,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>6 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>2200 ,
            'prix'  => 334,
        ],

             ];

            Modele::insert($modeles);

        }


    }
}
