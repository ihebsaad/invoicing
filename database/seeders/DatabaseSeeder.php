<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
         //   UserSeeder::class,
            Modeles2F1V_ALU::class,
            ModelesSeeder::class,
            Modeles2Seeder::class,
            Modeles3F2V_ALU::class,
            Modeles3Seeder::class,
            Modeles4Seeder::class,
            Modeles11_4VSeeder::class,
            Modeles5Fix_Alu::class,
            Modeles5Seeder::class,
            Modeles6PF1V_ALU::class,
            Modeles6Seeder::class,
            Modeles7PF2V_ALU::class,
            Modeles7Seeder::class,
            Modeles8PVCSeeder::class,
            Modeles8Seeder::class,
            Modeles9Couliss2_ALU::class,
            Modeles9Couliss2_PVC::class,
            Modeles10Couliss3_Alu::class,
            Modeles10PVCSeeder::class,
            //Modeles12PVCSeeder::class,
            Modeles12Serrure_Alu::class,
            ModelesDoorsSeeder::class,
            ModelesShutterSeeder::class,
            ModelesShutter2Seeder::class,
            ModelesShutter3Seeder::class,
            ModelesSouff_ALU::class,
            SettingsSeeder::class,
        ]);
    }
}
//php artisan db:seed
//php artisan db:seed --force
