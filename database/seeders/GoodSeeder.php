<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
        ['name' => 'Jabuke', 'date_in' => carbon::yesterday()],
        ['name' => 'Kruske','date_in' => carbon::today()],
        ['name' => 'Lubenice', 'date_in' => carbon::tomorrow()]
        
]);

}
}
