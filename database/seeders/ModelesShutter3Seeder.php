<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shutter;
use App\Models\Seeders;

class ModelesShutter3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Shutter::where('type',3)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $shutters =
            [
				/* larg=800*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  800,
                    'prix'  =>  480,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  800,
                    'prix'  =>  486,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  800,
                    'prix'  =>  492,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  800,
                    'prix'  =>  498,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  800,
                    'prix'  =>  504,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  800,
                    'prix'  =>  512,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  800,
                    'prix'  =>  517,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  800,
                    'prix'  =>  526,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  800,
                    'prix'  =>  533,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  800,
                    'prix'  =>  540,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  800,
                    'prix'  =>  549,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  800,
                    'prix'  =>  556,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  800,
                    'prix'  =>  562,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  800,
                    'prix'  =>  567,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  800,
                    'prix'  =>  575,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  800,
                    'prix'  =>  586,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  800,
                    'prix'  => 594 ,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  800,
                    'prix'  =>  601,
				],

				/* larg=900*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  900,
                    'prix'  =>  487,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  900,
                    'prix'  =>  492,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  900,
                    'prix'  =>  501,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  900,
                    'prix'  =>  506,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  900,
                    'prix'  =>  513,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  900,
                    'prix'  =>  520,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  900,
                    'prix'  =>  526,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  900,
                    'prix'  =>  535,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  900,
                    'prix'  =>  543,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  900,
                    'prix'  =>  550,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  900,
                    'prix'  =>  558,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  900,
                    'prix'  =>  566,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  900,
                    'prix'  =>  572,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  900,
                    'prix'  =>  578,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  900,
                    'prix'  =>  585,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  900,
                    'prix'  =>  599,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  900,
                    'prix'  =>  606,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  900,
                    'prix'  =>  614,
				],
				/* larg=1000*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1000,
                    'prix'  =>  492,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1000,
                    'prix'  =>  499,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1000,
                    'prix'  =>  507,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1000,
                    'prix'  =>  513,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1000,
                    'prix'  =>  520,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1000,
                    'prix'  =>  528,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1000,
                    'prix'  =>  533,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1000,
                    'prix'  =>  543,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1000,
                    'prix'  =>  550,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1000,
                    'prix'  =>  558,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1000,
                    'prix'  =>  568,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1000,
                    'prix'  =>  575,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1000,
                    'prix'  =>  581,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1000,
                    'prix'  =>  588,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1000,
                    'prix'  =>  596,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1000,
                    'prix'  =>  610,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1000,
                    'prix'  =>  617,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1000,
                    'prix'  =>  624,
				],

				/* larg=1100*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1100,
                    'prix'  =>  501,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1100,
                    'prix'  =>  507,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1100,
                    'prix'  =>  514,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1100,
                    'prix'  =>  521,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1100,
                    'prix'  =>  528,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1100,
                    'prix'  =>  535,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1100,
                    'prix'  =>  542,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1100,
                    'prix'  =>  553,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1100,
                    'prix'  =>  560,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1100,
                    'prix'  =>  568,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1100,
                    'prix'  =>  578,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1100,
                    'prix'  =>  586,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1100,
                    'prix'  =>  593,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1100,
                    'prix'  =>  599,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1100,
                    'prix'  =>  607,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1100,
                    'prix'  =>  621,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1100,
                    'prix'  =>  630,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1100,
                    'prix'  =>  637,
				],
				/* larg=1200*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1200,
                    'prix'  =>  507,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1200,
                    'prix'  =>  514,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1200,
                    'prix'  =>  522,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1200,
                    'prix'  =>  529,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1200,
                    'prix'  =>  535,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1200,
                    'prix'  =>  544,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1200,
                    'prix'  =>  550,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1200,
                    'prix'  =>  563,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1200,
                    'prix'  =>  570,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1200,
                    'prix'  =>  578,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1200,
                    'prix'  =>  588,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1200,
                    'prix'  =>  596,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1200,
                    'prix'  =>  603,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1200,
                    'prix'  =>  611,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1200,
                    'prix'  =>  618,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1200,
                    'prix'  =>  633,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1200,
                    'prix'  =>  641,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1200,
                    'prix'  =>  649,
				],
				/* larg=1300*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1300,
                    'prix'  =>  514,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1300,
                    'prix'  =>  521,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1300,
                    'prix'  =>  529,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1300,
                    'prix'  =>  537,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1300,
                    'prix'  =>  544,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1300,
                    'prix'  =>  552,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1300,
                    'prix'  =>  559,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1300,
                    'prix'  =>  572,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1300,
                    'prix'  =>  578,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1300,
                    'prix'  =>  587,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1300,
                    'prix'  =>  599,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1300,
                    'prix'  =>  607,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1300,
                    'prix'  =>  615,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1300,
                    'prix'  =>  621,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1300,
                    'prix'  =>  631,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1300,
                    'prix'  =>  645,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1300,
                    'prix'  =>  654,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1300,
                    'prix'  =>  662,
				],
				/* larg=1400*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1400,
                    'prix'  =>  521,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1400,
                    'prix'  =>  529,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1400,
                    'prix'  =>  537,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1400,
                    'prix'  =>  544,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1400,
                    'prix'  =>  551,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1400,
                    'prix'  =>  560,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1400,
                    'prix'  =>  567,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1400,
                    'prix'  =>  581,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1400,
                    'prix'  =>  588,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1400,
                    'prix'  =>  597,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1400,
                    'prix'  =>  609,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1400,
                    'prix'  =>  618,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1400,
                    'prix'  =>  625,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1400,
                    'prix'  =>  633,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1400,
                    'prix'  =>  641,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1400,
                    'prix'  =>  657,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1400,
                    'prix'  =>  666,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1400,
                    'prix'  =>  685,
				],

				/* larg=1500*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1500,
                    'prix'  =>  532,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1500,
                    'prix'  =>  539,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1500,
                    'prix'  =>  549,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1500,
                    'prix'  =>  556,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1500,
                    'prix'  =>  563,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1500,
                    'prix'  =>  572,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1500,
                    'prix'  =>  579,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1500,
                    'prix'  =>  594,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1500,
                    'prix'  =>  602,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1500,
                    'prix'  =>  611,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1500,
                    'prix'  =>  623,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1500,
                    'prix'  =>  632,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1500,
                    'prix'  =>  639,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1500,
                    'prix'  =>  648,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1500,
                    'prix'  =>  656,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1500,
                    'prix'  =>  673,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1500,
                    'prix'  =>  693,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1500,
                    'prix'  =>  716,
				],

				/* larg=800*/
				[

                    'type'  => 3,
                    'hauteur'  =>  800,
                    'largeur'  =>  1600,
                    'prix'  =>  540,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  900,
                    'largeur'  =>  1600,
                    'prix'  =>  548,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1600,
                    'prix'  =>  557,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1600,
                    'prix'  =>  565,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1600,
                    'prix'  =>  572,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1600,
                    'prix'  =>  581,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1600,
                    'prix'  =>  589,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1600,
                    'prix'  =>  605,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1600,
                    'prix'  =>  612,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1600,
                    'prix'  =>  621,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1600,
                    'prix'  =>  634,
				],
                    [

                    'type'  => 3,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1600,
                    'prix'  =>  643,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1600,
                    'prix'  =>  652,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1600,
                    'prix'  =>  660,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1600,
                    'prix'  =>  669,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1600,
                    'prix'  =>  696,
				],
				[

                    'type'  => 3,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1600,
                    'prix'  =>  706,
				],
				[
                    'type'  => 3,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1600,
                    'prix'  =>  729,
				],
			];

            Shutter::insert($shutters);

        }


    }
}
