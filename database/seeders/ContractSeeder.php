<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contracts')->insert([
           
            ['name' => 'Prvi ugovor', 'date_in' => Carbon::create(2000, 1, 1, 0, 0, 0), 'date_out' => Carbon::create(2015, 2, 3, 0, 0, 0)],
            ['name' => 'Drugi ugovor', 'date_in' => Carbon::create(2004, 12, 8, 0, 0, 0), 'date_out' => Carbon::create(2016, 6, 2, 0, 0, 0)],
            ['name' => 'Treci ugovor', 'date_in' => Carbon::create(2002, 6, 2, 0, 0, 0), 'date_out' => Carbon::create(2019, 7, 6, 0, 0, 0)]
            
            ] 
        );
    }
}
