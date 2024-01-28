<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => '123',
            'is_admin' => true
        ]);


        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => '123',
            'is_admin' => false
        ]);

        $this->call(TaskSeeder::class);
    }
}
