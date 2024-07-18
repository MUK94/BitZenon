<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'title' => $this->faker->sentence,
					'description' => $this->faker->paragraph,
					'author_bio' => $this->faker->paragraph,
					'price' => $this->faker->randomFloat(2, 10, 1000000),
					'address' => $this->faker->address,
					'phone_number' => $this->faker->phoneNumber,
					'cover_image' => $this->faker->image,
        ];
    }
}
