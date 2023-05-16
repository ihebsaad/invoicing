<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shutter;
use App\Models\Seeders;

class ModelesShutterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Shutter::where('type',1)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $shutters =
            [
				/* larg=800*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  800,
                    'prix'  =>  363,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  800,
                    'prix'  =>  366,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  800,
                    'prix'  =>  369,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  800,
                    'prix'  =>  374,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  800,
                    'prix'  =>  379,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  800,
                    'prix'  =>  384,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  800,
                    'prix'  =>  387,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  800,
                    'prix'  =>  391,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  800,
                    'prix'  =>  396,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  800,
                    'prix'  =>  400,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  800,
                    'prix'  =>  403,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  800,
                    'prix'  =>  407,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  800,
                    'prix'  =>  416,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  800,
                    'prix'  =>  420,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  800,
                    'prix'  =>  423,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  800,
                    'prix'  =>  427,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  800,
                    'prix'  =>  430,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  800,
                    'prix'  =>  436,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  800,
                    'prix'  =>  442,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  800,
                    'prix'  =>  446,
				],


				/* larg=900*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  900,
                    'prix'  =>  366,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  900,
                    'prix'  =>  369,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  900,
                    'prix'  =>  374,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  900,
                    'prix'  =>  378,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  900,
                    'prix'  =>  383,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  900,
                    'prix'  =>  387,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  900,
                    'prix'  =>  391,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  900,
                    'prix'  =>  396,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  900,
                    'prix'  =>  398,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  900,
                    'prix'  =>  404,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  900,
                    'prix'  =>  406,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  900,
                    'prix'  =>  411,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  900,
                    'prix'  =>  419,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  900,
                    'prix'  =>  424,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  900,
                    'prix'  =>  427,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  900,
                    'prix'  =>  431,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  900,
                    'prix'  =>  434,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  900,
                    'prix'  =>  439,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  900,
                    'prix'  =>  446,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  900,
                    'prix'  =>  449,
				],


				/* larg=1000*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1000,
                    'prix'  =>  369,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1000,
                    'prix'  =>  375,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1000,
                    'prix'  =>  380,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1000,
                    'prix'  =>  384,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1000,
                    'prix'  =>  387,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1000,
                    'prix'  =>  394,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1000,
                    'prix'  =>  398,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1000,
                    'prix'  =>  403,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1000,
                    'prix'  =>  406,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1000,
                    'prix'  =>  411,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1000,
                    'prix'  =>  415,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1000,
                    'prix'  =>  420,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1000,
                    'prix'  =>  427,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1000,
                    'prix'  =>  433,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1000,
                    'prix'  =>  437,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1000,
                    'prix'  =>  440,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1000,
                    'prix'  =>  443,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1000,
                    'prix'  => 449,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1000,
                    'prix'  =>  456,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1000,
                    'prix'  =>  460,
				],


				/* larg=1100*/ //here
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1100,
                    'prix'  =>  376,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1100,
                    'prix'  =>  381,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1100,
                    'prix'  =>  385,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1100,
                    'prix'  =>  388,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1100,
                    'prix'  =>  394,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1100,
                    'prix'  =>  400,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1100,
                    'prix'  =>  405,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1100,
                    'prix'  =>  409,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1100,
                    'prix'  =>  414,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1100,
                    'prix'  =>  419,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1100,
                    'prix'  =>  423,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1100,
                    'prix'  =>  428,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1100,
                    'prix'  =>  437,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1100,
                    'prix'  =>  442,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1100,
                    'prix'  =>  446,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1100,
                    'prix'  =>  450,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1100,
                    'prix'  =>  453,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1100,
                    'prix'  =>  460,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1100,
                    'prix'  =>  469,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1100,
                    'prix'  =>  472,
				],

				/* larg=1200*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1200,
                    'prix'  =>  381,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1200,
                    'prix'  =>  385,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1200,
                    'prix'  =>  388,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1200,
                    'prix'  =>  394,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1200,
                    'prix'  =>  400,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1200,
                    'prix'  =>  407,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1200,
                    'prix'  =>  412,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1200,
                    'prix'  =>  416,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1200,
                    'prix'  =>  421,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1200,
                    'prix'  =>  426,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1200,
                    'prix'  =>  431,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1200,
                    'prix'  =>  437,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1200,
                    'prix'  =>  445,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1200,
                    'prix'  =>  451,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1200,
                    'prix'  =>  455,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1200,
                    'prix'  =>  460,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1200,
                    'prix'  =>  464,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1200,
                    'prix'  =>  471,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1200,
                    'prix'  =>  477,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1200,
                    'prix'  =>  483,
				],

				/* larg=1300*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1300,
                    'prix'  =>  385,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1300,
                    'prix'  =>  388,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1300,
                    'prix'  =>  394,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1300,
                    'prix'  =>  398,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1300,
                    'prix'  =>  405,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1300,
                    'prix'  =>  413,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1300,
                    'prix'  =>  418,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1300,
                    'prix'  =>  422,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1300,
                    'prix'  =>  427,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1300,
                    'prix'  =>  434,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1300,
                    'prix'  =>  439,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1300,
                    'prix'  =>  443,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1300,
                    'prix'  =>  452,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1300,
                    'prix'  =>  459,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1300,
                    'prix'  =>  464,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1300,
                    'prix'  =>  470,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1300,
                    'prix'  =>  474,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1300,
                    'prix'  =>  479,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1300,
                    'prix'  =>  489,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1300,
                    'prix'  =>  513,
				],

				/* larg=1400*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1400,
                    'prix'  =>  388,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1400,
                    'prix'  =>  394,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1400,
                    'prix'  =>  400,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1400,
                    'prix'  =>  405,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1400,
                    'prix'  =>  411,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1400,
                    'prix'  =>  419,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1400,
                    'prix'  =>  424,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1400,
                    'prix'  =>  429,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1400,
                    'prix'  =>  434,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1400,
                    'prix'  =>  440,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1400,
                    'prix'  =>  446,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1400,
                    'prix'  =>  453,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1400,
                    'prix'  =>  461,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1400,
                    'prix'  => 470 ,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1400,
                    'prix'  => 473 ,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1400,
                    'prix'  =>  477,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1400,
                    'prix'  =>  484,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1400,
                    'prix'  =>  491,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1400,
                    'prix'  =>  519,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1400,
                    'prix'  =>  523,
				],


				/* larg=1500*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1500,
                    'prix'  =>  394,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1500,
                    'prix'  =>  400,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1500,
                    'prix'  =>  405,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1500,
                    'prix'  =>  410,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1500,
                    'prix'  =>  418,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1500,
                    'prix'  =>  426,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1500,
                    'prix'  =>  431,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1500,
                    'prix'  =>  437,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1500,
                    'prix'  =>  442,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1500,
                    'prix'  =>  449,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1500,
                    'prix'  =>  453,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1500,
                    'prix'  =>  461,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1500,
                    'prix'  =>  471,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1500,
                    'prix'  =>  477,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1500,
                    'prix'  =>  483,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1500,
                    'prix'  =>  489,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1500,
                    'prix'  =>  493,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1500,
                    'prix'  =>  520,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1500,
                    'prix'  =>  529,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1500,
                    'prix'  =>  534,
				],

				/* larg=1600*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1600,
                    'prix'  =>  398,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1600,
                    'prix'  =>  405,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1600,
                    'prix'  =>  410,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1600,
                    'prix'  =>  415,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1600,
                    'prix'  =>  424,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1600,
                    'prix'  =>  433,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1600,
                    'prix'  =>  439,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1600,
                    'prix'  =>  443,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1600,
                    'prix'  =>  449,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1600,
                    'prix'  =>  456,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1600,
                    'prix'  =>  461,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1600,
                    'prix'  =>  470,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1600,
                    'prix'  =>  477,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1600,
                    'prix'  =>  486,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1600,
                    'prix'  =>  492,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1600,
                    'prix'  =>  497,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1600,
                    'prix'  =>  522,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1600,
                    'prix'  =>  529,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1600,
                    'prix'  =>  540,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1600,
                    'prix'  =>  546,
				],


				/* larg=1700*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1700,
                    'prix'  =>  406,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1700,
                    'prix'  =>  412,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1700,
                    'prix'  =>  418,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1700,
                    'prix'  =>  424,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1700,
                    'prix'  =>  432,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1700,
                    'prix'  =>  440,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1700,
                    'prix'  =>  447,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1700,
                    'prix'  =>  453,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1700,
                    'prix'  =>  458,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1700,
                    'prix'  =>  467,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1700,
                    'prix'  =>  473,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1700,
                    'prix'  =>  479,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1700,
                    'prix'  =>  491,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1700,
                    'prix'  =>  498,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1700,
                    'prix'  =>  504,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1700,
                    'prix'  =>  529,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1700,
                    'prix'  =>  534,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1700,
                    'prix'  =>  543,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1700,
                    'prix'  =>  553,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1700,
                    'prix'  =>  559,
				],


				/* larg=1800*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1800,
                    'prix'  =>  410,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1800,
                    'prix'  =>  417,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1800,
                    'prix'  =>  423,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1800,
                    'prix'  =>  429,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1800,
                    'prix'  =>  438,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1800,
                    'prix'  =>  448,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1800,
                    'prix'  =>  453,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1800,
                    'prix'  =>  460,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1800,
                    'prix'  =>  467,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1800,
                    'prix'  =>  474,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1800,
                    'prix'  =>  479,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1800,
                    'prix'  =>  489,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1800,
                    'prix'  =>  498,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1800,
                    'prix'  =>  507,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1800,
                    'prix'  =>  532,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1800,
                    'prix'  =>  538,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1800,
                    'prix'  =>  545,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1800,
                    'prix'  =>  553,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1800,
                    'prix'  =>  563,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1800,
                    'prix'  =>  570,
				],

				/* larg=1900*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  1900,
                    'prix'  => 415 ,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  1900,
                    'prix'  =>  422,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  1900,
                    'prix'  =>  428,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  1900,
                    'prix'  =>  434,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  1900,
                    'prix'  =>  443,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  1900,
                    'prix'  =>  453,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  1900,
                    'prix'  =>  460,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  1900,
                    'prix'  =>  468,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  1900,
                    'prix'  =>  473,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  1900,
                    'prix'  =>  480,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  1900,
                    'prix'  =>  489,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  1900,
                    'prix'  =>  496,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  1900,
                    'prix'  =>  508,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  1900,
                    'prix'  =>  534,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  1900,
                    'prix'  =>  541,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  1900,
                    'prix'  => 549 ,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  1900,
                    'prix'  => 553,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  1900,
                    'prix'  =>  563,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  1900,
                    'prix'  =>  575,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  1900,
                    'prix'  =>  581,
				],

				/* larg=2000*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2000,
                    'prix'  =>  420,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2000,
                    'prix'  =>  427,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2000,
                    'prix'  =>  434,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2000,
                    'prix'  =>  440,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2000,
                    'prix'  =>  449,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2000,
                    'prix'  =>  460,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2000,
                    'prix'  =>  468,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2000,
                    'prix'  =>  474,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2000,
                    'prix'  =>  479,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2000,
                    'prix'  =>  491,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2000,
                    'prix'  =>  495,
				],					[

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2000,
                    'prix'  =>  505,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2000,
                    'prix'  =>  534,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2000,
                    'prix'  =>  545,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2000,
                    'prix'  =>  551,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2000,
                    'prix'  =>  558,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2000,
                    'prix'  =>  564,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2000,
                    'prix'  =>  575,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2000,
                    'prix'  =>  586,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2000,
                    'prix'  =>  593,
				],

				/* larg=2100*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2100,
                    'prix'  =>  425,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2100,
                    'prix'  =>  432,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2100,
                    'prix'  =>  439,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2100,
                    'prix'  =>  446,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2100,
                    'prix'  =>  455,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2100,
                    'prix'  =>  468,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2100,
                    'prix'  =>  474,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2100,
                    'prix'  =>  480,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2100,
                    'prix'  =>  489,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2100,
                    'prix'  =>  496,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2100,
                    'prix'  =>  504,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2100,
                    'prix'  =>  532,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2100,
                    'prix'  =>  544,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2100,
                    'prix'  =>  553,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2100,
                    'prix'  =>  560,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2100,
                    'prix'  =>  567,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2100,
                    'prix'  =>  575,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2100,
                    'prix'  =>  584,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2100,
                    'prix'  =>  596,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2100,
                    'prix'  =>  638,
				],

				/* larg=2200*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2200,
                    'prix'  =>  429,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2200,
                    'prix'  =>  437,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2200,
                    'prix'  =>  443,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2200,
                    'prix'  =>  452,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2200,
                    'prix'  =>  461,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2200,
                    'prix'  =>  473,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2200,
                    'prix'  =>  479,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2200,
                    'prix'  =>  489,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2200,
                    'prix'  =>  495,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2200,
                    'prix'  =>  504,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2200,
                    'prix'  =>  513,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2200,
                    'prix'  =>  541,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2200,
                    'prix'  =>  552,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2200,
                    'prix'  =>  562,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2200,
                    'prix'  =>  570,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2200,
                    'prix'  =>  576,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2200,
                    'prix'  =>  584,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2200,
                    'prix'  =>  594,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2200,
                    'prix'  =>  607,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2200,
                    'prix'  =>  649,
				],

				/* larg=2300*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2300,
                    'prix'  =>  434,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2300,
                    'prix'  =>  442,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2300,
                    'prix'  =>  449,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2300,
                    'prix'  =>  458,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2300,
                    'prix'  =>  469,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2300,
                    'prix'  =>  479,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2300,
                    'prix'  =>  488,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2300,
                    'prix'  =>  495,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2300,
                    'prix'  =>  503,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2300,
                    'prix'  =>  513,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2300,
                    'prix'  =>  538,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2300,
                    'prix'  =>  550,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2300,
                    'prix'  =>  560,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2300,
                    'prix'  =>  572,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2300,
                    'prix'  =>  580,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2300,
                    'prix'  =>  587,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2300,
                    'prix'  =>  594,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2300,
                    'prix'  =>  605,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2300,
                    'prix'  => 652,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2300,
                    'prix'  =>  660,
				],

				/* larg=2400*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2400,
                    'prix'  =>  439,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2400,
                    'prix'  =>  447,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2400,
                    'prix'  =>  454,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2400,
                    'prix'  =>  462,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2400,
                    'prix'  =>  474,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2400,
                    'prix'  =>  486,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2400,
                    'prix'  =>  494,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2400,
                    'prix'  =>  502,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2400,
                    'prix'  =>  510,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2400,
                    'prix'  =>  539,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2400,
                    'prix'  =>  547,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2400,
                    'prix'  =>  558,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2400,
                    'prix'  =>  569,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2400,
                    'prix'  =>  580,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2400,
                    'prix'  =>  589,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2400,
                    'prix'  =>  596,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2400,
                    'prix'  =>  605,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2400,
                    'prix'  =>  650,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2400,
                    'prix'  =>  663,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2400,
                    'prix'  =>  671,
				],
				/* larg=2500*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2500,
                    'prix'  =>  443,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2500,
                    'prix'  =>  452,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2500,
                    'prix'  =>  460,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2500,
                    'prix'  =>  470,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2500,
                    'prix'  =>  479,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2500,
                    'prix'  =>  492,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2500,
                    'prix'  =>  501,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2500,
                    'prix'  =>  508,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2500,
                    'prix'  =>  516,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2500,
                    'prix'  =>  547,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2500,
                    'prix'  =>  553,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2500,
                    'prix'  =>  565,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2500,
                    'prix'  =>  578,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2500,
                    'prix'  => 590,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2500,
                    'prix'  =>  596,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2500,
                    'prix'  =>  606,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2500,
                    'prix'  =>  615,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2500,
                    'prix'  =>  661,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2500,
                    'prix'  =>  674,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2700,
                    'largeur'  =>  2500,
                    'prix'  =>  682,
				],

				/* larg=2600*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2600,
                    'prix'  =>  451,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2600,
                    'prix'  =>  459,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2600,
                    'prix'  =>  469,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2600,
                    'prix'  =>  476,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2600,
                    'prix'  =>  489,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2600,
                    'prix'  =>  502,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2600,
                    'prix'  =>  510,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2600,
                    'prix'  =>  519,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2600,
                    'prix'  =>  546,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2600,
                    'prix'  =>  557,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2600,
                    'prix'  =>  488,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2600,
                    'prix'  =>  529,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2600,
                    'prix'  =>  537,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2600,
                    'prix'  =>  547,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2600,
                    'prix'  =>  556,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2600,
                    'prix'  =>  572,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2600,
                    'prix'  =>  580,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2600,
                    'prix'  =>  590,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2600,
                    'prix'  =>  599,
				],

				/* larg=2700*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2700,
                    'prix'  =>  455,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2700,
                    'prix'  =>  464,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2700,
                    'prix'  =>  473,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2700,
                    'prix'  =>  480,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2700,
                    'prix'  =>  494,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2700,
                    'prix'  =>  507,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2700,
                    'prix'  =>  516,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2700,
                    'prix'  =>  524,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2700,
                    'prix'  =>  552,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2700,
                    'prix'  =>  563,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2700,
                    'prix'  =>  574,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2700,
                    'prix'  =>  585,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2700,
                    'prix'  =>  597,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2700,
                    'prix'  =>  612,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2700,
                    'prix'  =>  618,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2700,
                    'prix'  =>  663,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2700,
                    'prix'  =>  672,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2700,
                    'prix'  =>  684,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2600,
                    'largeur'  =>  2700,
                    'prix'  =>  701,
				],

				/* larg=2800*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2800,
                    'prix'  =>  460,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2800,
                    'prix'  =>  470,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2800,
                    'prix'  =>  477,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2800,
                    'prix'  =>  488,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2800,
                    'prix'  =>  499,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2800,
                    'prix'  =>  514,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2800,
                    'prix'  =>  523,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2800,
                    'prix'  =>  531,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2800,
                    'prix'  =>  560,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2800,
                    'prix'  =>  572,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2800,
                    'prix'  =>  581,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2800,
                    'prix'  =>  594,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2800,
                    'prix'  =>  607,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2800,
                    'prix'  =>  618,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2800,
                    'prix'  =>  630,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2800,
                    'prix'  =>  673,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2800,
                    'prix'  =>  682,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2800,
                    'prix'  =>  695,
				],

				/* larg=2900*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  2900,
                    'prix'  =>  466,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  2900,
                    'prix'  =>  474,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  2900,
                    'prix'  =>  484,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  2900,
                    'prix'  =>  492,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  2900,
                    'prix'  =>  506,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  2900,
                    'prix'  =>  520,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  2900,
                    'prix'  =>  529,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  2900,
                    'prix'  =>  558,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  2900,
                    'prix'  =>  567,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  2900,
                    'prix'  =>  580,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  2900,
                    'prix'  =>  590,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  2900,
                    'prix'  =>  601,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  2900,
                    'prix'  =>  615,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  2900,
                    'prix'  =>  630,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  2900,
                    'prix'  =>  673,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  2900,
                    'prix'  =>  683,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  2900,
                    'prix'  =>  691,
				],
				[
                    'type'  => 1,
                    'hauteur'  =>  2500,
                    'largeur'  =>  2900,
                    'prix'  =>  704,
				],

				/* larg=3000*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  3000,
                    'prix'  =>  470,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  3000,
                    'prix'  =>  478,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3000,
                    'prix'  =>  489,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3000,
                    'prix'  =>  498,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3000,
                    'prix'  =>  513,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3000,
                    'prix'  =>  528,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3000,
                    'prix'  =>  535,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3000,
                    'prix'  =>  564,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3000,
                    'prix'  =>  575,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3000,
                    'prix'  =>  587,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3000,
                    'prix'  =>  596,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3000,
                    'prix'  =>  612,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3000,
                    'prix'  =>  624,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3000,
                    'prix'  =>  673,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3000,
                    'prix'  =>  683,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3000,
                    'prix'  =>  692,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  3000,
                    'prix'  =>  703,
				],

				/* larg=3100*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  3100,
                    'prix'  =>  474,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  3100,
                    'prix'  =>  484,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3100,
                    'prix'  =>  494,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3100,
                    'prix'  =>  504,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3100,
                    'prix'  =>  519,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3100,
                    'prix'  =>  532,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3100,
                    'prix'  =>  543,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3100,
                    'prix'  =>  572,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3100,
                    'prix'  =>  581,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3100,
                    'prix'  =>  594,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3100,
                    'prix'  =>  605,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3100,
                    'prix'  =>  618,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3100,
                    'prix'  =>  633,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3100,
                    'prix'  =>  682,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3100,
                    'prix'  =>  691,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3100,
                    'prix'  =>  703,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2400,
                    'largeur'  =>  3100,
                    'prix'  =>  712,
				],

				/* larg=3200*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  3200,
                    'prix'  =>  481,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  3200,
                    'prix'  =>  492,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3200,
                    'prix'  =>  502,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3200,
                    'prix'  =>  512,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3200,
                    'prix'  =>  526,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3200,
                    'prix'  =>  541,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3200,
                    'prix'  =>  550,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3200,
                    'prix'  =>  580,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3200,
                    'prix'  =>  590,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3200,
                    'prix'  =>  601,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3200,
                    'prix'  =>  613,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3200,
                    'prix'  =>  627,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3200,
                    'prix'  =>  641,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3200,
                    'prix'  =>  690,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3200,
                    'prix'  =>  702,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3200,
                    'prix'  =>  712,
				],
				/* larg=3300*/
				[

                    'type'  => 1,
                    'hauteur'  =>  800,
                    'largeur'  =>  3300,
                    'prix'  =>  489,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  900,
                    'largeur'  =>  3300,
                    'prix'  =>  496,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1000,
                    'largeur'  =>  3300,
                    'prix'  =>  507,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1100,
                    'largeur'  =>  3300,
                    'prix'  =>  516,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1200,
                    'largeur'  =>  3300,
                    'prix'  =>  531,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1300,
                    'largeur'  =>  3300,
                    'prix'  =>  548,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1400,
                    'largeur'  =>  3300,
                    'prix'  =>  557,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1500,
                    'largeur'  =>  3300,
                    'prix'  =>  587,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1600,
                    'largeur'  =>  3300,
                    'prix'  =>  595,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1700,
                    'largeur'  =>  3300,
                    'prix'  =>  608,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  1800,
                    'largeur'  =>  3300,
                    'prix'  =>  618,
				],
                    [

                    'type'  => 1,
                    'hauteur'  =>  1900,
                    'largeur'  =>  3300,
                    'prix'  =>  635,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2000,
                    'largeur'  =>  3300,
                    'prix'  =>  649,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2100,
                    'largeur'  =>  3300,
                    'prix'  =>  699,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2200,
                    'largeur'  =>  3300,
                    'prix'  =>  711,
				],
				[

                    'type'  => 1,
                    'hauteur'  =>  2300,
                    'largeur'  =>  3300,
                    'prix'  =>  722,
				],


			];

            Shutter::insert($shutters);

        }


    }
}
