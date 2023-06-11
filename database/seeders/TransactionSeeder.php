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
        DB::table('transactions')->insert([
            'transMethod'=>'BCA',
            'date'=>'2023-05-18',
            'user_id'=>'1',
            'ticketcat_id'=>'1',
            'quantity'=>'1'
        ]);
        DB::table('transactions')->insert([
            'transMethod'=>'ShopeePay',
            'date'=>'2023-05-18',
            'user_id'=>'2',
            'ticketcat_id'=>'9',
            'quantity'=>'1'
        ]);
        DB::table('transactions')->insert([
            'transMethod'=>'Gopay',
            'date'=>'2023-05-18',
            'user_id'=>'1',
            'ticketcat_id'=>'18',
            'quantity'=>'2'
        ]);
        DB::table('transactions')->insert([
            'transMethod'=>'BCA',
            'date'=>'2023-05-18',
            'user_id'=>'2',
            'ticketcat_id'=>'13',
            'quantity'=>'1'
        ]);
    }
}
