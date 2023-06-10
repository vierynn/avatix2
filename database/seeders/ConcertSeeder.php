<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concerts')->insert([
            'name'=>'coldplay',
            'type'=>'International',
            'status'=>'Opened',
            'location'=>'Jakarta',
            'description'=>'Coldplay adalah grup musik rock Inggris yang dibentuk tahun 1997.
                            Saat ini beranggotakan Chris Martin sebagai vokalis, Jonny Buckland sebagai gitaris,
                            Guy Berryman sebagai bassis, Will Champion sebagai drumer dan perkusionis, dan Phil
                            Harvey sebagai pengarah kreatif.'
        ]);
    }
}
