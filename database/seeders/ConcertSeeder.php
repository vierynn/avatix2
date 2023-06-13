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
            'name'=>': MUSIC OF THE SPHERES',
            'artist'=>'COLDPLAY',
            'type'=>'International',
            'status'=>'Opened',
            'day'=>'WEDNESDAY',
            'date'=>'15',
            'month'=>'November',
            'start_time'=>'17:00 WIB',
            'duration'=>'4 hours',
            'year'=>'2023',
            'city'=>'Jakarta',
            'place'=>'Gelora Bung Karno Main Stadium',
            'description'=>'Coldplay is an English rock band formed in 1997.
            Currently, the members are Chris Martin as vocalist, Jonny Buckland as guitarist, Guy Berryman as bassist, Will Champion as drummer and percussionist, and Phil
            Harvey as creative director.',
            'image_path'=>'img/coldplay.png',
            'seatplan_path'=>'img/seatplan_coldplay.jpg'
         ]);

        DB::table('concerts')->insert([
            'name'=>': BORN PINK',
            'artist'=>'BLACKPINK',
            'type'=>'K-Pop',
            'status'=>'Opened',
            'day'=>'SATURDAY',
            'date'=>'11',
            'month'=>'March',
            'year'=>'2023',
            'start_time'=>'19:00 WIB',
            'duration'=>'2 hours',
            'city'=>'Jakarta',
            'place'=> 'Gelora Bung Karno Main Stadium',
            'description'=>'Legendary K-Pop Group, BLACKPINK will be back in Jakarta to promote their new album, BORN PINK through a world tour with the name, BLACKPINK WORLD TOUR [BORN PINK].
            This four people group will greet Indonesian BLINK for two days!',
            'image_path'=>'img/blackpink.png',
            'seatplan_path'=>'img/seatplan_blackpink.jpg'
        ]);
        DB::table('concerts')->insert([
            'name'=>': BORN PINK',
            'artist'=>'BLACKPINK',
            'type'=>'K-Pop',
            'status'=>'Opened',
            'day'=>'SUNDAY',
            'date'=>'12',
            'month'=>'March',
            'year'=>'2023',
            'start_time'=>'18:30 WIB',
            'duration'=>'2 hours',
            'city'=>'Jakarta',
            'place'=> 'Gelora Bung Karno Main Stadium',
            'description'=>'Legendary K-Pop Group, BLACKPINK will be back in Jakarta to promote their new album, BORN PINK through a world tour with the name, BLACKPINK WORLD TOUR [BORN PINK].
            This four people group will greet Indonesian BLINK for two days!',
            'image_path'=>'img/blackpink.png',
            'seatplan_path'=>'img/seatplan_blackpink.jpg'
        ]);

        DB::table('concerts')->insert([
            'name'=>': PERTUNJUKAN TUTUR BATIN LIVE CONCERT 2023',
            'artist'=>'YURA YUNITA',
            'type'=>'Indonesian',
            'status'=>'Opened',
            'day'=>'FRIDAY',
            'date'=>'09',
            'month'=>'June',
            'year'=>'2023',
            'start_time'=>'13:00 WIB',
            'duration'=>'3 hours',
            'city'=>'Surabaya',
            'place'=>'Jatim International Expo(JIE) Convention Exhibition',
            'description'=>'Yura Yunita is ready to celebrate magic from her third album, Tutur Batin in a solo concert titled Pertunjukkan Tutur Batin.
            After being introduced to a wide audience in October 2021 and getting a good impression from listeners.',
            'image_path'=>'img/tuturbatin.jpg',
            'seatplan_path'=>'img/seatplan_tuturbatin.jpg'
    ]);

        DB::table('concerts')->insert([
            'name'=>': NICOLE WORLD TOUR 2023',
            'artist'=>'NIKI',
            'type'=>'International',
            'status'=>'Opened',
            'day'=>'TUESDAY',
            'date'=>'26',
            'month'=>'September',
            'year'=>'2023',
            'start_time'=>'18:00 WIB',
            'duration'=>'2 hours',
            'city'=>'Bali',
            'place'=>'Garuda Wisnu Kencana',
            'description'=>'For the first time, the beautiful singer Nicole Zefanya or NIKI will finally return to her hometown in Indonesia by holding a concert in Jakarta.
            It has been confirmed that NIKI will be brought in by Northstar Entertainment and Springboard to hold a concert titled Nicole World Tour 2023.',
            'image_path'=>'img/niki.jpg',
            'seatplan_path'=>'img/seatplan_niki.png'
        ]);

        DB::table('concerts')->insert([
            'name'=>'WE THE FEST 2023',
            'type'=>'International',
            'status'=>'Opened',
            'day'=>'FRIDAY',
            'date'=>'21',
            'month'=>'July',
            'year'=>'2023',
            'start_time'=>'16:00 WIB',
            'duration'=>'5 hours',
            'city'=>'Tangerang',
            'place'=>'Indonesia Convention Exhibition BSD',
            'description'=>'We The Fest is an annual music, art, fashion and food festival held in Jakarta.
            In We The Fest 2023, what is quite attention-grabbing is the presence of The 1975 and The Strokes. The Strokes themselves will be performing in Indonesia for the first time.',
            'image_path'=>'img/wethefest.jpg',
            'seatplan_path'=>'img/ticket_wtf.jpg'
        ]);
        DB::table('concerts')->insert([
            'name'=>'WE THE FEST 2023',
            'type'=>'International',
            'status'=>'Opened',
            'day'=>'SATURDAY',
            'date'=>'22',
            'month'=>'July',
            'year'=>'2023',
            'start_time'=>'16:00 WIB',
            'duration'=>'5 hours',
            'city'=>'Tangerang',
            'place'=>'Indonesia Convention Exhibition BSD',
            'description'=>'We The Fest is an annual music, art, fashion and food festival held in Jakarta.
            In We The Fest 2023, what is quite attention-grabbing is the presence of The 1975 and The Strokes. The Strokes themselves will be performing in Indonesia for the first time.',
            'image_path'=>'img/wethefest.jpg',
            'seatplan_path'=>'img/ticket_wtf.jpg'
        ]);
        DB::table('concerts')->insert([
            'name'=>'WE THE FEST 2023',
            'type'=>'International',
            'status'=>'Opened',
            'day'=>'SUNDAY',
            'date'=>'22',
            'month'=>'July',
            'year'=>'2023',
            'start_time'=>'16:00 WIB',
            'duration'=>'5 hours',
            'city'=>'Tangerang',
            'place'=>'Indonesia Convention Exhibition BSD',
            'description'=>'We The Fest is an annual music, art, fashion and food festival held in Jakarta.
            In We The Fest 2023, what is quite attention-grabbing is the presence of The 1975 and The Strokes. The Strokes themselves will be performing in Indonesia for the first time.',
            'image_path'=>'img/wethefest.jpg',
            'seatplan_path'=>'img/ticket_wtf.jpg'
        ]);

        DB::table('concerts')->insert([
            'name'=>': SLANK 25TH ANNIVERSARY TOUR',
            'artist'=>'SLANK',
            'type'=>'Indonesian',
            'status'=>'Opened',
            'day'=>'SATURDAY',
            'date'=>'13',
            'month'=>'Mei',
            'year'=>'2023',
            'start_time'=>'5:00 WIB',
            'duration'=>'2 hours',
            'city'=>'Bandung',
            'place'=>'Eldorado Dome Bandung',
            'description'=>'Album Tujuh 25th Anniversary Tour continues in the fifth city, namely, Bandung.
            Slank, who appeared in full formation, invited Slankers Bali to reminisce together through songs from their album which was released in 1998 with the addition of 7 hit songs that all the audience already memorized.',
            'image_path'=>'img/slank.jpg',
            'seatplan_path'=>'img/seatplan_slank.jpg'
        ]);

        DB::table('concerts')->insert([
            'name'=>': ASIA TOUR IN JAKARTA',
            'artist'=>'KIM SEON HO',
            'type'=>'Meet&Greet',
            'status'=>'Opened',
            'day'=>'SATURDAY',
            'date'=>'03',
            'month'=>'June',
            'year'=>'2023',
            'start_time'=>'19:00 WIB',
            'duration'=>'2 hours',
            'city'=>'Jakarta',
            'place'=>'Tennis Indoor Senayan',
            'description'=>'Kim Seon Ho is a famous Korean actor who has been acting since 2009. His popularity as an actor skyrocketed recently after showing in the Korean drama Start-Up as Han
            Ji Pyeong and in the Korean drama Hometown Cha Cha Cha as Hong Du Sik.',
            'image_path'=>'img/seonho.jpg',
            'seatplan_path'=>'img/seatplan_seonho.jpeg'
        ]);
    }
}
