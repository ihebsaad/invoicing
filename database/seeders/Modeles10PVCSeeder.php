<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modele;
use App\Models\Seeders;

class Modeles10PVCSeeder extends Seeder  //coulissant 3
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Modele::where('type',10)->where('genre',1)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [

				/*larg=2500*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2312,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2360,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2407,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2452,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  =>  2500,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2500 ,
					'prix'  =>  2546 ,
				],


				/*larg=2600*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2600 ,
					'prix'  => 2357,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2600 ,
					'prix'  => 2403,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2600 ,
					'prix'  => 2448,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2600 ,
					'prix'  => 2496,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2600 ,
					'prix'  =>  2542,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2600 ,
					'prix'  =>   2590,
				],


				/*larg=2700*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2700 ,
					'prix'  => 2396,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2700 ,
					'prix'  => 2444,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2700 ,
					'prix'  => 2494,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2700 ,
					'prix'  => 2540,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2700 ,
					'prix'  =>  2588,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2700 ,
					'prix'  =>   2636,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2700 ,
					'prix'  =>   2705,
				],

				/*larg=2800*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2638,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2547,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2535,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2597,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  =>  2634,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2800 ,
					'prix'  =>   2682,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2800 ,
					'prix'  =>   2751,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2800 ,
					'prix'  =>   2871,
				],

				/*larg=2900*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2900 ,
					'prix'  => 2482,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2900 ,
					'prix'  => 2531,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2900 ,
					'prix'  => 2581,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2900 ,
					'prix'  => 2629,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2900 ,
					'prix'  => 2679 ,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>   2728,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>  2800 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>  2918 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>  2971 ,
				],


				/*larg=3000*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2525,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2576,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2625 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2677,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  => 2726 ,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>   2776,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>   2848,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>   2968,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>   3022,
				],


				/*larg=3100*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2569,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2620,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2670,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2722,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  => 2771 ,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>  2823 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>   2895,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>  3015 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>  3067 ,
				],


				/*larg=3200*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2612,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2664,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2714,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2767,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  => 2818,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>  2869 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>  2943 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>  3065,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>  3121 ,
				],


				/*larg=3300*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2656,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2709,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2760,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2813,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  => 2864 ,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>   2918,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>  2991 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>  3113 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>   3170,
				],


				/*larg=3400*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2700,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2752,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2806,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2859,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  =>  2913,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>  2964 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>  3039 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>   3162,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>  3220 ,
				],


				/*larg=3500*/
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1600,
					'largeur'  =>2500 ,
					'prix'  => 2745,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1700,
					'largeur'  =>2500 ,
					'prix'  => 2798,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1800,
					'largeur'  =>2500 ,
					'prix'  => 2851,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 1900,
					'largeur'  =>2500 ,
					'prix'  => 2907,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2000,
					'largeur'  =>2500 ,
					'prix'  =>  2959,
				],
				[
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2100,
					'largeur'  =>2900 ,
					'prix'  =>  3012 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2200,
					'largeur'  =>2900 ,
					'prix'  =>   3089,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2300,
					'largeur'  =>2900 ,
					'prix'  =>  3213 ,
				],
                [
					'genre'    =>1 ,
					'type'    =>10 ,
					'couleur'    =>1 ,
					'hauteur'    => 2400,
					'largeur'  =>2900 ,
					'prix'  =>  3270 ,
				],

			];

            Modele::insert($modeles);

        }


    }
}
