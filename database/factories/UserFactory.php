<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->username(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2a$12$QseBoMTvQk8XSf4Pv53qTOsdo5UsnPQIM8Dv7pobAJ5j4.66pvMwO',
        ];
    }
}
