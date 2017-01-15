<?php

use Illuminate\Database\Seeder;
use Basico\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        factory(Customer::class, 30)->create(); 
    }
}
