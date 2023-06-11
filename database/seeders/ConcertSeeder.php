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
            'name'=>':MUSIC OF THE SPHERES',
            'artist'=>'COLDPLAY',
            'type'=>'International',
            'status'=>'Opened',
            'location'=>'Jakarta',
            'description'=>'Coldplay adalah grup musik rock Inggris yang dibentuk tahun 1997.
                            Saat ini beranggotakan Chris Martin sebagai vokalis, Jonny Buckland sebagai gitaris,
                            Guy Berryman sebagai bassis, Will Champion sebagai drumer dan perkusionis, dan Phil
                            Harvey sebagai pengarah kreatif.',
            'image_path'=>'img/coldplay.png'
         ]);

        DB::table('concerts')->insert([
            'name'=>':BORN PINK',
            'artist'=>'BLACKPINK',
            'type'=>'K-Pop',
            'status'=>'Opened',
            'location'=>'Jakarta',
            'description'=>'Grup K-pop legendaris, BLACKPINK akan datang kembali ke Jakarta untuk mempromosikan album terbaru mereka, BORN PINK melalui tur dunia mereka yang bertajuk, BLACKPINK WORLD TOUR [BORN PINK]. Grup beranggotakan empat orang ini akan menyapa BLINK Indonesia selama dua hari!',
            'image_path'=>'img/blackpink.png'
        ]);

        DB::table('concerts')->insert([
            'name'=>':PERTUNJUKAN TUTUR BATIN LIVE CONCERT 2023',
            'artist'=>'YURA YUNITA',
            'type'=>'Indonesian',
            'status'=>'Opened',
            'location'=>'Surabaya',
            'description'=>'Yura Yunita siap untuk merayakan tangis dan melempar magis dari album ketiganya, Tutur Batin dalam sebuah konser tunggal bertajuk Pertunjukan Tutur Batin.
            Setelah diperkenalkan ke khalayak luas pada Oktober 2021 dan mendapatkan kesan yang baik dari para pendengar,
            kini saatnya album tersebut dihadirkan dalam format konser tunggal.',
            'image_path'=>'img/tuturbatin.jpg'
    ]);

        DB::table('concerts')->insert([
            'name'=>':NICOLE WORLD TOUR 2023',
            'artist'=>'NIKI',
            'type'=>'International',
            'status'=>'Opened',
            'location'=>'Bali',
            'description'=>'Untuk pertama kalinya, penyanyi cantik Nicole Zefanya atau NIKI akhirnya akan pulang kampung ke Indonesia dengan menggelar konser di Jakarta.
            Telah dikonfirmasi bahwa NIKI akan diboyong oleh Northstar Entertainment dan Springboard untuk menggelar konser bertajuk Nicole World Tour 2023.',
            'image_path'=>'img/niki.jpg'
        ]);

        DB::table('concerts')->insert([
            'name'=>'WE THE FEST 2023',
            'type'=>'International',
            'status'=>'Opened',
            'location'=>'Tangerang',
            'description'=>'We The Fest adalah sebuah festival musik, seni, mode, dan makanan tahunan yang diselenggarakan di Jakarta.
            Dalam We The Fest 2023 yang cukup menyita perhatian ialah hadirnya The 1975 dan The Strokes. The Strokes sendiri ini adalah untuk pertama kalinya akan tampil di Indonesia.',
            'image_path'=>'img/wethefest.jpg'
        ]);

        DB::table('concerts')->insert([
            'name'=>':SLANK 25TH ANNIVERSARY TOUR',
            'artist'=>'SLANK',
            'type'=>'Indonesian',
            'status'=>'Opened',
            'location'=>'Bandung',
            'description'=>'Album Tujuh 25th Anniversary Tour berlanjut di kota kelima yaitu, Bandung.
            Slank yang tampil dengan formasi lengkap mengajak Slankers Bali untuk bernostalgia bersama lewat lagu-lagu dari album ketujuh Slank yang dirilis di tahun 1998 silam dengan tambahan 7 lagu hits yang udah dihafal semua penonton.',
            'image_path'=>'img/slank.jpg'
        ]);
    }
}
