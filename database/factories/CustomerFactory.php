<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Queue;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'queue_id' => Queue::all()->random()->id,
            'identify' => Str::random(6),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone' => strval(fake()->randomNumber(9, true)),
        ];
    }
}
