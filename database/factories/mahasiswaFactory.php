<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa>
 */
class mahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NIM' => rand(1,9999999),
            'fullname' => fake()->name(),
            'emailaddress' => fake() ->unique()->safeEmail(),
            'addres'=>'',
            'phone'=>rand(1,999999999999),
            'gender' => 'M'
        ];
    }
}
