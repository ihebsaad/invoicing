<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class ModelesSouff_ALU extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',1)->where('genre',2)->count();

        //Check if the seeder exist in the DB
        // fenetre à soufflet  ALU
        if ($seeder==0) {
            $modeles =
            [
            /*larg= 500*/
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 500,
                    'largeur'  =>500 ,
                    'prix'  =>140 ,
				],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    => 1,
                    'hauteur'    =>600 ,
                    'largeur'  =>500 ,
                    'prix'  => 148,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    => 1,
                    'hauteur'    => 700,
                    'largeur'  =>500 ,
                    'prix'  => 151,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    => 1,
                    'hauteur'    => 800,
                    'largeur'  =>500 ,
                    'prix'  =>170 ,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    => 1,
                    'hauteur'    => 900,
                    'largeur'  =>500 ,
                    'prix'  => 177,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1000,
                    'largeur'  =>500 ,
                    'prix'  => 184,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    =>1100 ,
                    'largeur'  =>500 ,
                    'prix'  =>190 ,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1200,
                    'largeur'  =>500 ,
                    'prix'  => 197,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1300,
                    'largeur'  =>500 ,
                    'prix'  => 201,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1400,
                    'largeur'  =>500 ,
                    'prix'  => 210,
                ],
		/*		[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1500,
                    'largeur'  =>500 ,
                    'prix'  => 239,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1600,
                    'largeur'  =>500 ,
                    'prix'  => 246,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1700,
                    'largeur'  =>500 ,
                    'prix'  => 276,
                ],
				[
                    'genre'    =>2 ,
					'type'    =>1 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 1800,
                    'largeur'  =>500 ,
                    'prix'  =>286 ,
                ],*/

            /*Larg= 600*/
            [
                'genre'    =>2 ,
 	 	 	    'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 500,
                'largeur'  =>600 ,
                'prix'  => 148,
            ],
            [
                'genre'    =>2 ,
 	 	 	    'type'    =>1 ,
                'couleur'    => 1,
                'hauteur'    =>600 ,
                'largeur'  =>600 ,
                'prix'  => 152,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    => 1,
                'hauteur'    => 700,
                'largeur'  =>600 ,
                'prix'  => 159,
            ],
            [
                'genre'    =>2 ,
 	 	 	    'type'    =>1 ,
                'couleur'    => 1,
                'hauteur'    => 800,
                'largeur'  =>600 ,
                'prix'  => 177,
            ],
            [
                'genre'    =>2 ,
 	 	 	    'type'    =>1 ,
                'couleur'    => 1,
                'hauteur'    => 900,
                'largeur'  =>600 ,
                'prix'  => 184,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1000,
                'largeur'  =>600 ,
                'prix'  => 190,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    =>1100 ,
                'largeur'  =>600 ,
                'prix'  => 197,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1200,
                'largeur'  =>600 ,
                'prix'  => 201,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1300,
                'largeur'  =>600 ,
                'prix'  => 213,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1400,
                'largeur'  =>600 ,
                'prix'  => 219,
            ],
    /*        [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1500,
                'largeur'  =>600 ,
                'prix'  => 251,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1600,
                'largeur'  =>600 ,
                'prix'  =>259 ,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1700,
                'largeur'  =>600 ,
                'prix'  => 290,
            ],
            [
                'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>600 ,
                'prix'  => 301,
            ],*/
         /*Larg=700*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>700 ,
            'prix'  => 152,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>700 ,
            'prix'  => 159,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>700 ,
            'prix'  => 163,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>700 ,
            'prix'  => 184,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>700 ,
            'prix'  => 190,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>700 ,
            'prix'  => 197,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>700 ,
            'prix'  => 206,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>700 ,
            'prix'  => 213,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>700 ,
            'prix'  => 223,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>700 ,
            'prix'  => 232,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>700 ,
            'prix'  => 265,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>700 ,
            'prix'  => 293,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>700 ,
            'prix'  => 303,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>700 ,
            'prix'  => 314,
        ],*/
        /*larg=800*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>800 ,
            'prix'  => 159,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>800 ,
            'prix'  => 163,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>800 ,
            'prix'  => 172,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>800 ,
            'prix'  => 190,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>800 ,
            'prix'  => 197,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>800 ,
            'prix'  => 210,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>800 ,
            'prix'  => 215,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>800 ,
            'prix'  => 223,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>800 ,
            'prix'  => 237,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>800 ,
            'prix'  => 243,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>800 ,
            'prix'  => 288,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>800 ,
            'prix'  => 321,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>800 ,
            'prix'  => 332,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>800 ,
            'prix'  => 340,
        ],*/
         /*Larg=900*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>900 ,
            'prix'  => 163,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>900 ,
            'prix'  => 172,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>900 ,
            'prix'  => 190,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>900 ,
            'prix'  => 197,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>900 ,
            'prix'  => 210,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>900 ,
            'prix'  => 215,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>900 ,
            'prix'  => 226,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>900 ,
            'prix'  => 240,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>900 ,
            'prix'  => 247,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>900 ,
            'prix'  => 256,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>900 ,
            'prix'  => 301,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>900 ,
            'prix'  => 332,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>900 ,
            'prix'  => 343,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1800,
            'largeur'  =>900 ,
            'prix'  => 354,
        ],*/
        /*larg=1000*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1000 ,
            'prix'  => 172,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1000 ,
            'prix'  => 178,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1000 ,
            'prix'  => 181,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1000 ,
            'prix'  => 210,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1000 ,
            'prix'  => 215,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1000 ,
            'prix'  => 226,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1000 ,
            'prix'  => 240,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1000 ,
            'prix'  => 249,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1000 ,
            'prix'  => 256,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1000 ,
            'prix'  => 270,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1000 ,
            'prix'  =>334 ,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>1000 ,
            'prix'  => 347,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>1000 ,
            'prix'  => 360,
        ],*/
        /*larg=1100*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1100 ,
            'prix'  => 178,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1100 ,
            'prix'  => 181,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1100 ,
            'prix'  => 190,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1100 ,
            'prix'  => 215,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1100 ,
            'prix'  => 226,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1100 ,
            'prix'  => 240,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1100 ,
            'prix'  => 249,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1100 ,
            'prix'  => 256,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1100 ,
            'prix'  => 270,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1100 ,
            'prix'  => 324,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1100 ,
            'prix'  =>347 ,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>1100 ,
            'prix'  => 360,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>1100 ,
            'prix'  => 374,
        ],*/
        /*larg=1200*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1200 ,
            'prix'  => 185,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1200 ,
            'prix'  => 190,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1200 ,
            'prix'  => 201,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1200 ,
            'prix'  => 226,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1200 ,
            'prix'  => 240,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1200 ,
            'prix'  => 249,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1200 ,
            'prix'  => 261,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1200 ,
            'prix'  => 274,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1200 ,
            'prix'  => 283,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1200 ,
            'prix'  => 297,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1200 ,
            'prix'  =>362 ,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>1200 ,
            'prix'  => 374,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1700,
            'largeur'  =>1200 ,
            'prix'  => 374,
        ],*/
        /*larg=1300*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1300 ,
            'prix'  => 190,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1300 ,
            'prix'  => 201,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1300 ,
            'prix'  => 213,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1300 ,
            'prix'  => 237,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1300 ,
            'prix'  => 249,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1300 ,
            'prix'  => 261,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1300 ,
            'prix'  => 274,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1300 ,
            'prix'  => 283,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1300 ,
            'prix'  => 297,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1300 ,
            'prix'  => 309,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1300 ,
            'prix'  =>374 ,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>1300 ,
            'prix'  => 383,
        ],*/
        /*larg=1400*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1400 ,
            'prix'  => 197,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1400 ,
            'prix'  => 210,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1400 ,
            'prix'  => 291,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1400 ,
            'prix'  => 247,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1400 ,
            'prix'  => 256,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1400 ,
            'prix'  => 274,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1400 ,
            'prix'  => 283,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1400 ,
            'prix'  => 297,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1400 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1400 ,
            'prix'  => 324,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1400 ,
            'prix'  =>388 ,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1600,
            'largeur'  =>1400 ,
            'prix'  => 399,
        ],*/
        /*larg=1500*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1500 ,
            'prix'  => 206,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1500 ,
            'prix'  => 219,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1500 ,
            'prix'  => 232,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1500 ,
            'prix'  => 256,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1500 ,
            'prix'  => 270,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1500 ,
            'prix'  => 283,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1500 ,
            'prix'  => 297,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1500 ,
            'prix'  => 312,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1500 ,
            'prix'  => 324,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1500 ,
            'prix'  => 339,
        ],/*
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1500 ,
            'prix'  =>407 ,
        ],*/
        /*larg=1600*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1600 ,
            'prix'  => 213,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1600 ,
            'prix'  => 226,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1600 ,
            'prix'  => 240,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1600 ,
            'prix'  => 270,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1600 ,
            'prix'  => 281,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1600 ,
            'prix'  => 297,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1600 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1600 ,
            'prix'  => 324,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1600 ,
            'prix'  => 33,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1600 ,
            'prix'  => 349,
        ],

        /*larg=1700*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1700 ,
            'prix'  => 223,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1700 ,
            'prix'  => 237,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1700 ,
            'prix'  => 249,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1700 ,
            'prix'  => 281,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1700 ,
            'prix'  => 292,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1700 ,
            'prix'  => 309,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1700 ,
            'prix'  => 324,
        ],
        /*larg=1800*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    =>1 ,
            'hauteur'    => 500,
            'largeur'  =>1800 ,
            'prix'  => 232,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1800 ,
            'prix'  => 247,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1800 ,
            'prix'  => 261,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1800 ,
            'prix'  => 288,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1800 ,
            'prix'  => 303,
        ],

        /*larg=1900*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>500 ,
            'largeur'  =>1900 ,
            'prix'  => 240,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>1900 ,
            'prix'  => 254,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>1900 ,
            'prix'  => 270,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>1900 ,
            'prix'  => 299,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 900,
            'largeur'  =>1900 ,
            'prix'  => 315,
        ],

        /*larg=2000*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>500 ,
            'largeur'  =>2000 ,
            'prix'  => 243,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>2000 ,
            'prix'  => 256,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>2000 ,
            'prix'  => 274,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>2000 ,
            'prix'  => 288,
        ],
        /*larg=2100*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>500 ,
            'largeur'  =>2100 ,
            'prix'  => 249,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>2100 ,
            'prix'  => 167,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>2100 ,
            'prix'  => 281,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>2100 ,
            'prix'  => 297,
        ],
        /*larg=2200*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>500 ,
            'largeur'  =>2200 ,
            'prix'  => 256,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>600 ,
            'largeur'  =>2200 ,
            'prix'  => 274,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>2200 ,
            'prix'  => 292,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>2200 ,
            'prix'  => 309,
        ],
        /*larg=2300*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    =>500 ,
            'largeur'  =>2300 ,
            'prix'  => 267,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 600,
            'largeur'  =>2300 ,
            'prix'  => 281,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 700,
            'largeur'  =>2300 ,
            'prix'  => 299,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>1 ,
            'couleur'    => 1,
            'hauteur'    => 800,
            'largeur'  =>2300 ,
            'prix'  => 315,
        ],
    ];

            Modele::insert($modeles);

        }


    }
}
