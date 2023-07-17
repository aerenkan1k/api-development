<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(30),
            'quantity' => rand(1,20),
            'price' => rand(5,100),
            'color' => $this->faker->colorName(),
            'weight' => rand(1,5)
        ];
    }
}
