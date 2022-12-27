<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Category')->insert([
            'name' => 'Rumah tangga'
        ]
        );

        DB::table('Category')->insert([
            'name' => 'Elektronik'
        ]
        );

        DB::table('Category')->insert([
            'name' => 'Buku'
        ]
        );
    }
}
