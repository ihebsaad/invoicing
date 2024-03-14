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
        $seeder = Door::where('id', 1)->count();

        // Vérifiez si le seeder existe dans la base de données
        if ($seeder == 0) {
            $modeles = [
                ['texte' => 'OMICRON 0', 'prix' => 3720.20],
                ['texte' => 'OMICRON S1', 'prix' => 4017.02],
                ['texte' => 'OMICRON S3', 'prix' => 4195.67],
                ['texte' => 'OMICRON S5', 'prix' => 4336.57],
                ['texte' => 'THETA S1', 'prix' => 4243.61],
                ['texte' => 'UPSILON S4', 'prix' => 4223.82],
                ['texte' => 'LAMBDA S1', 'prix' => 4401.34],
                ['texte' => 'DELTA S2', 'prix' => 4069.80],
                ['texte' => 'ZETA S0', 'prix' => 3915.17],
                ['texte' => 'ZETA S1', 'prix' => 4102.03],
                ['texte' => 'TAU S0', 'prix' => 3941.36],
                ['texte' => 'PHI S1', 'prix' => 4386.48],
                ['texte' => 'EPSILON S4', 'prix' => 4223.82],
                ['texte' => 'ALPHA S0', 'prix' => 3918.96],
                ['texte' => 'ALPHA S1', 'prix' => 4069.21],
                ['texte' => 'BETA S0', 'prix' => 3915.17],
                ['texte' => 'BETA S1', 'prix' => 4136.07],
                ['texte' => 'IOTA S0', 'prix' => 3915.17],
                ['texte' => 'IOTA S1', 'prix' => 4017.02],
                ['texte' => 'OMEGA S2', 'prix' => 4092.29],
                ['texte' => 'GAMMA S0', 'prix' => 4064.18],
                ['texte' => 'GAMMA S1', 'prix' => 4064.18],
                ['texte' => 'KAPPA S0', 'prix' => 4092.29],
                ['texte' => 'KAPPA S1', 'prix' =>4092.29],
                ['texte' => 'SIGMA S0', 'prix' => 3915.17],
                ['texte' => 'SIGMA S1', 'prix' =>4135.97],
                ['texte' => 'SIGMA S2', 'prix' => 4223.95],
                ['texte' => 'SIGMA S3', 'prix' =>4238.84],
                ['texte' => 'TRADITION N°1 S3', 'prix' => 4154.59],
                ['texte' => 'TRADITION N°2 S4', 'prix' => 4197.79 ],
                ['texte' => 'TRADITION N°3 S1', 'prix' => 4043.83 ],
                ['texte' => 'TRADITION N°4 S1', 'prix' => 4038.60],
                ['texte' => 'TRADITION N°5 S1', 'prix' => 4071.57],
                ['texte' => 'TRADITION N°6 S1', 'prix' => 4038.60],
                ['texte' => 'TRADITION N°7 S4', 'prix' => 4211.63],
                ['texte' => 'TRADITION N°8 S1', 'prix' => 4119.34],
                ['texte' => 'TRADITION N°9 S3', 'prix' => 4288.12],
                ['texte' => 'TRADITION N°10 S2', 'prix' => 4181.87],
                ['texte' => 'TRADITION N°11 S1', 'prix' => 4154.59],
                ['texte' => 'TRADITION N°12 S3', 'prix' => 4154.59],
                ['texte' => 'TRADITION N°13 S1', 'prix' => 4038.60],
                ['texte' => 'CONTEMPORAIN N°1 S2', 'prix' =>4179.55],
                ['texte' => 'CONTEMPORAIN N°2 S1', 'prix' => 4288.12],
                ['texte' => 'CONTEMPORAIN N°3 S1', 'prix' =>4067.03],
                ['texte' => 'CONTEMPORAIN N°4 S1', 'prix' => 4353.25],
                ['texte' => 'CONTEMPORAIN N°5 S2', 'prix' => 4148.90],
                ['texte' => 'CONTEMPORAIN N°6 S4', 'prix' => 4461.63],
                ['texte' => 'CONTEMPORAIN N°7 S1', 'prix' => 4194.39],
                ['texte' => 'CONTEMPORAIN N°8 S3', 'prix' => 4380.89],
                ['texte' => 'CONTEMPORAIN N°9 S4', 'prix' => 4372.72],
                ['texte' => 'CONTEMPORAIN N°10 S4', 'prix' =>4412.85],
                ['texte' => 'CONTEMPORAIN N°11 S0', 'prix' => 4321.46],
                ['texte' => 'CONTEMPORAIN N°12 S3', 'prix' => 4270.94],
                ['texte' => 'CONTEMPORAIN N°13 S4', 'prix' => 4353.73],
                ['texte' => 'CONTEMPORAIN N°14 S4', 'prix' => 4168.48],
                ['texte' => 'CONTEMPORAIN N°15 S3', 'prix' => 4171.72],
                ['texte' => 'CONTEMPORAIN N°16 S4', 'prix' => 4913.07],
                ['texte' => 'CONTEMPORAIN N°17 S2', 'prix' => 4210.31],
                ['texte' => 'CONTEMPORAIN N°18 S4', 'prix' => 4299.39],
                ['texte' => 'CONTEMPORAIN N°19 S4', 'prix' =>4055.65],
                ['texte' => 'CONTEMPORAIN N°20 S4', 'prix' => 4210.31],
                ['texte' => 'OMICRON S0 Classique 36', 'prix' => 3921.39],
                ['texte' => 'OMICRON S1 Classique 36', 'prix' => 4092.59],
                ['texte' => 'OMICRON S5 Classique 36', 'prix' => 4282.65],
                ['texte' => 'THETA S1 Classique 36', 'prix' => 4171.99],
                ['texte' => 'UPSILON S4 Classique 36', 'prix' => 4328.28],
                ['texte' => 'LAMBDA S1 Classique 36', 'prix' => 4415.15],
                ['texte' => 'DELTA S2 Classique 36', 'prix' => 4078.39],
                ['texte' => 'ZETA S0 Classique 36', 'prix' => 3921.39],
                ['texte' => 'ZETA S1 Classique 36', 'prix' => 4069.31],
                ['texte' => 'TAU S0 Classique 36', 'prix' => 4020.06],
                ['texte' => 'PHI S1 Classique 36', 'prix' => 4365.13],
                ['texte' => 'EPSILON S4 Classique 36', 'prix' => 4185.55],
                ['texte' => 'ALPHA S0 Classique 36', 'prix' => 3924.95],
                ['texte' => 'ALPHA S1 Classique 36', 'prix' => 4038.60],
                ['texte' => 'BETA S0 Classique 36', 'prix' => 3921.39],
                ['texte' => 'BETA S1 Classique 36', 'prix' => 4101.13],
                ['texte' => 'IOTA S0 Classique 36', 'prix' => 3921.39],
                ['texte' => 'IOTA S1 Classique 36', 'prix' => 3920.09],
                ['texte' => 'IOTA S3 Classique 36', 'prix' => 4115.46],
                ['texte' => 'IOTA S5 Classique 36', 'prix' => 4151.44],
                ['texte' => 'GAMMA S1 Classique 36', 'prix' => 4101.78],
                ['texte' => 'KAPPA 0 S1 Classique 36', 'prix' => 4060.21],
                ['texte' => 'KAPPA S1 Classique 36', 'prix' => 4060.21],
                ['texte' => 'SIGMA S0 Classique 36', 'prix' => 4140.95],
                ['texte' => 'SIGMA S1 Classique 36', 'prix' => 4195.95],
                ['texte' => 'SIGMA S2 Classique 36', 'prix' => 4290.17],
            ];

            Door::insert($modeles);
        }
    }
}
