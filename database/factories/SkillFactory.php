<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skill;
use App\Models\User;

class SkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'skill' => $this->faker->word,
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
        ];
    }
}
