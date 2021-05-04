<?php

namespace Database\Factories;

use App\Models\Goal;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Goal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($this->faker->numberBetween(10,20)),
            'description' => $this->faker->text,
            'progress' => $this->faker->numberBetween(2, 50),
            'total' => $this->faker->numberBetween(50, 100),
            'community_vis' => $this->faker->boolean

        ];
    }
}
