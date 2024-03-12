<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            "name" => $this->faker->name,
            "slug" => $this->faker->slug,
            "img_cover" => fake()->imageUrl()
        ];
    }
    public function categroyData1():Factory
    {

        return $this->state(function (array $attributes) {
            return [
                'name' => 'بقوليات',
            "img_cover" => fake()->imageUrl()


                // Add other custom attributes for the first category
            ];

        });

    }

    public function categroyData2()
    {

        return $this->state(function (array $attributes) {
            return [
                'name' => 'علافة',
                "img_cover" => fake()->imageUrl()

                // Add other custom attributes for the second category
            ];
        });


    }

    public function categroyData3()
    {
        return $this->state(function (array $attributes) {
            return [

                "img_cover" => fake()->imageUrl(),
                'name' => 'عطارة',
            ];
        });

    }

}
