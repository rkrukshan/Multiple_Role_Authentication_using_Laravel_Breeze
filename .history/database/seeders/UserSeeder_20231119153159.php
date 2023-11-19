<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name'=>'Rukshan',
            'email'=>'rukshan@gmail.com',
            'role'=>'admin',
            'status'=>'active',
            'password'=>bcrypt('password')],


            ['name'=>'RK',
            'email'=>'rk@gmail.com',
            'role'=>'customer',
            'status'=>'active',
            'password'=>bcrypt('password')],


            ['name'=>'Ruk',
            'email'=>'rukshan@gmail.com',
            'role'=>'admin',
            'status'=>'active',
            'password'=>bcrypt('password')],
        ]);
    }
}
