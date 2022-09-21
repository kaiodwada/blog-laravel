<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title, '-');

        return [
            'author' => $this->faker->name(),
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->randomHtml(),
            'media' => $this->faker->imageUrl(),
            'category_id' => $this->faker->randomDigit(),
            'status' => $this->faker->boolean(),
            'disapproved' => $this->faker->randomElement(array(true, false, null)),
            'why-failed' => $this->faker->sentence(),
            'version' => $this->faker->randomDigit(),
            'excerpt' => $this->faker->sentence(),
        ];
    }
}
