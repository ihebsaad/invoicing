<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Door;

class ModelesDoorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Door::where('genre',1)->count();

        // Vérifiez si le seeder existe dans la base de données
        if ($seeder == 0) {
            $modeles = [
                ['genre'=>1,'texte' => 'OMICRON 0', 'prix' => 3720.20],
                ['genre'=>1,'texte' => 'OMICRON S1', 'prix' => 4017.02],
                ['genre'=>1,'texte' => 'OMICRON S3', 'prix' => 4195.67],
                ['genre'=>1,'texte' => 'OMICRON S5', 'prix' => 4336.57],
                ['genre'=>1,'texte' => 'THETA S1', 'prix' => 4243.61],
                ['genre'=>1,'texte' => 'UPSILON S4', 'prix' => 4223.82],
                ['genre'=>1,'texte' => 'LAMBDA S1', 'prix' => 4401.34],
                ['genre'=>1,'texte' => 'DELTA S2', 'prix' => 4069.80],
                ['genre'=>1,'texte' => 'ZETA S0', 'prix' => 3915.17],
                ['genre'=>1,'texte' => 'ZETA S1', 'prix' => 4102.03],
                ['genre'=>1,'texte' => 'TAU S0', 'prix' => 3941.36],
                ['genre'=>1,'texte' => 'PHI S1', 'prix' => 4386.48],
                ['genre'=>1,'texte' => 'EPSILON S4', 'prix' => 4223.82],
                ['genre'=>1,'texte' => 'ALPHA S0', 'prix' => 3918.96],
                ['genre'=>1,'texte' => 'ALPHA S1', 'prix' => 4069.21],
                ['genre'=>1,'texte' => 'BETA S0', 'prix' => 3915.17],
                ['genre'=>1,'texte' => 'BETA S1', 'prix' => 4136.07],
                ['genre'=>1,'texte' => 'IOTA S0', 'prix' => 3915.17],
                ['genre'=>1,'texte' => 'IOTA S1', 'prix' => 4017.02],
                ['genre'=>1,'texte' => 'OMEGA S2', 'prix' => 4092.29],
                ['genre'=>1,'texte' => 'GAMMA S0', 'prix' => 4064.18],
                ['genre'=>1,'texte' => 'GAMMA S1', 'prix' => 4064.18],
                ['genre'=>1,'texte' => 'KAPPA S0', 'prix' => 4092.29],
                ['genre'=>1,'texte' => 'KAPPA S1', 'prix' =>4092.29],
                ['genre'=>1,'texte' => 'SIGMA S0', 'prix' => 3915.17],
                ['genre'=>1,'texte' => 'SIGMA S1', 'prix' =>4135.97],
                ['genre'=>1,'texte' => 'SIGMA S2', 'prix' => 4223.95],
                ['genre'=>1,'texte' => 'SIGMA S3', 'prix' =>4238.84],
                ['genre'=>1,'texte' => 'TRADITION N°1 S3', 'prix' => 4154.59],
                ['genre'=>1,'texte' => 'TRADITION N°2 S4', 'prix' => 4197.79 ],
                ['genre'=>1,'texte' => 'TRADITION N°3 S1', 'prix' => 4043.83 ],
                ['genre'=>1,'texte' => 'TRADITION N°4 S1', 'prix' => 4038.60],
                ['genre'=>1,'texte' => 'TRADITION N°5 S1', 'prix' => 4071.57],
                ['genre'=>1,'texte' => 'TRADITION N°6 S1', 'prix' => 4038.60],
                ['genre'=>1,'texte' => 'TRADITION N°7 S4', 'prix' => 4211.63],
                ['genre'=>1,'texte' => 'TRADITION N°8 S1', 'prix' => 4119.34],
                ['genre'=>1,'texte' => 'TRADITION N°9 S3', 'prix' => 4288.12],
                ['genre'=>1,'texte' => 'TRADITION N°10 S2', 'prix' => 4181.87],
                ['genre'=>1,'texte' => 'TRADITION N°11 S1', 'prix' => 4154.59],
                ['genre'=>1,'texte' => 'TRADITION N°12 S3', 'prix' => 4154.59],
                ['genre'=>1,'texte' => 'TRADITION N°13 S1', 'prix' => 4038.60],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°1 S2', 'prix' =>4179.55],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°2 S1', 'prix' => 4288.12],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°3 S1', 'prix' =>4067.03],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°4 S1', 'prix' => 4353.25],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°5 S2', 'prix' => 4148.90],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°6 S4', 'prix' => 4461.63],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°7 S1', 'prix' => 4194.39],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°8 S3', 'prix' => 4380.89],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°9 S4', 'prix' => 4372.72],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°10 S4', 'prix' =>4412.85],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°11 S0', 'prix' => 4321.46],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°12 S3', 'prix' => 4270.94],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°13 S4', 'prix' => 4353.73],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°14 S4', 'prix' => 4168.48],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°15 S3', 'prix' => 4171.72],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°16 S4', 'prix' => 4913.07],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°17 S2', 'prix' => 4210.31],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°18 S4', 'prix' => 4299.39],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°19 S4', 'prix' =>4055.65],
                ['genre'=>1,'texte' => 'CONTEMPORAIN N°20 S4', 'prix' => 4210.31],
                ['genre'=>1,'texte' => 'OMICRON S0 Classique 36', 'prix' => 3921.39],
                ['genre'=>1,'texte' => 'OMICRON S1 Classique 36', 'prix' => 4092.59],
                ['genre'=>1,'texte' => 'OMICRON S5 Classique 36', 'prix' => 4282.65],
                ['genre'=>1,'texte' => 'THETA S1 Classique 36', 'prix' => 4171.99],
                ['genre'=>1,'texte' => 'UPSILON S4 Classique 36', 'prix' => 4328.28],
                ['genre'=>1,'texte' => 'LAMBDA S1 Classique 36', 'prix' => 4415.15],
                ['genre'=>1,'texte' => 'DELTA S2 Classique 36', 'prix' => 4078.39],
                ['genre'=>1,'texte' => 'ZETA S0 Classique 36', 'prix' => 3921.39],
                ['genre'=>1,'texte' => 'ZETA S1 Classique 36', 'prix' => 4069.31],
                ['genre'=>1,'texte' => 'TAU S0 Classique 36', 'prix' => 4020.06],
                ['genre'=>1,'texte' => 'PHI S1 Classique 36', 'prix' => 4365.13],
                ['genre'=>1,'texte' => 'EPSILON S4 Classique 36', 'prix' => 4185.55],
                ['genre'=>1,'texte' => 'ALPHA S0 Classique 36', 'prix' => 3924.95],
                ['genre'=>1,'texte' => 'ALPHA S1 Classique 36', 'prix' => 4038.60],
                ['genre'=>1,'texte' => 'BETA S0 Classique 36', 'prix' => 3921.39],
                ['genre'=>1,'texte' => 'BETA S1 Classique 36', 'prix' => 4101.13],
                ['genre'=>1,'texte' => 'IOTA S0 Classique 36', 'prix' => 3921.39],
                ['genre'=>1,'texte' => 'IOTA S1 Classique 36', 'prix' => 3920.09],
                ['genre'=>1,'texte' => 'IOTA S3 Classique 36', 'prix' => 4115.46],
                ['genre'=>1,'texte' => 'IOTA S5 Classique 36', 'prix' => 4151.44],
                ['genre'=>1,'texte' => 'GAMMA S1 Classique 36', 'prix' => 4101.78],
                ['genre'=>1,'texte' => 'KAPPA 0 S1 Classique 36', 'prix' => 4060.21],
                ['genre'=>1,'texte' => 'KAPPA S1 Classique 36', 'prix' => 4060.21],
                ['genre'=>1,'texte' => 'SIGMA S0 Classique 36', 'prix' => 4140.95],
                ['genre'=>1,'texte' => 'SIGMA S1 Classique 36', 'prix' => 4195.95],
                ['genre'=>1,'texte' => 'SIGMA S2 Classique 36', 'prix' => 4290.17],
            ];

            Door::insert($modeles);
        }
    }
}
