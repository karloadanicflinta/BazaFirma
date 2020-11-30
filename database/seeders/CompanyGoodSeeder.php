<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyGoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_goods')->insert([
            ['good_id' => '1', 'company_id' => '1' ],
            ['good_id' => '2', 'company_id' => '2' ],
            ['good_id' => '3', 'company_id' => '3' ]
            
            ]);
    
    }
    }
    
