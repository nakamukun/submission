<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'かか',
                'email' => 'a@ccc',
                'image_url' =>'ダウンロード.jpg',
                'age' => '21歳',
                'sex' =>'女',
                'bio' => '初めまして！!',
                'hobby' =>'空手',
                'height' => '154センチ',
                'location' => '埼玉県',
                'college' => '国士館大学',
                'factory' => '経営学部',
                'department' =>'経営学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        
        ]);    
        DB::table('users')->insert([
                'name' => 'そそ',
                'email' => 'a@aaa',
                'image_url' =>'ダウンロード.jpg',
                'age' => '18歳',
                'sex' =>'男',
                'bio' => 'よろしく！',
                'hobby' =>'ドライブ',
                'height' => '170センチ',
                'location' => '東京都',
                'college' => '専修大学',
                'factory' => '経済学部',
                'department' =>'生活環境経済学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        
        ]);    
        DB::table('users')->insert([
                'name' => 'ピピ',
                'email' => 'a@aaa.com',
                'image_url' =>'ダウンロード.jpg',
                'age' => '18歳',
                'sex' =>'女',
                'bio' => 'よろしく！',
                'hobby' =>'ショッピング',
                'height' => '156センチ',
                'location' => '東京都',
                'college' => '専修大学',
                'factory' => '経済学部',
                'department' =>'現代経済学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        
        ]);   
        DB::table('users')->insert([
                'name' => 'ちち',
                'email' => 'a@a.com',
                'image_url' =>'ダウンロード.jpg',
                'age' => '18歳',
                'sex' =>'男',
                'bio' => 'よろしく！',
                'hobby' =>'サッカー',
                'height' => '173センチ',
                'location' => '千葉県',
                'college' => '専修大学',
                'factory' => '経済学部',
                'department' =>'生活環境経済学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        
        ]);    
        
        
            
        
    
    }
}
