<?php

namespace Database\Factories;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->unique()->text,
            'category_id' => rand(1, 9),
        ];
    }
}
