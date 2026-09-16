<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'VIP',
                'Class 1',
                'Class 2',
                'Class 3',
            ]),
            'available_beds' => fake()->numberBetween(1, 20),
            'created_id' => User::factory(),
        ];
    }
}
