<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->randomHtml(),
            'media' => $this->faker->imageUrl(),
            'category_id' => $this->faker->randomDigit(),
            'status' => $this->faker->boolean(),
            'version' => $this->faker->randomDigit(),
        ];
    }
}
