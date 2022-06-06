<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            ['customer_name' => '田中'],
            ['customer_name' => '鈴木'],
            ['customer_name' => '田中'],
            ['customer_name' => '田島']
        ]);
    }
}
