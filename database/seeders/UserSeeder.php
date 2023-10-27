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
                'name' => '1',
                'email' => 'a@ccc',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697613403/p2otaxqmeuw16eyoiyus.png',
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
                'name' => '2',
                'email' => 'a@aaa',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697970832/x3aq2sh2ontwmkobpb3m.png',
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
                'name' => '3',
                'email' => 'a@aaa.com',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697970911/vm45neiywnaefjajg32i.jpg',
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
                'name' => '4',
                'email' => 'a@a.com',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697970937/upbjxvyqko8buhbolmvj.jpg',
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
        DB::table('users')->insert([
                'name' => '5',
                'email' => 'a@aa.com',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697970964/nlbetyl7ihrlihz5dplm.jpg',
                'age' => '20歳',
                'sex' =>'女',
                'bio' => 'お願いします！',
                'hobby' =>'ドライブ',
                'height' => '160センチ',
                'location' => '東京都',
                'college' => '専修大学',
                'factory' => '経営学部',
                'department' =>'経営学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
                'name' => '6',
                'email' => 'a@aaaaaa',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697970989/vyaowkjpwto0vvll69se.jpg',
                'age' => '18歳',
                'sex' =>'女',
                'bio' => 'よろしく！',
                'hobby' =>'バドミントン',
                'height' => '153センチ',
                'location' => '神奈川県',
                'college' => '明治大学',
                'factory' => '経済学部',
                'department' =>'経済学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
                'name' => '7',
                'email' => 'a@bb',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697971043/eitsuyu3d4vztgwvxzfe.png',
                'age' => '18歳',
                'sex' =>'男',
                'bio' => 'よろしく！',
                'hobby' =>'野球',
                'height' => '183センチ',
                'location' => '東京都',
                'college' => '大正大学',
                'factory' => '文学部',
                'department' =>'文学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
           
        DB::table('users')->insert([
                'name' => '8',
                'email' => 'a@cccc.com',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697971096/epsgksirhxcdhawiwliz.jpg',
                'age' => '18歳',
                'sex' =>'女',
                'bio' => 'よろしく！',
                'hobby' =>'バレー',
                'height' => '155センチ',
                'location' => '神奈川県',
                'college' => '専修大学',
                'factory' => '経済学部',
                'department' =>'経済学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
                'name' => '9',
                'email' => 'a@aaaaaa.com',
                'image_url' =>'https://res.cloudinary.com/dkqyurf1r/image/upload/v1697971154/zktss32ionrlaxc9maeq.webp',
                'age' => '18歳',
                'sex' =>'男',
                'bio' => 'よろしくお願いします！',
                'hobby' =>'手芸部',
                'height' => '170センチ',
                'location' => '神奈川県',
                'college' => '専修大学',
                'factory' => '経済学部',
                'department' =>'経済学科',
                'password' => Hash::make('password'),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
    
    }
}
