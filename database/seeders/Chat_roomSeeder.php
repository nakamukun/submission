<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Chat_roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('chat_rooms')->insert([
            'matching_id' => 1,
            'created_at' => new DateTime(),
            ]);
            
        DB::table('chat_rooms')->insert([
            'matching_id' => 2,
            'created_at' => new DateTime(),
            ]);    
    }
}
