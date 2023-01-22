<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RequestModellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //generate random values for database
        return [
            'firstname' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'brand' => $this->faker->company(), //company serves as car brand
            'model' => $this->faker->word(),
            'hstn' => $this->faker->numberBetween(0, 99999), //random number of max 5 digits
            'type' => $this->faker->word(),
            'cnstrYear' => $this->faker->numberBetween(1900, 2023), //possible construction years
            'color' => $this->faker->hexColor()
        ];
    }
}
