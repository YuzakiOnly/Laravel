<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonalInformation>
 */
class PersonalInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastname(),
            'email'=>fake()->email(),
            'country'=>fake()->country(),
            'street_address'=>fake()->streetAddress(),
            'city'=>fake()->city(),
            'state'=>fake()->state(),
            'zip_code'=>fake()->postcode(),
        ];
    }
}
