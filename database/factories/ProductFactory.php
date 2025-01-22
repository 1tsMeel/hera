<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_id' => $this->faker->numberBetween(1,10),
            'type_id' => $this->faker->numberBetween(1,100),
            'name' => $this->faker->name(),
            'unit' => 'par',
            'image_path' => $this->faker->text(10),
            'price' => $this->faker->numberBetween(100,200),
            'sku' => $this->faker->unique()->text(10),
            'description' => $this->faker->text(1000),
            'is_featured' => $this->faker->numberBetween(0,1),
            'is_new_from_stock' => $this->faker->numberBetween(0,1),
            'is_best_seller' => $this->faker->numberBetween(0,1),
        ];
    }
}
