<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            ContractSeeder::class,
            CompanySeeder::class,
            OfficeSeeder::class,
            SupplierSeeder::class,
            InvoiceSeeder::class,
            GoodSeeder::class,
            SuppliedGoodSeeder::class,
            CompanyGoodSeeder::class,
            UserSeeder::class
          
            
        ]);
    }
}
