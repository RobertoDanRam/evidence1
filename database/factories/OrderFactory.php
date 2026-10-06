<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\User;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        // Simulamos cálculos financieros reales
        $subtotal = fake()->randomFloat(2, 1000, 50000);
        $tax = $subtotal * 0.16;

        return [
            'invoice_number' => 'INV-' . fake()->unique()->numberBetween(10000, 99999),
            'customer_number' => Customer::inRandomOrder()->first()->customer_number,
            'created_by_user_id' => User::inRandomOrder()->first()->id,
            'order_date' => fake()->dateTimeBetween('-1 month', 'now'),
            'estimated_delivery_date' => fake()->dateTimeBetween('now', '+2 weeks'),
            'shipping_address' => fake()->address(),
            'notes' => fake()->sentence(),
            'subtotal' => $subtotal,
            'tax_amount' => $tax,
            'total_amount' => $subtotal + $tax,
            'current_status' => fake()->randomElement(['Ordered', 'In process', 'In route', 'Delivered']),
        ];
    }
}