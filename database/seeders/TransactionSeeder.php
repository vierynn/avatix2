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
            'ticket_id'=>'1'
        ]);
        DB::table('transactions')->insert([
            'transMethod'=>'ShopeePay',
            'date'=>'2023-05-18',
            'user_id'=>'2',
            'ticket_id'=>'2'
        ]);
    }
}
