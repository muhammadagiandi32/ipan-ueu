<?php

namespace Database\Factories;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Factory as Faker;
// use \Illuminate\Database\Eloquent\Factory $factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            //
            // 'bill_id' => Bill::factory(),
            'user_id' => User::factory(),
            'nis' => $this->faker->unique()->numberBetween(10000, 99999),
            'gender' => $gender,
            'address' => $this->faker->address,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'no_hp_guardian' => $this->faker->tollFreePhoneNumber,
        ];
    }
}
