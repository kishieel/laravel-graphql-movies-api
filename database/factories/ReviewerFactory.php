<?php

namespace Database\Factories;

use App\Models\Reviewer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reviewer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'seniority' => $this->faker->numberBetween(0,20),
        ];
    }
}
