<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([

            ['name' => 'Ured 1', 'company_id'=> '1', 'city_id' => '1'],
            ['name' => 'Ured 2', 'company_id'=> '2', 'city_id' => '2'],
            ['name' => 'Ured 3', 'company_id'=> '3', 'city_id' => '3']
            
            ]
        );
    }
}

