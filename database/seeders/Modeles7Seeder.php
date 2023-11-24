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
        $seeder = Modele::where('type',7)->count();

        //Check if the seeder exist in the DB
        //Porte fenetre 2V
        if ($seeder==0) {
            $modeles =
            [
            /*Larg= 1200*/
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2000,
                    'largeur'  =>1200 ,
                    'prix'  =>650 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2100,
                    'largeur'  =>1200 ,
                    'prix'  =>665 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2200,
                    'largeur'  =>1200 ,
                    'prix'  =>681 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2300,
                    'largeur'  =>1200 ,
                    'prix'  =>708 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2400,
                    'largeur'  =>1200 ,
                    'prix'  =>721 ,
                ],
                [
                    'genre'    =>1 ,
                    'type'    =>7 ,
                    'couleur'    =>1 ,
                    'hauteur'    => 2500,
                    'largeur'  =>1200 ,
                    'prix'  =>744 ,
                ],

            /*Larg= 1300*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1300 ,
                'prix'  =>668 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1300 ,
                'prix'  =>683 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1300 ,
                'prix'  =>696 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1300 ,
                'prix'  =>728 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1300 ,
                'prix'  =>744 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1300 ,
                'prix'  =>764 ,
            ],
            /*Larg= 1400*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1400 ,
                'prix'  =>688 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1400 ,
                'prix'  =>704 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1400 ,
                'prix'  =>721 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1400 ,
                'prix'  =>750 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1400 ,
                'prix'  =>768 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1400 ,
                'prix'  =>788 ,
            ],
            /*Larg= 1500*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1500 ,
                'prix'  =>707 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1500 ,
                'prix'  =>724 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1500 ,
                'prix'  =>737 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1500 ,
                'prix'  =>769 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1500 ,
                'prix'  =>784 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1500 ,
                'prix'  =>810 ,
            ],
            /*Larg= 1600*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1600 ,
                'prix'  =>723 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1600 ,
                'prix'  =>740 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1600 ,
                'prix'  =>759 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1600 ,
                'prix'  =>786 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1600 ,
                'prix'  =>804 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1600 ,
                'prix'  =>830 ,
            ],
            /*Larg= 1700*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1700 ,
                'prix'  =>740 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1700 ,
                'prix'  =>759 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1700 ,
                'prix'  =>776 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1700 ,
                'prix'  =>807 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1700 ,
                'prix'  =>823 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1700 ,
                'prix'  =>846 ,
            ],
            /*Larg= 1800*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1800 ,
                'prix'  =>762 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1800 ,
                'prix'  =>778 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1800 ,
                'prix'  =>797 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1800 ,
                'prix'  =>826 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1800 ,
                'prix'  =>827 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1800 ,
                'prix'  =>850 ,
            ],
            /*Larg= 1900*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>1900 ,
                'prix'  =>783 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>1900 ,
                'prix'  =>803 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>1900 ,
                'prix'  =>822 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>1900 ,
                'prix'  =>851 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2400,
                'largeur'  =>1900 ,
                'prix'  =>852 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2500,
                'largeur'  =>1900 ,
                'prix'  =>920 ,
            ],
            /*Larg= 2000*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>2000 ,
                'prix'  =>803 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>2000 ,
                'prix'  =>825 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>2000 ,
                'prix'  =>842 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2300,
                'largeur'  =>2000 ,
                'prix'  =>872 ,
            ],

            /*Larg= 2100*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>2100 ,
                'prix'  =>819 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>2100 ,
                'prix'  =>840 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2200,
                'largeur'  =>2100 ,
                'prix'  =>858 ,
            ],

            /*Larg= 2200*/
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2000,
                'largeur'  =>2200 ,
                'prix'  =>838 ,
            ],
            [
                'genre'    =>1 ,
                'type'    =>7 ,
                'couleur'    =>1 ,
                'hauteur'    => 2100,
                'largeur'  =>2200 ,
                'prix'  =>858 ,
            ],


             ];

            Modele::insert($modeles);

        }


    }
}
