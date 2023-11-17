<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id',
            'title' => fake()->text(),
            'image' => fake()->imageUrl,
            'describe' => fake()->describe,
            'status' => collect([Product::STATUS_PUBLIC, Product::STATUS_DRAFT])->random(0)[1],
        ];
    }
}
