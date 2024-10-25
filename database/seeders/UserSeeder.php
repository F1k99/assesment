<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     ['name' => 'John Doe', 'age' => '21', 'location' => '21', 'email' => 1, 'password'=> Hash::make('password'), 'created_at' => now()],

        // ]);
        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password'),
                'age'=> '21',
                'location'=> 'New York'
            ]);
        }
    }
}
