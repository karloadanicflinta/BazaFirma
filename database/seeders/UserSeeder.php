<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            ['first_name' => 'Marko', 'last_name' => 'Markovic', 'initials' => 'MM', 'country_id' => 1, 'city_id' => 1, 'contract_id' => 1, 'company_id' => 1 ],
            ['first_name' => 'Antonio', 'last_name' => 'Guiseppo', 'initials' => 'AG','country_id' => 1, 'city_id' => 1, 'contract_id' => 1, 'company_id' => 1 ],
            ['first_name' => 'Markus', 'last_name' => 'Reiner', 'initials' => 'MR','country_id' => 1,  'city_id' => 1, 'contract_id' => 1, 'company_id' => 1  ]            
            ]
        );
    }
}
