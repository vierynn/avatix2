<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ConcertSeeder::class,
            UserSeeder::class,
            TicketCategorySeeder::class,
            TicketSeeder::class,
            TransactionSeeder::class
        ]);
    }
}
