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
            ModelesSeeder::class,
        //    Modeles2Seeder::class,
        //    Modeles3Seeder::class,
        //    Modeles4Seeder::class,
        //    Modeles5Seeder::class,
        //    Modeles6Seeder::class,

        ]);
    }
}
