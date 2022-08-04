<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $address = Address::factory()->create();

        return [
            'profil_id' => $this->faker->numberBetween(1, 3),
            'name' => fake()->name(),
            'last_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'gender_id' => fake()->numberBetween(1, 2),
            'description' => fake()->sentence(),
            'contact_phone' => fake()->boolean(),
            'contact_email' => fake()->boolean(),
            'hourly_cost' => fake()->numberBetween(1, 99),
            'travel_mode_id' => fake()->numberBetween(1, 3),
            'driver_license' => fake()->boolean(),
            'birth_date' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'nationality' => fake()->country(),
            'native_language_id' => 1,
            'address_id' => $address->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
