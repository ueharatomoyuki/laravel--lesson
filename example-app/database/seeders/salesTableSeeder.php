<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class salesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            ['order_date'=>'2018/11/01','customer_id'=>1,'amount'=>3000],
            ['order_date'=>'2018/10/01','customer_id'=>3,'amount'=>5000],
            ['order_date'=>'2018/10/01','customer_id'=>4,'amount'=>6000],
            ['order_date'=>'2018/11/02','customer_id'=>2,'amount'=>2000],
            ['order_date'=>'2018/11/15','customer_id'=>2,'amount'=>null]
        ]);
    }
}
