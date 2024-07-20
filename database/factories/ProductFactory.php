<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = collect(Category::pluck('id'));

        return [
            'category_id' => $categories->random(),
            'name'        => fake()->name(),
            'description' => fake()->text(50),
            'color'       => fake()->randomElement(['red', 'green', 'blue']),
            'in_stock'    => fake()->boolean(),
        ];
    }
}
