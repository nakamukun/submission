<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Chat_messageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_messages')->insert([
            'chat_room_id' => 1,
            'message' => 'おはよう',
            'user_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('chat_messages')->insert([
            'chat_room_id' => 2,
            'message' => 'よろしく',
            'user_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);    
    }
}
