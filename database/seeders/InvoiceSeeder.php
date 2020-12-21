<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {[
        ['number' => '1111', 'fiscal_number'=> '20201111', 'invoice_date' => carbon::today(),'due_date' => carbon::tomorrow(), 'company_id' => '1', 'supplier_id' => '1', 'good_id' => '1'],
        ['number' => '2222', 'fiscal_number'=> '20202222', 'invoice_date' => carbon::today(),'due_date' => carbon::tomorrow(), 'company_id' => '2', 'supplier_id' => '2', 'good_id' => '2'],
        ['number' => '3333', 'fiscal_number'=> '20203333', 'invoice_date' => carbon::today(),'due_date' => carbon::tomorrow(), 'company_id' => '3', 'supplier_id' => '3', 'good_id' => '3']
        ]
    ;
}
}