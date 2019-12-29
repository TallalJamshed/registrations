<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [
                'province_name'=>'Punjab',
            ],
            [
                'province_name'=>'Sindh',
            ],
            [
                'province_name'=>'KPK',
            ],
            [
                'province_name'=>'Balochistan',
            ]
        ]);
    }
}
