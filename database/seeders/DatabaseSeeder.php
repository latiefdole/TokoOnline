<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
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
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'password' => bcrypt('password'),
            'hp' => '082292219191',
        ]);
        User::create([
            'nama' => 'Sopian Aji',
            'email' => 'sopian@gmail.com',
            'role' => '0',
            'status' => 0,
            'password' => bcrypt('password'),
            'hp' => '082292219191',
        ]);User::create([
            'nama' => 'Riska',
            'email' => 'riska@gmail.com',
            'role' => '0',
            'status' => 1,
            'password' => bcrypt('password'),
            'hp' => '082292219191',
        ]);
    }
}
