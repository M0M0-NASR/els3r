<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            //
            "name"=> "منتج 1",
            "description"=>  "الوصف هنا",
            "last_price"=>  fake()->randomFloat(max: 100),
            "current_price"=>  fake()->randomFloat(max:100),
        ];
    }
}
