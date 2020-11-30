<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
        ['name' => 'Firma Hrvatska', 'IBAN' => 'HR11111111', 'SWIFT' => 'SW111'],
        ['name' => 'Firma Italija', 'IBAN' => 'HR22222222', 'SWIFT' => 'SW222'],
        ['name' => 'Firma Njemacka', 'IBAN' => 'HR33333333', 'SWIFT' => 'SW333']
        ]
    );
}
}
