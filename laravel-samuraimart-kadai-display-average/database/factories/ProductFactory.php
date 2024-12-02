<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition()
    {
        return [
                'name' => fake()->name(),
                'description' => fake()->realText(50, 5),
                'price' => fake()->numberBetween(100, 200000),
                'category_id' => 1,
        ];
    }
}
