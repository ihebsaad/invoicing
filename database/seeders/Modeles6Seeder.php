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
        //Porte fenetre 1V   //PVC
        if ($seeder==0) {
            $modeles =
            [
            /*Larg= 600*/
                [
                    'genre'    =>1 ,  //pvc
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2000,
                    'largeur'  =>600 ,
                    'prix'  =>415 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2100,
                    'largeur'  =>600 ,
                    'prix'  =>426 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2200,
                    'largeur'  =>600 ,
                    'prix'  =>438 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2300,
                    'largeur'  =>600 ,
                    'prix'  =>456 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2400,
                    'largeur'  =>600 ,
                    'prix'  =>467 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>6 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2500,
                    'largeur'  =>600 ,
                    'prix'  =>471 ,
                ],

            /*Larg= 700*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>700 ,
                'prix'  =>438 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>700 ,
                'prix'  =>451 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>700 ,
                'prix'  =>461 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>700 ,
                'prix'  =>483 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>700 ,
                'prix'  =>494 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>700 ,
                'prix'  =>497 ,
            ],
            /*Larg= 800*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>800 ,
                'prix'  =>461 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>800 ,
                'prix'  =>471 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>800 ,
                'prix'  =>486 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>800 ,
                'prix'  =>503 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>800 ,
                'prix'  =>515 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>800 ,
                'prix'  =>523 ,
            ],
            /*Larg= 900*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>900 ,
                'prix'  =>487 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>900 ,
                'prix'  =>499 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>900 ,
                'prix'  =>512 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>900 ,
                'prix'  =>535 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>900 ,
                'prix'  =>544 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>900 ,
                'prix'  =>553 ,
            ],
            /*Larg= 1000*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1000 ,
                'prix'  =>509 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1000 ,
                'prix'  =>523 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1000 ,
                'prix'  =>535 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1000 ,
                'prix'  =>556 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1000 ,
                'prix'  =>572 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1000 ,
                'prix'  =>579 ,
            ],
            /*Larg= 1100*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1100 ,
                'prix'  =>530 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1100 ,
                'prix'  =>544 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1100 ,
                'prix'  =>559 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1100 ,
                'prix'  =>581 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1100 ,
                'prix'  =>596 ,
            ],
            /*Larg= 1200*/
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1200 ,
                'prix'  =>541 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>6 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1200 ,
                'prix'  =>556 ,
            ],
             ];

            Modele::insert($modeles);

        }


    }
}
