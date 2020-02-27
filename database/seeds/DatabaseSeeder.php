<?php

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
        $this->call(
            [
                // ProvinceTableSeeder::class , 
                // CityTableSeeder::class , 
                // AreaTableSeeder::class , 
                // SubareaTableSeeder::class,
                // SchoolTableSeeder::class,
                // StatusTableSeeder::class,
                RolesTableSeeder::class,

            ]
        );
    }
}
