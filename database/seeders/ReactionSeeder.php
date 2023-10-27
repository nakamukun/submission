<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reactions')->insert([
            'liked_id' => 1,
            'like_id' =>2,
            'status' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
        DB::table('reactions')->insert([
            'liked_id' => 2,
            'like_id' => 1,
            'status' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);   
          
        DB::table('reactions')->insert([
            'liked_id' => 1,
            'like_id' => 3,
            'status' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        
        DB::table('reactions')->insert([
            'liked_id' => 3,
            'like_id' => 1,
            'status' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);      
        
    }
}
