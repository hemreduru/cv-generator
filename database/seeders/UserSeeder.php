<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\ExperienceResponsible;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->admin()->create();

        User::factory(150)->create()->each(function ($user) {
            Contact::factory()->create(['user_id' => $user->id]);

            $educationCount = rand(1, 3);
            for ($i = 0; $i < $educationCount; $i++) {
                Education::factory()->create(['user_id' => $user->id]);
            }

            $experienceCount = rand(1, 5);
            for ($i = 0; $i < $experienceCount; $i++) {
                $experience = Experience::factory()->create(['user_id' => $user->id]);

                $responsibleCount = rand(1, 3);
                for ($j = 0; $j < $responsibleCount; $j++) {
                    ExperienceResponsible::factory()->create(['experience_id' => $experience->id]);
                }
            }

            $skillCount = rand(1, 12);
            for ($i = 0; $i < $skillCount; $i++) {
                Skill::factory()->create(['user_id' => $user->id]);
            }
        });
    }
}
