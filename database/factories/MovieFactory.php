<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MovieFactory extends Factory
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
            'description' => Str::random(12),
            'genre' => Str::random(10),
            'release_year' => $this->faker->numberBetween(1960, 2022),
            'duration' => Str::random(9)

        ];

    }
}
