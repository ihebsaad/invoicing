<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',10)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [

        /*larg=1500*/
         [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1500 ,
            'prix'  => 1462,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1500 ,
            'prix'  => 1499,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1500 ,
            'prix'  => 1537,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1500 ,
            'prix'  => 1575,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1500 ,
            'prix'  => 1614,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1500 ,
            'prix'  =>1693 ,
        ],

        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    =>1600 ,
            'largeur'  =>1500 ,
            'prix'  => 1896,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    => 1700,
            'largeur'  =>1500 ,
            'prix'  => 1936,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    => 1800,
            'largeur'  =>1500 ,
            'prix'  => 1976,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    => 1900,
            'largeur'  =>1500 ,
            'prix'  => 2018,
        ],

       /*larg=1600*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>1600 ,
        'prix'  => 1498,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>1600 ,
        'prix'  => 1536,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>1600 ,
        'prix'  => 1574,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>1600 ,
        'prix'  => 1611,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>1600 ,
        'prix'  => 1650,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>1600 ,
        'prix'  =>1731 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>1600 ,
        'prix'  => 1934,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>1600 ,
        'prix'  => 1976,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>1600 ,
        'prix'  => 2017,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1900,
        'largeur'  =>1600 ,
        'prix'  => 2059,
    ],

           /*larg=1700*/
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1000,
            'largeur'  =>1700 ,
            'prix'  => 1533,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    =>1100 ,
            'largeur'  =>1700 ,
            'prix'  => 1574,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1200,
            'largeur'  =>1700 ,
            'prix'  => 1612,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1300,
            'largeur'  =>1700 ,
            'prix'  => 1649,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1400,
            'largeur'  =>1700 ,
            'prix'  => 1687,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    =>1 ,
            'hauteur'    => 1500,
            'largeur'  =>1700 ,
            'prix'  =>1772 ,
        ],

        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    =>1600 ,
            'largeur'  =>1700 ,
            'prix'  => 1977,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    => 1700,
            'largeur'  =>1700 ,
            'prix'  => 2018,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    => 1800,
            'largeur'  =>1700 ,
            'prix'  => 2060,
        ],
        [
            'genre'    =>2 ,
 	 	 	 'type'    =>10 ,
            'couleur'    => 1,
            'hauteur'    => 1900,
            'largeur'  =>1700 ,
            'prix'  => 2102,
        ],

       /*larg=1800*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>1800 ,
        'prix'  => 1569,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>1800 ,
        'prix'  => 1607,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>1800 ,
        'prix'  => 1649,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>1800 ,
        'prix'  => 1686,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>1800 ,
        'prix'  => 1721,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>1800 ,
        'prix'  =>1809 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>1800 ,
        'prix'  => 2017,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>1800 ,
        'prix'  => 2058,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>1800 ,
        'prix'  => 2100,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1900,
        'largeur'  =>1800 ,
        'prix'  => 2144,
    ],

       /*larg=1900*/
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>1900 ,
        'prix'  => 1604,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>1900 ,
        'prix'  => 1646,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>1900 ,
        'prix'  => 1685,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>1900 ,
        'prix'  => 1727,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>1900 ,
        'prix'  => 1765,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>1900 ,
        'prix'  =>1848 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>1900 ,
        'prix'  => 2058,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>1900 ,
        'prix'  => 2100,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>1900 ,
        'prix'  => 2143,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1900,
        'largeur'  =>1900 ,
        'prix'  => 2186,
    ],

       /*larg=2000*/
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>2000 ,
        'prix'  => 1641,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>2000 ,
        'prix'  => 1682,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>2000 ,
        'prix'  => 1723,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>2000 ,
        'prix'  => 1761,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>2000 ,
        'prix'  => 1804,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>2000 ,
        'prix'  =>1889 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>2000 ,
        'prix'  => 2096,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>2000 ,
        'prix'  => 2141,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>2000 ,
        'prix'  => 2186,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1900,
        'largeur'  =>2000 ,
        'prix'  => 2229,
    ],

       /*larg=2100*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>2100 ,
        'prix'  => 1679,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>2100 ,
        'prix'  => 1718,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>2100 ,
        'prix'  => 1760,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>2100 ,
        'prix'  => 1800,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>2100 ,
        'prix'  => 1844,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>2100 ,
        'prix'  =>1929 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>2100 ,
        'prix'  => 2140,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>2100 ,
        'prix'  => 2181,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>2100 ,
        'prix'  => 2228,
    ],

       /*larg=2200*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>2200 ,
        'prix'  => 1712,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>2200 ,
        'prix'  => 1756,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>2200 ,
        'prix'  => 1798,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>2200 ,
        'prix'  => 1840,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>2200 ,
        'prix'  => 1881,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>2200 ,
        'prix'  =>1968 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>2200 ,
        'prix'  => 2179,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>2200 ,
        'prix'  => 2225,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>2200 ,
        'prix'  => 2270,
    ],

       /*larg=2300*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>2300 ,
        'prix'  => 1750,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>2300 ,
        'prix'  => 1793,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>2300 ,
        'prix'  => 1836,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>2300 ,
        'prix'  => 1877,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>2300 ,
        'prix'  => 1921,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>2300 ,
        'prix'  =>2008 ,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>2300 ,
        'prix'  => 2220,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>2300 ,
        'prix'  => 2265,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>2300 ,
        'prix'  => 2311,
    ],

       /*larg=2400*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>2400 ,
        'prix'  => 1785,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>2400 ,
        'prix'  => 1830,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>2400 ,
        'prix'  => 1871,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>2400 ,
        'prix'  => 1915,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>2400 ,
        'prix'  => 1958,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>2400 ,
        'prix'  =>2046 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>2400 ,
        'prix'  => 2260,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>2400 ,
        'prix'  => 2306,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>2400 ,
        'prix'  => 2352,
    ],

       /*larg=2500*/

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1000,
        'largeur'  =>2500 ,
        'prix'  => 1823,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    =>1100 ,
        'largeur'  =>2500 ,
        'prix'  => 1865,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1200,
        'largeur'  =>2500 ,
        'prix'  => 1911,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1300,
        'largeur'  =>2500 ,
        'prix'  => 1954,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1400,
        'largeur'  =>2500 ,
        'prix'  => 1998,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    =>1 ,
        'hauteur'    => 1500,
        'largeur'  =>2500 ,
        'prix'  =>2085 ,
    ],

    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    =>1600 ,
        'largeur'  =>2500 ,
        'prix'  => 2300,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1700,
        'largeur'  =>2500 ,
        'prix'  => 2348,
    ],
    [
        'genre'    =>2 ,
            'type'    =>10 ,
        'couleur'    => 1,
        'hauteur'    => 1800,
        'largeur'  =>2500 ,
        'prix'  => 2396,
    ],

			];

            Modele::insert($modeles);

        }


    }
}