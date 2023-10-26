<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rice>
 */
class RiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merek' => fake()->name(),
            'kilo' => rand(10,25),
            'harga' => rand(100000,300000),
            'harga_grosir' => rand(100000,300000),
            'stok' => rand(10,300000)
        ];
    }
}
