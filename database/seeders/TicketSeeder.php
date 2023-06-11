<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket')->insert([
            'place'=>'GBK',
            'concert_id'=>'1',
            'ticketcat_id'=>'1',
        ]);
        DB::table('ticket')->insert([
            'place'=>'ICE BSD',
            'concert_id'=>'1',
            'ticketcat_id'=>'2',
        ]);
    }
}
