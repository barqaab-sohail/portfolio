<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sohail Afzal',
            'email' => 'sohail.afzal@barqaab.com',
            'password' => bcrypt('Great786'), // You can set a default password for the seeded user
        ]);
    }
}
