<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutestatus')->insert([
            [
                'status_name'=>'Un-Registered'
            ],
            [
                'status_name'=>'UnderProcess'
            ],
            [
                'status_name'=>'Registered'
            ],
        ]);
    }
}
