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
            'password'=>bcrypt('11111111')],


            ['name'=>'RK',
            'email'=>'rk@gmail.com',
            'role'=>'customer',
            'status'=>'active',
            'password'=>bcrypt('11111111')],


            ['name'=>'Ruk',
            'email'=>'ruk@gmail.com',
            'role'=>'vendor',
            'status'=>'active',
            'password'=>bcrypt('11111111')]
        ]);
    }
}
