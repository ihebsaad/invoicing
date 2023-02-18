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
        $seeder = Modele::where('type',1)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [
				[
                'type'    => ,
                'couleur'    => ,
                'hauteur'    => ,
                'largeur'  => ,
                'prix'  => ,
				],

            ];
        }

        Modele::create($modeles);

    }
}
