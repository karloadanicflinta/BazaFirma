<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SuppliedGoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplied_goods')->insert([
            ['good_id' => '1', 'supplier_id' => '1' ],
            ['good_id' => '2', 'supplier_id' => '2' ],
            ['good_id' => '3', 'supplier_id' => '3' ]
            
            ]);
    
    }
    }
    
