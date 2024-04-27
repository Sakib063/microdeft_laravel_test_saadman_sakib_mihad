<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            [
                'name'=>'delevoper 1',
                'email'=>'example1@mail.com',
                'user_type'=>'1',
                'password'=>'11111111',
            ],
            [
                'name'=>'delevoper 2',
                'email'=>'example2@mail.com',
                'user_type'=>'1',
                'password'=>'11111111',
            ],
            [
                'name'=>'delevoper 3',
                'email'=>'example3@mail.com',
                'user_type'=>'2',
                'password'=>'11111111',
            ],
            [
                'name'=>'delevoper 4',
                'email'=>'example4@mail.com',
                'user_type'=>'3s',
                'password'=>'11111111',
            ],

            ]);

    }
}
