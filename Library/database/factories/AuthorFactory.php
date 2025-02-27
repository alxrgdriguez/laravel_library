<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nationality' => $this->faker->country(),
            'date_of_birth' => $this->faker->date(),
            'biography' => $this->faker->paragraph(1),
            'dewey_code' => $this->faker->unique()->numerify(str_pad('', 3, '#')),
        ];
    }
}
