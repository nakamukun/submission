<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserSeeder::class);
        $this->call(ReactionSeeder::class);
        $this->call(MatchingSeeder::class);
        $this->call(Chat_roomSeeder::class);
        $this->call(Chat_messageSeeder::class);
    }
}
