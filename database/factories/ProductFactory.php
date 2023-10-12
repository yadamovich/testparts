<?php

namespace Database\Factories;

use App\Models\PartType;
use App\Models\Brand;
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
            'name' => $this->faker->name(),
            'price' => rand(12, 569) / 10,
            'image' => $this->faker->image('public/storage/products', 600, 520, null, false),
            'part_type_id' => $this->faker->randomElement(PartType::all())['id'],
            'brand_id' => $this->faker->randomElement(Brand::all())['id'],
        ];
    }
}
