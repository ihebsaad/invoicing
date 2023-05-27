<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles8PVCSeeder extends Seeder  //coulissant 1
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',8)->where('genre',1)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [

				/*larg=1800*/
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>1800 ,
					'prix'  => 1498,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>1800 ,
					'prix'  => 1526,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>1800 ,
					'prix'  => 1590,
				],
                [
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2350,
					'largeur'  =>1800 ,
					'prix'  => 1822,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2500,
					'largeur'  =>1800 ,
					'prix'  => 1860,
				],

                	/*larg=2250*/
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2250 ,
					'prix'  => 1640,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2250 ,
					'prix'  => 1711,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2250 ,
					'prix'  => 1784,
				],
                [
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2350,
					'largeur'  =>2250 ,
					'prix'  => 1985,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2500,
					'largeur'  =>2250 ,
					'prix'  => 2026,
				],

				/*larg=2750*/
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2750 ,
					'prix'  => 1783,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2750 ,
					'prix'  => 1859,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2750 ,
					'prix'  => 1939,
				],
                [
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2350,
					'largeur'  =>2750 ,
					'prix'  => 2156,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2500,
					'largeur'  =>2750 ,
					'prix'  => 2200,
				],

				/*larg=3250*/
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>3250 ,
					'prix'  => 1925,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>3250 ,
					'prix'  => 2008,
				],
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>3250 ,
					'prix'  => 2092,
				],

				/*larg=3750*/
				[
					'genre'    =>1 ,
					'type'    =>8 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>3750 ,
					'prix'  => 2171,
				],

			];

            Modele::insert($modeles);

        }


    }
}
