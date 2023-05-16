<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shutter;
use App\Models\Seeders;

class ModelesShutter2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Shutter::where('type',2)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $shutters =
               [
				/* larg=800*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  800,
                    'prix'  =>  277,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  800,
                    'prix'  =>  281,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  800,
                    'prix'  =>  284,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  800,
                    'prix'  =>  287,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  800,
                    'prix'  =>  291,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  800,
                    'prix'  =>  294,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  800,
                    'prix'  =>  296,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  800,
                    'prix'  =>  301,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  800,
                    'prix'  =>  304,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  800,
                    'prix'  =>  307,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  800,
                    'prix'  =>  314,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  800,
                    'prix'  =>  317,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  800,
                    'prix'  =>  321,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  800,
                    'prix'  =>  324,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  800,
                    'prix'  =>  327,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  800,
                    'prix'  =>  343,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  800,
                    'prix'  =>  347,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  800,
                    'prix'  =>  351,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  800,
                    'prix'  =>  354,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  800,
                    'prix'  =>  364,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  800,
                    'prix'  =>  367,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  800,
                    'prix'  =>  374,
				],

				/* larg=900*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  900,
                    'prix'  =>  281,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  900,
                    'prix'  =>  285,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  900,
                    'prix'  =>  288,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  900,
                    'prix'  =>  292,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  900,
                    'prix'  =>  295,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  900,
                    'prix'  =>  299,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  900,
                    'prix'  =>  302,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  900,
                    'prix'  =>  306,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  900,
                    'prix'  =>  310,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  900,
                    'prix'  =>  313,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  900,
                    'prix'  =>  321,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  900,
                    'prix'  =>  324,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  900,
                    'prix'  =>  328,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  900,
                    'prix'  =>  332,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  900,
                    'prix'  =>  335,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  900,
                    'prix'  =>  351,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  900,
                    'prix'  =>  356,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  900,
                    'prix'  =>  360,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  900,
                    'prix'  =>  364,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  900,
                    'prix'  =>  374,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  900,
                    'prix'  =>  378,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  900,
                    'prix'  =>  385,
				],

				/* larg=1000*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1000,
                    'prix'  =>  282,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1000,
                    'prix'  =>  286,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1000,
                    'prix'  =>  290,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1000,
                    'prix'  =>  294,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1000,
                    'prix'  =>  298,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1000,
                    'prix'  =>  301,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1000,
                    'prix'  =>  305,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1000,
                    'prix'  =>  309,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1000,
                    'prix'  =>  313,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1000,
                    'prix'  =>  317,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1000,
                    'prix'  =>  325,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1000,
                    'prix'  =>  329,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1000,
                    'prix'  =>  332,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1000,
                    'prix'  =>  337,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1000,
                    'prix'  =>  340,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1000,
                    'prix'  =>  358,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1000,
                    'prix'  =>  362,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1000,
                    'prix'  =>  367,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1000,
                    'prix'  =>  370,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1000,
                    'prix'  =>  381,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1000,
                    'prix'  =>  385,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1000,
                    'prix'  =>  394,
				],


				/* larg=1100*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1100,
                    'prix'  =>  278,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1100,
                    'prix'  =>  283,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1100,
                    'prix'  =>  287,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1100,
                    'prix'  =>  292,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1100,
                    'prix'  =>  295,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1100,
                    'prix'  =>  299,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1100,
                    'prix'  =>  304,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1100,
                    'prix'  =>  308,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1100,
                    'prix'  =>  312,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1100,
                    'prix'  =>  315,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1100,
                    'prix'  =>  325,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1100,
                    'prix'  =>  329,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1100,
                    'prix'  =>  332,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1100,
                    'prix'  =>  338,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1100,
                    'prix'  =>  341,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1100,
                    'prix'  =>  359,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1100,
                    'prix'  =>  364,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1100,
                    'prix'  =>  369,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1100,
                    'prix'  =>  372,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1100,
                    'prix'  =>  385,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1100,
                    'prix'  =>  388,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1100,
                    'prix'  =>  397,
				],


				/* larg=1200*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1200,
                    'prix'  =>  283,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1200,
                    'prix'  =>  288,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1200,
                    'prix'  =>  292,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1200,
                    'prix'  =>  296,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1200,
                    'prix'  =>  301,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1200,
                    'prix'  =>  305,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1200,
                    'prix'  =>  309,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1200,
                    'prix'  =>  314,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1200,
                    'prix'  =>  318,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1200,
                    'prix'  =>  323,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1200,
                    'prix'  =>  332,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1200,
                    'prix'  =>  336,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1200,
                    'prix'  =>  340,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1200,
                    'prix'  =>  345,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1200,
                    'prix'  =>  350,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1200,
                    'prix'  =>  368,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1200,
                    'prix'  =>  372,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1200,
                    'prix'  =>  378,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1200,
                    'prix'  =>  382,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1200,
                    'prix'  =>  396,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1200,
                    'prix'  =>  400,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1200,
                    'prix'  =>  409,
				],


				/* larg=1300*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1300,
                    'prix'  =>  287,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1300,
                    'prix'  =>  293,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1300,
                    'prix'  =>  296,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1300,
                    'prix'  =>  302,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1300,
                    'prix'  =>  306,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1300,
                    'prix'  =>  310,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1300,
                    'prix'  =>  314,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1300,
                    'prix'  =>  320,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1300,
                    'prix'  =>  324,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1300,
                    'prix'  =>  329,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1300,
                    'prix'  =>  339,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1300,
                    'prix'  =>  343,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1300,
                    'prix'  =>  348,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1300,
                    'prix'  =>  354,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1300,
                    'prix'  =>  357,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1300,
                    'prix'  =>  376,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1300,
                    'prix'  =>  381,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1300,
                    'prix'  =>  387,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1300,
                    'prix'  =>  391,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1300,
                    'prix'  =>  406,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1300,
                    'prix'  =>  410,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1300,
                    'prix'  =>  420,
				],


				/* larg=1400*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1400,
                    'prix'  =>  292,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1400,
                    'prix'  =>  296,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1400,
                    'prix'  =>  301,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1400,
                    'prix'  =>  307,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1400,
                    'prix'  =>  311,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1400,
                    'prix'  =>  314,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1400,
                    'prix'  =>  320,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1400,
                    'prix'  =>  326,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1400,
                    'prix'  =>  330,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1400,
                    'prix'  =>  335,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1400,
                    'prix'  =>  346,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1400,
                    'prix'  =>  351,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1400,
                    'prix'  =>  355,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1400,
                    'prix'  =>  360,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1400,
                    'prix'  =>  366,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1400,
                    'prix'  =>  386,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1400,
                    'prix'  =>  391,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1400,
                    'prix'  =>  397,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1400,
                    'prix'  =>  401,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1400,
                    'prix'  =>  416,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1400,
                    'prix'  =>  421,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1400,
                    'prix'  =>  431,
				],


				/* larg=1500*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1500,
                    'prix'  =>  295,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1500,
                    'prix'  =>  301,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1500,
                    'prix'  =>  306,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1500,
                    'prix'  =>  312,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1500,
                    'prix'  =>  316,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1500,
                    'prix'  =>  321,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1500,
                    'prix'  =>  326,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1500,
                    'prix'  =>  332,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1500,
                    'prix'  => 337,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1500,
                    'prix'  =>  341,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1500,
                    'prix'  =>  353,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1500,
                    'prix'  =>  357,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1500,
                    'prix'  =>  363,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1500,
                    'prix'  =>  369,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1500,
                    'prix'  =>  373,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1500,
                    'prix'  =>  394,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1500,
                    'prix'  =>  400,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1500,
                    'prix'  =>  406,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1500,
                    'prix'  =>  411,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1500,
                    'prix'  =>  427,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1500,
                    'prix'  =>  431,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1500,
                    'prix'  =>  443,
				],


				/* larg=1600*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1600,
                    'prix'  =>  302,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1600,
                    'prix'  =>  308,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1600,
                    'prix'  =>  313,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1600,
                    'prix'  =>  319,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1600,
                    'prix'  =>  324,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1600,
                    'prix'  =>  329,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1600,
                    'prix'  =>  333,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1600,
                    'prix'  =>  340,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1600,
                    'prix'  =>  345,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1600,
                    'prix'  =>  350,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1600,
                    'prix'  =>  363,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1600,
                    'prix'  =>  368,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1600,
                    'prix'  =>  372,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1600,
                    'prix'  =>  379,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1600,
                    'prix'  =>  384,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1600,
                    'prix'  =>  406,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1600,
                    'prix'  =>  412,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1600,
                    'prix'  =>  417,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1600,
                    'prix'  =>  423,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1600,
                    'prix'  =>  440,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1600,
                    'prix'  =>  446,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1600,
                    'prix'  =>  458,
				],


				/* larg=1700*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1700,
                    'prix'  =>  311,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1700,
                    'prix'  =>  317,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1700,
                    'prix'  =>  323,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1700,
                    'prix'  =>  329,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1700,
                    'prix'  =>  333,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1700,
                    'prix'  =>  338,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1700,
                    'prix'  =>  345,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1700,
                    'prix'  =>  351,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1700,
                    'prix'  =>  356,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1700,
                    'prix'  =>  360,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1700,
                    'prix'  =>  373,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1700,
                    'prix'  =>  379,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1700,
                    'prix'  =>  384,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1700,
                    'prix'  =>  391,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1700,
                    'prix'  =>  397,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1700,
                    'prix'  =>  419,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1700,
                    'prix'  =>  456,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1700,
                    'prix'  =>  463,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1700,
                    'prix'  =>  469,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1700,
                    'prix'  =>  486,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1700,
                    'prix'  =>  492,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1700,
                    'prix'  =>  504,
				],


				/* larg=1800*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1800,
                    'prix'  =>  323,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1800,
                    'prix'  =>  330,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1800,
                    'prix'  =>  336,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1800,
                    'prix'  =>  343,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1800,
                    'prix'  =>  349,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1800,
                    'prix'  =>  354,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1800,
                    'prix'  =>  360,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1800,
                    'prix'  =>  367,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1800,
                    'prix'  =>  372,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1800,
                    'prix'  =>  378,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1800,
                    'prix'  =>  392,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1800,
                    'prix'  =>  397,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1800,
                    'prix'  =>  403,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1800,
                    'prix'  =>  411,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1800,
                    'prix'  =>  416,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1800,
                    'prix'  =>  429,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1800,
                    'prix'  =>  466,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1800,
                    'prix'  =>  473,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1800,
                    'prix'  =>  478,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1800,
                    'prix'  =>  497,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1800,
                    'prix'  =>  502,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1800,
                    'prix'  =>  516,
				],


				/* larg=1900*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  1900,
                    'prix'  =>  327,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  1900,
                    'prix'  =>  335,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1900,
                    'prix'  =>  341,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1900,
                    'prix'  => 349,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1900,
                    'prix'  =>  354,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1900,
                    'prix'  =>  359,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1900,
                    'prix'  =>  366,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1900,
                    'prix'  =>  374,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1900,
                    'prix'  =>  379,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1900,
                    'prix'  =>  385,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1900,
                    'prix'  =>  399,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1900,
                    'prix'  =>  405,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1900,
                    'prix'  =>  411,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1900,
                    'prix'  =>  418,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1900,
                    'prix'  =>  424,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1900,
                    'prix'  =>  737,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1900,
                    'prix'  =>  474,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1900,
                    'prix'  =>  482,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1900,
                    'prix'  =>  488,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1900,
                    'prix'  =>  507,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  1900,
                    'prix'  =>  513,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  1900,
                    'prix'  =>  528,
				],


				/* larg=2000*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2000,
                    'prix'  =>  331,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2000,
                    'prix'  =>  339,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2000,
                    'prix'  =>  345,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2000,
                    'prix'  =>  354,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2000,
                    'prix'  =>  359,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2000,
                    'prix'  =>  366,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2000,
                    'prix'  =>  372,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2000,
                    'prix'  =>  380,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2000,
                    'prix'  =>  386,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2000,
                    'prix'  =>  391,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2000,
                    'prix'  =>  406,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2000,
                    'prix'  =>  412,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2000,
                    'prix'  =>  418,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2000,
                    'prix'  =>  427,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2000,
                    'prix'  =>  433,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2000,
                    'prix'  =>  446,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2000,
                    'prix'  =>  483,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2000,
                    'prix'  =>  492,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2000,
                    'prix'  =>  497,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2000,
                    'prix'  =>  517,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  2000,
                    'prix'  =>  523,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  2000,
                    'prix'  =>  538,
				],


				/* larg=2100*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2100,
                    'prix'  =>  336,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2100,
                    'prix'  =>  344,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2100,
                    'prix'  =>  351,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2100,
                    'prix'  =>  359,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2100,
                    'prix'  =>  366,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2100,
                    'prix'  =>  370,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2100,
                    'prix'  =>  378,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2100,
                    'prix'  =>  386,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2100,
                    'prix'  =>  393,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2100,
                    'prix'  =>  398,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2100,
                    'prix'  =>  413,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2100,
                    'prix'  =>  419,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2100,
                    'prix'  =>  426,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2100,
                    'prix'  =>  434,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2100,
                    'prix'  =>  441,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2100,
                    'prix'  =>  455,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2100,
                    'prix'  =>  492,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2100,
                    'prix'  =>  501,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2100,
                    'prix'  =>  507,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2100,
                    'prix'  =>  529,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  2100,
                    'prix'  =>  535,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  2100,
                    'prix'  =>  550,
				],


				/* larg=2200*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2200,
                    'prix'  =>  340,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2200,
                    'prix'  =>  349,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2200,
                    'prix'  =>  355,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2200,
                    'prix'  =>  364,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2200,
                    'prix'  =>  370,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2200,
                    'prix'  =>  376,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2200,
                    'prix'  =>  384,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2200,
                    'prix'  =>  393,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2200,
                    'prix'  =>  399,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2200,
                    'prix'  =>  405,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2200,
                    'prix'  =>  421,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2200,
                    'prix'  =>  458,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2200,
                    'prix'  =>  464,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2200,
                    'prix'  =>  474,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2200,
                    'prix'  =>  480,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2200,
                    'prix'  => 495 ,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2200,
                    'prix'  =>  501,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2200,
                    'prix'  =>  510,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2200,
                    'prix'  =>  517,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2200,
                    'prix'  =>  539,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  2200,
                    'prix'  =>  546,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  2200,
                    'prix'  =>  561,
				],


				/* larg=2300*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2300,
                    'prix'  =>  344,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2300,
                    'prix'  =>  354,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2300,
                    'prix'  =>  360,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2300,
                    'prix'  =>  369,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2300,
                    'prix'  =>  375,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2300,
                    'prix'  =>  382,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2300,
                    'prix'  =>  390,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2300,
                    'prix'  =>  399,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2300,
                    'prix'  =>  405,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2300,
                    'prix'  =>  412,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2300,
                    'prix'  =>  429,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2300,
                    'prix'  =>  467,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2300,
                    'prix'  =>  472,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2300,
                    'prix'  =>  483,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2300,
                    'prix'  =>  489,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2300,
                    'prix'  =>  503,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2300,
                    'prix'  =>  510,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2300,
                    'prix'  =>  520,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2300,
                    'prix'  =>  526,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2300,
                    'prix'  =>  550,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  2300,
                    'prix'  =>  557,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2900,
                    'largeur'  =>  2300,
                    'prix'  =>  572,
				],


				/* larg=2400*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2400,
                    'prix'  =>  375,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2400,
                    'prix'  =>  386,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2400,
                    'prix'  =>  393,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2400,
                    'prix'  =>  403,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2400,
                    'prix'  =>  411,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2400,
                    'prix'  =>  418,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2400,
                    'prix'  =>  426,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2400,
                    'prix'  =>  437,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2400,
                    'prix'  =>  443,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2400,
                    'prix'  =>  451,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2400,
                    'prix'  =>  469,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2400,
                    'prix'  =>  509,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2400,
                    'prix'  =>  516,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2400,
                    'prix'  =>  526,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2400,
                    'prix'  =>  534,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2400,
                    'prix'  =>  550,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2400,
                    'prix'  =>  558,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2400,
                    'prix'  =>  568,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2400,
                    'prix'  =>  575,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2400,
                    'prix'  =>  601,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2800,
                    'largeur'  =>  2400,
                    'prix'  =>  608,
				],

				/* larg=2500*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2500,
                    'prix'  =>  383,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2500,
                    'prix'  =>  394,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2500,
                    'prix'  =>  400,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2500,
                    'prix'  =>  412,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2500,
                    'prix'  =>  418,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2500,
                    'prix'  =>  426,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2500,
                    'prix'  =>  435,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2500,
                    'prix'  =>  446,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2500,
                    'prix'  =>  453,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2500,
                    'prix'  =>  460,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2500,
                    'prix'  =>  479,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2500,
                    'prix'  =>  518,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2500,
                    'prix'  =>  528,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2500,
                    'prix'  =>  538,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2500,
                    'prix'  =>  546,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2500,
                    'prix'  =>  563,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2500,
                    'prix'  =>  570,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2500,
                    'prix'  =>  581,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2500,
                    'prix'  =>  588,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2500,
                    'prix'  =>  615,
				],



				/* larg=2600*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2600,
                    'prix'  =>  387,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2600,
                    'prix'  =>  398,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2600,
                    'prix'  => 406,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2600,
                    'prix'  =>  416,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2600,
                    'prix'  =>  424,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2600,
                    'prix'  =>  432,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2600,
                    'prix'  =>  441,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2600,
                    'prix'  =>  452,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2600,
                    'prix'  =>  460,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2600,
                    'prix'  =>  468,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2600,
                    'prix'  =>  576,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2600,
                    'prix'  =>  590,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2600,
                    'prix'  =>  601,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2600,
                    'prix'  =>  612,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2600,
                    'prix'  =>  618,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2600,
                    'prix'  =>  662,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2600,
                    'prix'  =>  674,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2600,
                    'prix'  =>  686,
				],


				/* larg=2700*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2700,
                    'prix'  => 393 ,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2700,
                    'prix'  =>  404,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2700,
                    'prix'  =>  412,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2700,
                    'prix'  =>  124,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2700,
                    'prix'  =>  431,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2700,
                    'prix'  =>  440,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2700,
                    'prix'  =>  449,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2700,
                    'prix'  =>  461,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2700,
                    'prix'  =>  470,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2700,
                    'prix'  =>  477,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2700,
                    'prix'  =>  498,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2700,
                    'prix'  => 540,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2700,
                    'prix'  =>  547,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2700,
                    'prix'  =>  559,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2700,
                    'prix'  =>  567,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2700,
                    'prix'  =>  585,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2700,
                    'prix'  =>  593,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2700,
                    'prix'  =>  605,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2700,
                    'prix'  =>  613,
				],


				/* larg=2800*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2800,
                    'prix'  =>  397,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2800,
                    'prix'  =>  410,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2800,
                    'prix'  =>  418,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2800,
                    'prix'  =>  429,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2800,
                    'prix'  =>  438,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2800,
                    'prix'  =>  446,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2800,
                    'prix'  =>  456,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2800,
                    'prix'  =>  501,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2800,
                    'prix'  =>  510,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2800,
                    'prix'  =>  517,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2800,
                    'prix'  =>  539,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2800,
                    'prix'  =>  548,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2800,
                    'prix'  =>  556,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2800,
                    'prix'  =>  568,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2800,
                    'prix'  =>  576,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2800,
                    'prix'  =>  595,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2800,
                    'prix'  =>  603,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2800,
                    'prix'  =>  615,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2800,
                    'prix'  =>  623,
				],

				/* larg=2900*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  2900,
                    'prix'  =>  402,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  2900,
                    'prix'  =>  414,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2900,
                    'prix'  =>  423,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2900,
                    'prix'  =>  434,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2900,
                    'prix'  =>  443,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2900,
                    'prix'  =>  452,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2900,
                    'prix'  =>  462,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2900,
                    'prix'  =>  508,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2900,
                    'prix'  =>  517,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2900,
                    'prix'  =>  525,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2900,
                    'prix'  =>  547,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2900,
                    'prix'  =>  556,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2900,
                    'prix'  =>  564,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2900,
                    'prix'  =>  577,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2900,
                    'prix'  =>  586,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2900,
                    'prix'  =>  604,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2900,
                    'prix'  =>  613,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2900,
                    'prix'  =>  625,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2900,
                    'prix'  =>  633,
				],

    				/* larg=3000*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  3000,
                    'prix'  =>  406,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  3000,
                    'prix'  =>  418,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3000,
                    'prix'  =>  428,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3000,
                    'prix'  =>  440,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3000,
                    'prix'  =>  449,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3000,
                    'prix'  =>  458,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3000,
                    'prix'  =>  469,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3000,
                    'prix'  =>  515,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3000,
                    'prix'  =>  523,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3000,
                    'prix'  =>  533,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3000,
                    'prix'  =>  556,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3000,
                    'prix'  =>  563,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3000,
                    'prix'  =>  572,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3000,
                    'prix'  =>  586,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3000,
                    'prix'  =>  594,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3000,
                    'prix'  =>  614,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  3000,
                    'prix'  =>  623,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  3000,
                    'prix'  =>  636,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  3000,
                    'prix'  =>  644,
				],

				/* larg=3100*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  3100,
                    'prix'  =>  411,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  3100,
                    'prix'  =>  424,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3100,
                    'prix'  =>  433,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3100,
                    'prix'  =>  446,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3100,
                    'prix'  =>  455,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3100,
                    'prix'  =>  464,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3100,
                    'prix'  =>  476,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3100,
                    'prix'  =>  521,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3100,
                    'prix'  =>  531,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3100,
                    'prix'  =>  540,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3100,
                    'prix'  =>  563,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3100,
                    'prix'  =>  572,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3100,
                    'prix'  =>  581,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3100,
                    'prix'  =>  594,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3100,
                    'prix'  =>  604,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3100,
                    'prix'  =>  624,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  3100,
                    'prix'  =>  633,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  3100,
                    'prix'  =>  645,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  3100,
                    'prix'  =>  655,
				],


				/* larg=3200*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  3200,
                    'prix'  =>  420,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  3200,
                    'prix'  =>  434,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3200,
                    'prix'  =>  443,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3200,
                    'prix'  =>  456,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3200,
                    'prix'  =>  466,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3200,
                    'prix'  =>  475,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3200,
                    'prix'  =>  487,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3200,
                    'prix'  =>  533,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3200,
                    'prix'  =>  543,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3200,
                    'prix'  =>  552,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3200,
                    'prix'  => 576 ,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3200,
                    'prix'  =>  585,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3200,
                    'prix'  =>  595,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3200,
                    'prix'  =>  608,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3200,
                    'prix'  =>  618,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3200,
                    'prix'  =>  638,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  3200,
                    'prix'  =>  648,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  3200,
                    'prix'  =>  661,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  3200,
                    'prix'  =>  670,
				],

				/* larg=3300*/
				[

                    'type'  => 2,
                    'hauteur'  =>  800,
                    'largeur'  =>  3300,
                    'prix'  =>  424,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  900,
                    'largeur'  =>  3300,
                    'prix'  =>  439,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3300,
                    'prix'  =>  448,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3300,
                    'prix'  =>  461,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3300,
                    'prix'  =>  471,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3300,
                    'prix'  =>  481,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3300,
                    'prix'  =>  493,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3300,
                    'prix'  =>  540,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3300,
                    'prix'  =>  550,
				],
                    [

                    'type'  => 2,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3300,
                    'prix'  =>  560,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3300,
                    'prix'  =>  583,
				],					[

                    'type'  => 2,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3300,
                    'prix'  =>  593,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3300,
                    'prix'  =>  603,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3300,
                    'prix'  =>  617,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3300,
                    'prix'  =>  626,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3300,
                    'prix'  =>  648,
				],
				[

                    'type'  => 2,
                    'hauteur'  =>  2400,
                    'largeur'  =>  3300,
                    'prix'  =>  657,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2500,
                    'largeur'  =>  3300,
                    'prix'  =>  671,
				],
				[
                    'type'  => 2,
                    'hauteur'  =>  2600,
                    'largeur'  =>  3300,
                    'prix'  =>  681,
                    ],


               ];

            Shutter::insert($shutters);

        }


    }
}
