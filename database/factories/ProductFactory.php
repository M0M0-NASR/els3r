<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
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
            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
