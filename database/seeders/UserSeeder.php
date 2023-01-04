<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{

    public function run(){
        User::create([
            'name' =>'adminacc',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin123'),
            'gender'=>'Male',
            'DoB'=>'2002-01-01',
            'country'=>'Indonesia',
            'user_type'=>'admin'
        ]);
        
    }


}