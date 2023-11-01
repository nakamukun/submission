<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class MatchingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matchings')->insert([
            'match1_id' => 1,
            'match2_id' => 2,
            'created_at' => new DateTime(),
            ]);
            
        DB::table('matchings')->insert([
            'match1_id' => 1,
            'match2_id' => 3,
            'created_at' => new DateTime(),
            ]);    
    }
}
