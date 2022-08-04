<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dentist>
 */
class DentistFactory extends Factory
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
            'specialization' => 'Dentist',
        ];
    }
}
