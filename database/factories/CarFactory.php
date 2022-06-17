<?php

namespace Database\Factories;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' =>$this->faker->unique()->company,
            'model' =>$this->faker->unique()->text(7),
            'color' =>$this->faker->unique()->colorName,
            'price' =>rand(10000,500000)
        ];
    }
}
