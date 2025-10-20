<?php

namespace Database\Seeders;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> ee033f33a54df8f7a9e93fd3669f2077f4a96bc3
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    use WithoutModelEvents;

=======
>>>>>>> ee033f33a54df8f7a9e93fd3669f2077f4a96bc3
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
