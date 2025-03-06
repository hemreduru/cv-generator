<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ExperienceResponsible;
use App\Models\Experience;

class ExperienceResponsibleFactory extends Factory
{
    protected $model = ExperienceResponsible::class;

    public function definition(): array
    {
        return [
            'comment_en' => $this->faker->paragraph,
            'comment_tr' => $this->faker->paragraph,
            'order'      => $this->faker->numberBetween(1, 10),
        ];
    }
}
