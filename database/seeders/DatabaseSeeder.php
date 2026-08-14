<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Bagas WIbisono',
        //     'email' => 'bbison2002@gmail.com',
        //     'password'=>bcrypt("Fuka_Wata123")
        // ]);

         User::factory()->create([
            'name' => 'User 2',
            'email' => 'bison2002@gmail.com',
            'password'=>bcrypt("Fuka_Wata123")
        ]);
    }
}
