<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone' => fake()->randomElement(['03319213344', '03319213366', '03319213355']),
            'address' => fake()->address(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'age' => fake()->randomDigitNotZero(),
            'birthDate' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'occupation' => fake()->randomElement(['Business', 'Freelancer', 'Teacher']),
        ];
    }
}
