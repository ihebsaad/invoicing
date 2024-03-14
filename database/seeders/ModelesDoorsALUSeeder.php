<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Door;

class ModelesDoorsALUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Door::where('texte','LIKE', 'ALU%')->count();

        // Vérifiez si le seeder existe dans la base de données
        if ($seeder == 0) {
            $modeles = [
                ['texte' => 'ALU_GR40_ALB', 'prix' => 5014],
                ['texte' => 'ALU_GR40_ALB1', 'prix' => 5126],
                ['texte' => 'ALU_GR40_ALE', 'prix' => 5372],
                ['texte' => 'ALU_GR40_ALE2', 'prix' => 5674],
                ['texte' => 'ALU_GR40_ANN', 'prix' => 5116],
                ['texte' => 'ALU_GR40_ANN1', 'prix' => 5232],
                ['texte' => 'ALU_GR40_ANN2', 'prix' => 5394],
                ['texte' => 'ALU_GR40_ART', 'prix' => 5092],
                ['texte' => 'ALU_GR40_ART1', 'prix' => 5180],
                ['texte' => 'ALU_GR40_ART2', 'prix' => 5240],
                ['texte' => 'ALU_GR40_ART3', 'prix' => 5292],
                ['texte' => 'ALU_GR40_ART4', 'prix' => 5358],
                ['texte' => 'ALU_GR40_AUG', 'prix' => 5070],
                ['texte' => 'ALU_GR40_AUG1', 'prix' => 5204],
                ['texte' => 'ALU_GR40_AUG2', 'prix' => 5252],
                ['texte' => 'ALU_GR40_AUG3', 'prix' => 5312],
                ['texte' => 'ALU_GR40_AUG4', 'prix' => 5372],
                ['texte' => 'ALU_GR40_BOL', 'prix' => 5218],
                ['texte' => 'ALU_GR40_BOL1', 'prix' => 5386],
                ['texte' => 'ALU_GR40_BOL2', 'prix' => 5452],
                ['texte' => 'ALU_GR40_BOL3', 'prix' => 5512],
                ['texte' => 'ALU_GR40_BOL4', 'prix' => 5512],
                ['texte' => 'ALU_GR40_CAS', 'prix' => 5224],
                ['texte' => 'ALU_GR40_CAS1', 'prix' => 5482],
                ['texte' => 'ALU_GR40_CAT', 'prix' => 5210],
                ['texte' => 'ALU_GR40_CAT1', 'prix' => 5328],
                ['texte' => 'ALU_GR40_CAT2', 'prix' => 5400],
                ['texte' => 'ALU_GR40_CAT3', 'prix' => 5496],
                ['texte' => 'ALU_GR40_CAT4', 'prix' => 5554],
                ['texte' => 'ALU_GR40_CHA', 'prix' => 5086],
                ['texte' => 'ALU_GR40_CHA1', 'prix' => 5252],
                ['texte' => 'ALU_GR40_CHA2', 'prix' => 5358],
                ['texte' => 'ALU_GR40_CON', 'prix' => 5092],
                ['texte' => 'ALU_GR40_CON1', 'prix' => 5196],
                ['texte' => 'ALU_GR40_CON2', 'prix' => 5246],
                ['texte' => 'ALU_GR40_CON3', 'prix' => 5304],
                ['texte' => 'ALU_GR40_CON4', 'prix' => 5358],
                ['texte' => 'ALU_GR40_ELI', 'prix' => 5122],
                ['texte' => 'ALU_GR40_ELI1', 'prix' => 5318],
                ['texte' => 'ALU_GR40_ELI2', 'prix' =>5438],
                ['texte' => 'ALU_GR40_ETI', 'prix' => 5116],
                ['texte' => 'ALU_GR40_ETI1', 'prix' =>5358],
                ['texte' => 'ALU_GR40_FLA', 'prix' => 4944],
                ['texte' => 'ALU_GR40_FRE', 'prix' => 5190],
                ['texte' => 'ALU_GR40_FRE1', 'prix' => 5358],
                ['texte' => 'ALU_GR40_FRE2', 'prix' =>5466],
                ['texte' => 'ALU_GR40_FRE3', 'prix' => 5548],
                ['texte' => 'ALU_GR40_HEN', 'prix' => 5594],
                ['texte' => 'ALU_GR40_HEN1', 'prix' => 5846],
                ['texte' => 'ALU_GR40_HEN2', 'prix' => 6032],
                ['texte' => 'ALU_GR40_JEA', 'prix' => 5164],
                ['texte' => 'ALU_GR40_JEA1', 'prix' => 5278],
                ['texte' => 'ALU_GR40_JEA2', 'prix' => 5424],
                ['texte' => 'ALU_GR40_LAD', 'prix' => 5400],
                ['texte' => 'ALU_GR40_LOU', 'prix' => 5642],
                ['texte' => 'ALU_GR40_LOU1', 'prix' => 5164],
                ['texte' => 'ALU_GR40_LOU2', 'prix' => 5246],
                ['texte' => 'ALU_GR40_LOU3', 'prix' => 5364],
                ['texte' => 'ALU_GR40_LOU4', 'prix' => 5438],
                ['texte' => 'ALU_GR40_MIC', 'prix' => 5116],
                ['texte' => 'ALU_GR40_MIC1', 'prix' => 5432],
                ['texte' => 'ALU_GR40_MIC2', 'prix' => 5506],
                ['texte' => 'ALU_GR40_MIC3', 'prix' => 5594],
                ['texte' => 'ALU_GR40_ROB', 'prix' => 5108],
                ['texte' => 'ALU_GR40_ROB1', 'prix' => 5298],
                ['texte' => 'ALU_GR40_ROB2', 'prix' =>5424],
                ['texte' => 'ALU_GR40_SIG', 'prix' => 5014],
                ['texte' => 'ALU_GR40_SIG1', 'prix' => 5136],
                ['texte' => 'ALU_GR40_SIG2', 'prix' => 5218],
                ['texte' => 'ALU_GR40_SIG3', 'prix' => 5292],
                ['texte' => 'ALU_GR40_SOP', 'prix' => 5476],
                ['texte' => 'ALU_GR40_SOP1', 'prix' => 5702],
                ['texte' => 'ALU_GR40_STA', 'prix' => 5394],
                ['texte' => 'ALU_GR40_STA1', 'prix' => 5672],
            ];
            Door::insert($modeles);
        }
    }
}
