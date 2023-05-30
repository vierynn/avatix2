<?php

namespace Database\Seeders;

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
        DB::table('transaction')->insert([
            'transMethod'=>'BCA',
            'promo'=>'None',
            'date'=>'2023-05-18',
            'user_id'=>'1',
            'ticket_id'=>'1'
        ]);
        DB::table('transaction')->insert([
            'transMethod'=>'ShopeePay',
            'promo'=>'None',
            'date'=>'2023-05-18',
            'user_id'=>'2',
            'ticket_id'=>'2'
        ]);
    }
}
