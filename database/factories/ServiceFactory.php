<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'pricing_method' => $this->faker->randomElement(['fixed', 'hourly', 'subscription']),
            'price' => $this->faker->randomFloat(2, 50, 500),
            'description' => $this->faker->paragraph,
            'details' => $this->faker->paragraphs(3, true),
        ];
    }
}
