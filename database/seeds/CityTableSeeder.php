<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'city_name'=>'Rawalpindi',
                'fk_province_id'=>'1'
            ],
            [
                'city_name'=>'Hyderabad',
                'fk_province_id'=>'2'
            ]
        ]);
    }
}
