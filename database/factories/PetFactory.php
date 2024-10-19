<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'species' => $this->faker->word,
            'dateOfBirth' => $this->faker->date(),
            'dateOfDeath' => $this->faker->optional()->date(),
            'note' => $this->faker->sentence,
        ];
    }
}
