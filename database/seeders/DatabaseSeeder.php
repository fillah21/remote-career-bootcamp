<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $admin = User::create([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        $developer = User::create([
            'name' => "Developer",
            'email' => 'developer@gmail.com',
            'password' => Hash::make('password')
        ]);

        Room::create([
            'name' => 'VIP',
            'available_beds' => 5,
            'created_id' => $admin->id,
        ]);

        Room::create([
            'name' => 'Class 1',
            'available_beds' => 7,
            'created_id' => $admin->id,
            'updated_id' => $developer->id,
        ]);

        Room::create([
            'name' => 'Class 2',
            'available_beds' => 10,
            'created_id' => $developer->id,
        ]);
    }
}
