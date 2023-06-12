<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName'=>'Vico',
            'lastName'=>'Lomar',
            'email'=>'vicolomar@gmail.com',
            'username'=>'vicolomar',
            'password'=>'vicolomar123',
            'profile_pic'=> 'img/vico.jpg'
        ]);
        DB::table('users')->insert([
            'firstName'=>'Fei Fei',
            'lastName'=>'Li',
            'email'=>'fefefefeilili@gmail.com',
            'username'=>'feifeili',
            'password'=>'mwahhh112',
            'profile_pic'=> 'img/fei.jpg'
        ]);
    }
}
