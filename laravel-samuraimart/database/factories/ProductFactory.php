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
                'name' => $this->fake()->name(),
                'description' => $this->fake()->realText(50, 5),
                'price' => $this->fake()->numberBetween(100, 200000),
                'category_id' => 1,
        ];
    }
}
