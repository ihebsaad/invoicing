<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Seeders;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeder = Seeders::where('class_name',__CLASS__)->count();

        //Check if the seeder exist in the DB
        //if ($seeder==0) {
        if (Setting::count()==0) {
            $settings =
            [

                [
				'name' => 'Fenêtre à souflet',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '1',
				],
				[
				'name' => 'Fenêtre 1V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '2',
				],
				[
				'name' => 'Fenêtre 2V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '3',
				],
				[
				'name' => 'Fenêtre 3V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '4',
				],
				[
				'name' => 'Fenêtre 4V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '11',
				],
				[
				'name' => 'Fenêtre fixe',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '5'
				],
				[
				'name' => 'Porte fenêtre 1V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '6'
				],
				[
				'name' => 'Porte fenêtre 2V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '7'
				],
				[
				'name' => 'Coulissant 1',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '8'
				],
				[
				'name' => 'Coulissant 2',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '9'
				],
				[
				'name' => 'Coulissant 3',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '10'
				],
				[
				'name' => 'Coulissant 2V',
                'value' => '3',
                'model' => 'Modele',
                'model_id' => '12'
				],

                //volets
				[
				'name' => 'Multicom',
                'value' => '2.5',
                'model' => 'Shutter',
                'model_id' => '1',

				],
				[
				'name' => 'Futurcom',
                'value' => '2.5',
                'model' => 'Shutter',
                'model_id' => '2',
				],
				[
				'name' => 'Futurcom avec moustiquaire',
                'value' => '2.5',
                'model' => 'Shutter',
                'model_id' => '3',
				]


            ];

			$setting=Setting::insert($settings);
			//Creation of the seeder in the DB;
			//Seeders::create(array('class_name'=>__CLASS__));
        }

    }
}
