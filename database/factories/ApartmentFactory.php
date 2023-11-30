<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(3),
            'rooms' => fake()->randomDigitNotNull(),
            'beds' => fake()->numberBetween(1,3),
            'bathrooms' => fake()->numberBetween(1,2),
            'square_meters' => fake()->numberBetween(20, 200),
            'address' => fake()->address(),
            'lat' => fake()->latitude(),
            'lon' => fake()->longitude(),
            'photo' => fake()->file('storage','apartments',true),
            'visible' => 1,
        ];
    }
}
