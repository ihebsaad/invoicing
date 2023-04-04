<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles9Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',9)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [

            /*Larg= 1800*/
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>1800 ,
                'prix'  => 1605,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    =>2000 ,
                'largeur'  =>1800 ,
                'prix'  => 1637,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2200,
                'largeur'  =>1800 ,
                'prix'  => 1707,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2350,
                'largeur'  =>1800 ,
                'prix'  => 1943,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2500,
                'largeur'  =>1800 ,
                'prix'  => 1985,
            ],
        /*Larg=2250*/
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>2250 ,
                'prix'  => 1764,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    =>2000 ,
                'largeur'  =>2250 ,
                'prix'  => 1841,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2200,
                'largeur'  =>2250 ,
                'prix'  => 1920,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2350,
                'largeur'  =>2250 ,
                'prix'  => 2126,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2500,
                'largeur'  =>2250 ,
                'prix'  => 2172,
            ],
        /*larg=2750*/
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>2750 ,
                'prix'  => 1929,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    =>2000 ,
                'largeur'  =>2750 ,
                'prix'  => 2011,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2200,
                'largeur'  =>2750 ,
                'prix'  => 2097,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2350,
                'largeur'  =>2750 ,
                'prix'  => 2318,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2500,
                'largeur'  =>2750 ,
                'prix'  => 2367,
            ],
        /*Larg=3250*/
           [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>3250 ,
                'prix'  => 2093,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    =>2000 ,
                'largeur'  =>3250 ,
                'prix'  => 2181,
            ],
            [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    => 1,
                'hauteur'    => 2200,
                'largeur'  =>2750 ,
                'prix'  => 2271,
            ],
        /*larg=3750*/
           [
                'genre'    =>2 ,
				'type'    =>9 ,
                'couleur'    =>1 ,
                'hauteur'    => 1800,
                'largeur'  =>3750 ,
                'prix'  => 2360,
            ],


             ];

            Modele::insert($modeles);

        }


    }
}
