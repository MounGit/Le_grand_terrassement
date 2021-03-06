<?php

namespace Database\Factories;

use App\Models\Welcome;
use Illuminate\Database\Eloquent\Factories\Factory;

class WelcomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Welcome::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "about_part1" => $this->faker->text(),
            "about_part2" => $this->faker->text(),
            "award_part1" => $this->faker->text(),
            "award_part2" => $this->faker->text(),
        ];
    }
}
