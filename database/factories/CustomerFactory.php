<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_number' => 'CUST-' . fake()->unique()->numberBetween(1000, 9999),
            'company_name' => fake()->company(),
            'rfc' => fake()->regexify('[A-Z]{3}[0-9]{6}[A-Z0-9]{3}'),
            'email' => fake()->unique()->companyEmail(),
            'phone_number' => fake()->phoneNumber(),
            'contact_person' => fake()->name(),
            'default_address' => fake()->address(),
        ];
    }
}