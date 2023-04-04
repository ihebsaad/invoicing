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
            /*Larg= 600*/
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2000,
                    'largeur'  =>600 ,
                    'prix'  =>401 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2100,
                    'largeur'  =>600 ,
                    'prix'  =>412 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2200,
                    'largeur'  =>600 ,
                    'prix'  =>421 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2300,
                    'largeur'  =>600 ,
                    'prix'  =>432 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2400,
                    'largeur'  =>600 ,
                    'prix'  =>440 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2500,
                    'largeur'  =>600 ,
                    'prix'  =>452 ,
                ],

            /*Larg= 700*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>700 ,
                'prix'  =>423 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>700 ,
                'prix'  =>430 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>700 ,
                'prix'  =>439 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>700 ,
                'prix'  =>454 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>700 ,
                'prix'  =>461 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>700 ,
                'prix'  =>472 ,
            ],
            /*Larg= 600*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>800 ,
                'prix'  =>443 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>800 ,
                'prix'  =>450 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>800 ,
                'prix'  =>463 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>800 ,
                'prix'  =>474 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>800 ,
                'prix'  =>485 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>800 ,
                'prix'  =>495 ,
            ],
            /*Larg= 600*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>900 ,
                'prix'  =>460 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>900 ,
                'prix'  =>472 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>900 ,
                'prix'  =>780 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>900 ,
                'prix'  =>493 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>900 ,
                'prix'  =>507 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>900 ,
                'prix'  =>517 ,
            ],
            /*Larg= 600*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1000 ,
                'prix'  =>481 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1000 ,
                'prix'  =>489 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1000 ,
                'prix'  =>500 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1000 ,
                'prix'  =>515 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1000 ,
                'prix'  =>559 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1000 ,
                'prix'  =>555 ,
            ],
            /*Larg= 600*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1100 ,
                'prix'  =>198 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1100 ,
                'prix'  =>512 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1100 ,
                'prix'  =>554 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1100 ,
                'prix'  =>559 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1100 ,
                'prix'  =>577 ,
            ],
            /*Larg= 1200*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1200 ,
                'prix'  =>535 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1200 ,
                'prix'  =>549 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1200 ,
                'prix'  =>572 ,
            ],

             ];

            Modele::insert($modeles);

        }


    }
}
