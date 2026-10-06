<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'role_id' => 1, 
            'username' => fake()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password123'),
            'is_active' => true,
        ];
    }
}
