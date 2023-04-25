<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Door;
use App\Models\Seeders;

class ModelesDoorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Door::where('id',1)->count();

        //Check if the seeder exist in the DB
        if ($seeder==0) {
            $modeles =
            [
				[
					'id'    => 1,
                    'texte'    =>'OMICRON 0' ,
                    'prix'  => 3925,
				],
				[
					'id'    =>2 ,
                    'texte'    =>'OMICRON S1' ,
                    'prix'  => 4238,
				],
				[
					'id'    =>3 ,
                    'texte'    =>'OMICRON S3' ,
                    'prix'  => 4427,
				],
				[
					'id'    =>4 ,
                    'texte'    =>'OMICRON S5' ,
                    'prix'  => 4575,
				],
				[
					'id'    =>5 ,
                    'texte'    =>'THETA S1' ,
                    'prix'  => 4477,
				],
				[
					'id'    =>6 ,
                    'texte'    =>'UPSILON S4' ,
                    'prix'  => 4456,
				],
				[
					'id'    => 7,
                    'texte'    =>'LAMBDA S1' ,
                    'prix'  => 4644,
				],
				[
					'id'    => 8,
                    'texte'    =>'DELTA S2' ,
                    'prix'  => 4294,
				],
				[
					'id'    => 9,
                    'texte'    =>'ZETA S0' ,
                    'prix'  => 4131,
				],
				[
					'id'    => 10,
                    'texte'    =>'ZETA S1' ,
                    'prix'  =>4328 ,
				],
				[
					'id'    => 11,
                    'texte'    =>'TAU S0' ,
                    'prix'  =>4158 ,
				],
				[
					'id'    => 12,
                    'texte'    =>'PHI S1' ,
                    'prix'  => 4628,
				],
				[
					'id'    => 14,
                    'texte'    =>'EPSILON S4' ,
                    'prix'  => 4456 ,
				],
				[
					'id'    =>15 ,
                    'texte'    =>'ALPHA S0' ,
                    'prix'  => 4135,
				],
				[
					'id'    =>16 ,
                    'texte'    =>'ALPHA S1' ,
                    'prix'  => 4293,
				],
				[
					'id'    => 17,
                    'texte'    =>'BETA S0' ,
                    'prix'  => 4131,
				],
				[
					'id'    => 18,
                    'texte'    =>'BETA S1' ,
                    'prix'  => 4364,
				],
				[
					'id'    => 19,
                    'texte'    =>'IOTA S0' ,
                    'prix'  => 4131,
				],
				[
					'id'    => 20,
                    'texte'    =>'IOTA S1' ,
                    'prix'  => 4238,
				],
				[
					'id'    => 21,
                    'texte'    =>'OMEGA S2' ,
                    'prix'  => 4318,
				],
				[
					'id'    => 22,
                    'texte'    =>'GAMMA S0' ,
                    'prix'  => 4288,
				],
				[
					'id'    => 23,
                    'texte'    =>'GAMMA S1' ,
                    'prix'  => 4288,
				],
				[
					'id'    => 24,
                    'texte'    =>'KAPPA S0' ,
                    'prix'  => 4318,
				],
				[
					'id'    => 25,
                    'texte'    =>'KAPPA S1' ,
                    'prix'  => 4318,
				],
				[
					'id'    => 26,
                    'texte'    =>'SIGMA S0' ,
                    'prix'  => 4131,
				],
				[
					'id'    => 27,
                    'texte'    =>'SIGMA S1' ,
                    'prix'  => 4364,
				],
				[
					'id'    => 28,
                    'texte'    =>'SIGMA S2' ,
                    'prix'  => 4456,
				],
				[
					'id'    => 29,
                    'texte'    =>'SIGMA S3' ,
                    'prix'  => 4472,
				],
				[
					'id'    => 30,
                    'texte'    =>'TRADITION N°1 S3' ,
                    'prix'  => 4383,
				],
				[
					'id'    => 31,
                    'texte'    =>'TRADITION N°2 S4' ,
                    'prix'  => 4492,
				],
				[
					'id'    => 32,
                    'texte'    =>'TRADITION N°3 S1' ,
                    'prix'  => 4266,
				],
				[
					'id'    => 33,
                    'texte'    =>'TRADITION N°4 S1' ,
                    'prix'  => 4261,
				],
				[
					'id'    => 34,
                    'texte'    =>'TRADITION N°5 S1' ,
                    'prix'  => 4296,
				],
				[
					'id'    => 35,
                    'texte'    =>'TRADITION N°6 S1' ,
                    'prix'  => 4261,
				],
				[
					'id'    => 36,
                    'texte'    =>'TRADITION N°7 S4' ,
                    'prix'  => 4434,
				],
				[
					'id'    => 37,
                    'texte'    =>'TRADITION N°8 S1' ,
                    'prix'  => 4346,
				],
				[
					'id'    => 38,
                    'texte'    =>'TRADITION N°9 S3' ,
                    'prix'  => 4524,
				],
				[
					'id'    => 39,
                    'texte'    =>'TRADITION N°10 S2' ,
                    'prix'  => 4412,
				],
				[
					'id'    => 40,
                    'texte'    =>'TRADITION N°11 S1' ,
                    'prix'  => 4383,
				],
				[
					'id'    => 41,
                    'texte'    =>'TRADITION N°12 S3' ,
                    'prix'  => 4383,
				],
				[
					'id'    => 42,
                    'texte'    =>'TRADITION N°13 S1' ,
                    'prix'  => 4261,
				],
				[
					'id'    => 43,
                    'texte'    =>'CONTEMPORAIN N°1' ,
                    'prix'  => 4409,
				],
				[
					'id'    => 44,
                    'texte'    =>'CONTEMPORAIN N°2' ,
                    'prix'  => 4524,
				],
				[
					'id'    => 45,
                    'texte'    =>'CONTEMPORAIN N°3' ,
                    'prix'  => 4291,
				],
				[
					'id'    => 46,
                    'texte'    =>'CONTEMPORAIN N°4' ,
                    'prix'  => 4593,
				],
				[
					'id'    => 47,
                    'texte'    =>'CONTEMPORAIN N°5' ,
                    'prix'  => 4377,
				],
				[
					'id'    => 48,
                    'texte'    =>'CONTEMPORAIN N°6' ,
                    'prix'  => 4707,
				],
				[
					'id'    => 49,
                    'texte'    =>'CONTEMPORAIN N°7' ,
                    'prix'  => 4425,
				],
				[
					'id'    => 50,
                    'texte'    =>'CONTEMPORAIN N°8' ,
                    'prix'  => 4622,
				],
				[
					'id'    => 51,
                    'texte'    =>'CONTEMPORAIN N°9' ,
                    'prix'  => 4613,
				],
				[
					'id'    => 52,
                    'texte'    =>'CONTEMPORAIN N°10' ,
                    'prix'  => 4656,
				],
				[
					'id'    => 53,
                    'texte'    =>'CONTEMPORAIN N°11' ,
                    'prix'  => 4559,
				],
				[
					'id'    => 54,
                    'texte'    =>'CONTEMPORAIN N°12' ,
                    'prix'  => 4506,
				],
				[
					'id'    => 55,
                    'texte'    =>'CONTEMPORAIN N°13' ,
                    'prix'  => 4593,
				],
				[
					'id'    => 56,
                    'texte'    =>'CONTEMPORAIN N°14' ,
                    'prix'  => 4398,
				],
				[
					'id'    => 57,
                    'texte'    =>'CONTEMPORAIN N°15' ,
                    'prix'  => 4401,
				],
				[
					'id'    => 58,
                    'texte'    =>'CONTEMPORAIN N°16' ,
                    'prix'  => 5183,
				],
				[
					'id'    => 59,
                    'texte'    =>'CONTEMPORAIN N°17' ,
                    'prix'  => 4442,
				],
				[
					'id'    => 60,
                    'texte'    =>'CONTEMPORAIN N°18' ,
                    'prix'  => 4536,
				],
				[
					'id'    => 61,
                    'texte'    =>'CONTEMPORAIN N°19' ,
                    'prix'  => 4279,
				],
				[
					'id'    => 62,
                    'texte'    =>'CONTEMPORAIN N°20' ,
                    'prix'  => 4442,
				],
			];

            Door::insert($modeles);

        }


    }
}
