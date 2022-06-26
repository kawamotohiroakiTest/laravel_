<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'products_name' => $this->faker->unique()->word(),
            'products_code' => $this->faker->unique()->randomNumber(4),
            'products_price' => $this->faker->randomNumber(5),
            'products_stock' => $this->faker->randomNumber(5),
            'products_review' => $this->faker->randomNumber(2),
            'products_tag' => $this->faker->randomNumber(2),
            'products_category' => $this->faker->randomNumber(2),
            'products_image' => $this->faker->randomNumber(4),
            'products_size' => $this->faker->word(),
            'products_description' => $this->faker->realText(100),
            'products_color' => $this->faker->safeColorName(),
            'products_material' => $this->faker->word(),
            'products_deliverymethod' => $this->faker->randomNumber(1),
            'products_return' => $this->faker->randomNumber(1),
            'products_postage' => $this->faker->randomNumber(3),
            'products_deleteflag' => $this->faker->randomNumber(1),
        ];
    }
}
