<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\PersonalInformation::factory()->count(10)->create();

        \App\Models\PersonalInformation::create([
            'first_name' => 'Test User',
            'last_name' => 'Test User',
            'email' => 'test@test.com',
            'country' => 'Test Country',
            'street_address' => 'Test Street Address',
            'city' => 'Test City',
            'state' => 'Test State',
            'zip_code' => 'Test Zip Code',
        ]);
    }
}
