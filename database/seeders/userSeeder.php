<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            /*[
                'name' => 'maluk',
                'email' => 'maluk@gmail.com',
                'password' => Hash::make('maluk12345'),
                'is_admin' => 1

            ],*/

            [
                'name' => 'tnq',
                'email' => 'tq@outlook.com',
                'password' => Hash::make('tnq12345'),

            ]
        ]);
    }
}
