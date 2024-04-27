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

        DB::table('user')->insert([
            [
                'name'=>'delevoper '.rand(1,3),
                'email'=>Str::random(10).'@mail.com',
                'user_type'=>rand(1,3),
                'password'=>'11111111',
            ],
            [
                'name'=>'delevoper '.rand(1,3),
                'email'=>Str::random(10).'@mail.com',
                'user_type'=>rand(1,3),
                'password'=>'11111111',
            ],
            [
                'name'=>'delevoper '.rand(1,3),
                'email'=>Str::random(10).'@mail.com',
                'user_type'=>rand(1,3),
                'password'=>'11111111',
            ],
            [
                'name'=>'delevoper '.rand(1,3),
                'email'=>Str::random(10).'@mail.com',
                'user_type'=>rand(1,3),
                'password'=>'11111111',
            ],

            ]);

    }
}
