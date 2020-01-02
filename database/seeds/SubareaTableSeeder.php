<?php

use Illuminate\Database\Seeder;

class SubareaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subareas')->insert([
            [
                'subarea_name'=>'NA',
                'fk_area_id'=>'0'
            ]
        ]);
    }
}
