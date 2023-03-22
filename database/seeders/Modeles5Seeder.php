<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',5)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [

            /*Larg= 600*/
            [
                'genre'    =>1 ,
				'type'    =>5 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>600 ,
                'prix'  => 1223,
            ],
            [
                'genre'    =>1 ,
				'type'    =>5 ,
                'couleur'    => 1,
                'hauteur'    =>2100 ,
                'largeur'  =>600 ,
                'prix'  => 1355,
            ],
            [
                'genre'    =>1 ,
				'type'    =>5 ,
                'couleur'    => 1,
                'hauteur'    => 2200,
                'largeur'  =>600 ,
                'prix'  => 1394,
            ],
            [
                'genre'    =>1 ,
				'type'    =>5 ,
                'couleur'    => 1,
                'hauteur'    => 2300,
                'largeur'  =>600 ,
                'prix'  => 1464,
            ],
            [
                'genre'    =>1 ,
				'type'    =>5 ,
                'couleur'    => 1,
                'hauteur'    => 2400,
                'largeur'  =>600 ,
                'prix'  => 1493,
            ],
            [
                'genre'    =>1 ,
				'type'    =>5 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>600 ,
                'prix'  => 1508,
            ],

        /*Larg=700*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>700 ,
            'prix'  => 1394,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>700 ,
            'prix'  => 1431,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>700 ,
            'prix'  => 1477,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>700 ,
            'prix'  => 1547,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>700 ,
            'prix'  => 1588,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>700 ,
            'prix'  => 1600,
        ],
        /*larg=800*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>800 ,
            'prix'  => 1477,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>800 ,
            'prix'  => 1508,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>800 ,
            'prix'  => 1564,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>800 ,
            'prix'  => 1625,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>800 ,
            'prix'  => 1663,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>800 ,
            'prix'  => 1692,
        ],
        /*Larg=900*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>900 ,
            'prix'  => 1564,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>900 ,
            'prix'  => 1612,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>900 ,
            'prix'  => 1649,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>900 ,
            'prix'  => 1729,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>900 ,
            'prix'  => 1760,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>900 ,
            'prix'  => 1788,
        ],
        /*larg=1000*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1000 ,
            'prix'  => 1635,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1000 ,
            'prix'  => 1692,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1000 ,
            'prix'  => 1729,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1000 ,
            'prix'  => 1797,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1000 ,
            'prix'  => 1850,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>1000 ,
            'prix'  => 1882,
        ],
        /*larg=1100*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>1100 ,
            'prix'  => 1712,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    =>2100 ,
            'largeur'  =>1100 ,
            'prix'  => 1760,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2200,
            'largeur'  =>1100 ,
            'prix'  => 1816,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2300,
            'largeur'  =>1100 ,
            'prix'  => 1890,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>5 ,
            'couleur'    => 1,
            'hauteur'    => 2400,
            'largeur'  =>1100 ,
            'prix'  => 1941,
        ],

            ];

            Modele::insert($modeles);

        }


    }
}
