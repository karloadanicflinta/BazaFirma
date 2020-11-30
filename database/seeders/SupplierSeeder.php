<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            
            ['name' => 'Agrokor', 'country_id' => '1' ],
            ['name' => 'Pliva','country_id' => '2'  ],
            ['name' => 'Adriatic Group', 'country_id' => '3' ]
            
    ]);

}
}
