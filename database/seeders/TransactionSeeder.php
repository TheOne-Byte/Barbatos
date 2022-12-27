<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('transactions')->insert([
        'product_id' => '1',
        'quantity'=>'2',
        'sub_price'=>'Rp. 60.000'
    ]);
        //
    }
}
