<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SiteContact;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContact>
 */
class SiteContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define the model's default state and return it as an array.
        // The Faker PHP library is used to generate the data.
        // The Faker library is included by default in Laravel.
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_reason' => $this->faker->numberBetween(1, 3),
            'message' => $this->faker->sentence(),
        ];
    }
}
