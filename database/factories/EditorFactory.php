<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EditorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->date(),
            'email' => $this->faker->email(),
            'password' => $this->faker->md5(),
            'gender' => $this->faker->randomElement($array = array ('masculino', 'feminino', 'não-binário')),
            'level' =>$this->faker->randomDigit(),
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->boolean(),
        ];
    }
}
