<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(),
            "early_bird_price"=>fake()->numberBetween(1000, 10000),
            "early_bird_until"=>fake()->datetime(),
            "price_multiplier"=>fake()->randomFloat(1,0.5,2.0),
        ];
    }
}
