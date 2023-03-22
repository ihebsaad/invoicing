<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',4)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [
            /*larg= 250*/
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 300,
                    'largeur'  =>250 ,
                    'prix'  => 236,
				],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 400,
                    'largeur'  =>250 ,
                    'prix'  => 243,
				],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 500,
                    'largeur'  =>250 ,
                    'prix'  => 245,
				],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    => 1,
                    'hauteur'    =>600 ,
                    'largeur'  =>250 ,
                    'prix'  => 258,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    => 1,
                    'hauteur'    => 700,
                    'largeur'  =>250 ,
                    'prix'  => 277,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    => 1,
                    'hauteur'    => 800,
                    'largeur'  =>250 ,
                    'prix'  => 284,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    => 1,
                    'hauteur'    => 900,
                    'largeur'  =>250 ,
                    'prix'  => 286,//
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1000,
                    'largeur'  =>250 ,
                    'prix'  => 298,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    =>1100 ,
                    'largeur'  =>250 ,
                    'prix'  => 309,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1200,
                    'largeur'  =>250 ,
                    'prix'  => 325,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1300,
                    'largeur'  =>250 ,
                    'prix'  => 345,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1400,
                    'largeur'  =>250 ,
                    'prix'  => 362,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1500,
                    'largeur'  =>250 ,
                    'prix'  => 362 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1600,
                    'largeur'  =>250 ,
                    'prix'  => 376 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1700,
                    'largeur'  =>250 ,
                    'prix'  => 384 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1800,
                    'largeur'  =>250 ,
                    'prix'  => 383,// faute ?
                ],
                [
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1900,
                    'largeur'  =>250 ,
                    'prix'  => 391 ,
                ],
                [
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2000,
                    'largeur'  =>250 ,
                    'prix'  => 410,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2100,
                    'largeur'  =>250 ,
                    'prix'  => 422,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2200,
                    'largeur'  =>250 ,
                    'prix'  => 435,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2300,
                    'largeur'  =>250 ,
                    'prix'  => 263,//faute ?
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2400,
                    'largeur'  =>250 ,
                    'prix'  => 456,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2500,
                    'largeur'  =>250 ,
                    'prix'  =>476 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2600,
                    'largeur'  =>250 ,
                    'prix'  =>500 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2700,
                    'largeur'  =>250 ,
                    'prix'  =>534 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2800,
                    'largeur'  =>250 ,
                    'prix'  =>561 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2900,
                    'largeur'  =>250 ,
                    'prix'  =>602 ,
                ],
				[
                    'genre'    =>1 ,
					'type'    =>4 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 3000,
                    'largeur'  =>250 ,
                    'prix'  =>634 ,
                ],

            /*Larg= 300*/
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 250,
                'largeur'  =>300 ,
                'prix'  => 233,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 300,
                'largeur'  =>300 ,
                'prix'  => 236,
            ],
			            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 400,
                'largeur'  =>300 ,
                'prix'  => 243,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 500,
                'largeur'  =>300 ,
                'prix'  => 245,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    => 1,
                'hauteur'    =>600 ,
                'largeur'  =>300 ,
                'prix'  => 258,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    => 1,
                'hauteur'    => 700,
                'largeur'  =>300 ,
                'prix'  => 277,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    => 1,
                'hauteur'    => 800,
                'largeur'  =>300 ,
                'prix'  => 284,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    => 1,
                'hauteur'    => 900,
                'largeur'  =>300 ,
                'prix'  => 286,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1000,
                'largeur'  =>300 ,
                'prix'  => 298,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    =>1100 ,
                'largeur'  =>300 ,
                'prix'  => 309,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1200,
                'largeur'  =>300 ,
                'prix'  => 325,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1300,
                'largeur'  =>300 ,
                'prix'  => 345,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1400,
                'largeur'  =>300 ,
                'prix'  => 362,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1500,
                'largeur'  =>300 ,
                'prix'  => 362,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1600,
                'largeur'  =>300 ,
                'prix'  =>376 ,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1700,
                'largeur'  =>300 ,
                'prix'  => 384,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>300 ,
                'prix'  => 383,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 1900,
                'largeur'  =>300 ,
                'prix'  => 391,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>300 ,
                'prix'  => 410,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>300 ,
                'prix'  => 422,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>300 ,
                'prix'  => 435,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>300 ,
                'prix'  => 263,//faute?
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>300 ,
                'prix'  => 456,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>300 ,
                'prix'  => 476,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2600,
                'largeur'  =>300 ,
                'prix'  => 500,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2700,
                'largeur'  =>300 ,
                'prix'  => 534,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2800,
                'largeur'  =>300 ,
                'prix'  => 561,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 2900,
                'largeur'  =>300 ,
                'prix'  => 602,
            ],
            [
                'genre'    =>1 ,
 	 	 	    'type'    =>4 ,
                'couleur'    =>1 ,
                'hauteur'    => 3000,
                'largeur'  =>300 ,
                'prix'  => 634,
            ],

        /*Larg=400*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 250,
            'largeur'  =>400 ,
            'prix'  => 230,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 300,
            'largeur'  =>400 ,
            'prix'  => 245,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 400,
            'largeur'  =>400 ,
            'prix'  => 252,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>400 ,
            'prix'  => 258,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>400 ,
            'prix'  => 277,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>400 ,
            'prix'  => 284,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>400 ,
            'prix'  => 286,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>400 ,
            'prix'  => 298,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>400 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>400 ,
            'prix'  => 325,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>400 ,
            'prix'  => 345,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>400 ,
            'prix'  => 362,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>400 ,
            'prix'  => 362,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>400 ,
            'prix'  => 384,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>400 ,
            'prix'  => 394,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>400 ,
            'prix'  => 412,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>400 ,
            'prix'  => 410,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1900,
            'largeur'  =>400 ,
            'prix'  => 435,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>400 ,
            'prix'  => 447,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2100,
            'largeur'  =>400 ,
            'prix'  => 456,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2200,
            'largeur'  =>400 ,
            'prix'  => 476,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2300,
            'largeur'  =>400 ,
            'prix'  => 295,//faute?
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2400,
            'largeur'  =>400 ,
            'prix'  => 522,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>400 ,
            'prix'  => 530,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2600,
            'largeur'  =>400 ,
            'prix'  => 561,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2700,
            'largeur'  =>400 ,
            'prix'  => 600,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2800,
            'largeur'  =>400 ,
            'prix'  => 632,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2900,
            'largeur'  =>400 ,
            'prix'  => 668,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 3000,
            'largeur'  =>400 ,
            'prix'  => 711,
        ],


        /*larg=500*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 250,
            'largeur'  =>500 ,
            'prix'  => 238,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 300,
            'largeur'  =>500 ,
            'prix'  => 258,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 400,
            'largeur'  =>500 ,
            'prix'  => 264,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>500 ,
            'prix'  => 277,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>500 ,
            'prix'  => 284,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>500 ,
            'prix'  => 286,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>500 ,
            'prix'  => 298,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>500 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>500 ,
            'prix'  => 325,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>500 ,
            'prix'  => 345,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>500 ,
            'prix'  => 362,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>500 ,
            'prix'  => 384,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>500 ,
            'prix'  => 232,//
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>500 ,
            'prix'  => 415,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>500 ,
            'prix'  => 442,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>500 ,
            'prix'  => 455,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>500 ,
            'prix'  => 456,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1900,
            'largeur'  =>500 ,
            'prix'  => 476,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>500 ,
            'prix'  => 502,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2100,
            'largeur'  =>500 ,
            'prix'  => 522,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2200,
            'largeur'  =>500 ,
            'prix'  => 530,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2300,
            'largeur'  =>500 ,
            'prix'  => 326,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2400,
            'largeur'  =>500 ,
            'prix'  => 566,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>500 ,
            'prix'  => 600,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2600,
            'largeur'  =>500 ,
            'prix'  => 627,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2700,
            'largeur'  =>500 ,
            'prix'  => 668,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2800,
            'largeur'  =>500 ,
            'prix'  => 711,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2900,
            'largeur'  =>500 ,
            'prix'  => 751,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 3000,
            'largeur'  =>500 ,
            'prix'  => 794,
        ],
        /*Larg=600*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 250,
            'largeur'  =>600 ,
            'prix'  => 245,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 300,
            'largeur'  =>600 ,
            'prix'  => 264,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 400,
            'largeur'  =>600 ,
            'prix'  => 277,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>600 ,
            'prix'  => 248,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>600 ,
            'prix'  => 286,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>600 ,
            'prix'  => 298,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>600 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>600 ,
            'prix'  => 325,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>600 ,
            'prix'  => 362,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>600 ,
            'prix'  => 376,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>600 ,
            'prix'  => 394,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>600 ,
            'prix'  => 415,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>600 ,
            'prix'  => 260,//
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>600 ,
            'prix'  => 451,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>600 ,
            'prix'  => 486,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>600 ,
            'prix'  => 403,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>600 ,
            'prix'  => 502,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1900,
            'largeur'  =>600 ,
            'prix'  => 530,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>600 ,
            'prix'  => 544,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2100,
            'largeur'  =>600 ,
            'prix'  => 566,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2200,
            'largeur'  =>600 ,
            'prix'  => 576,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2300,
            'largeur'  =>600 ,
            'prix'  => 359,//
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2400,
            'largeur'  =>600 ,
            'prix'  => 627,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>600 ,
            'prix'  => 653,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2600,
            'largeur'  =>600 ,
            'prix'  => 694,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2700,
            'largeur'  =>600 ,
            'prix'  => 733,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2800,
            'largeur'  =>600 ,
            'prix'  => 782,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2900,
            'largeur'  =>600 ,
            'prix'  => 826,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 3000,
            'largeur'  =>600 ,
            'prix'  => 872,
        ],
        /*larg=700*/
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>250 ,
            'largeur'  =>700 ,
            'prix'  => 250,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>300 ,
            'largeur'  =>700 ,
            'prix'  => 267,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>400 ,
            'largeur'  =>700 ,
            'prix'  => 279,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>500 ,
            'largeur'  =>700 ,
            'prix'  => 286,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>700 ,
            'prix'  => 298,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>700 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>700 ,
            'prix'  => 325,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>700 ,
            'prix'  => 362,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>700 ,
            'prix'  => 384,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>700 ,
            'prix'  => 394,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>700 ,
            'prix'  => 434,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>700 ,
            'prix'  => 451,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>700 ,
            'prix'  => 286,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>700 ,
            'prix'  =>500 ,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>700 ,
            'prix'  => 530,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>700 ,
            'prix'  => 548,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>700 ,
            'prix'  => 544,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 1900,
            'largeur'  =>700 ,
            'prix'  => 566,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2000,
            'largeur'  =>700 ,
            'prix'  => 600,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2100,
            'largeur'  =>700 ,
            'prix'  => 610,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2200,
            'largeur'  =>700 ,
            'prix'  => 636,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2300,
            'largeur'  =>700 ,
            'prix'  => 392,//
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2400,
            'largeur'  =>700 ,
            'prix'  => 689,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2500,
            'largeur'  =>700 ,
            'prix'  => 707,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2600,
            'largeur'  =>700 ,
            'prix'  => 746,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2700,
            'largeur'  =>700 ,
            'prix'  => 792,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2800,
            'largeur'  =>700 ,
            'prix'  => 840,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 2900,
            'largeur'  =>700 ,
            'prix'  => 887,
        ],
        [
            'genre'    =>1 ,
 	 	 	 'type'    =>4 ,
            'couleur'    =>1 ,
            'hauteur'    => 3000,
            'largeur'  =>700 ,
            'prix'  => 938,
        ],
            ];

            Modele::insert($modeles);

        }


    }
}
