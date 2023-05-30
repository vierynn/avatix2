<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticketcategory')->insert([
            'price'=>'1500000',
            'category'=>'Cat D',
        ]);
        DB::table('ticketcategory')->insert([
            'price'=>'1850000',
            'category'=>'Cat C',
        ]);
        DB::table('ticketcategory')->insert([
            'price'=>'2000000',
            'category'=>'Cat B',
        ]);
    }
}
