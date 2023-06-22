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
            'ticketcat_id'=>'1',
        ]);
        DB::table('ticket')->insert([
            'ticketcat_id'=>'2',
        ]);
    }
}
