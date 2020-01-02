<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'area_name'=>'Morgah',
                'fk_city_id'=>'1'
            ],
            [
                'area_name'=>'Lalazar',
                'fk_city_id'=>'1'
            ],
            [
                'area_name'=>'Pakka Qilla',
                'fk_city_id'=>'2'
            ],
            [
                'area_name'=>'Qasimabad',
                'fk_city_id'=>'2'
            ]
        ]);
    }
}
