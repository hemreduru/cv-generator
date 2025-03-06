<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExperienceResponsible;

class ExperienceResponsibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExperienceResponsible::factory(150)->create();
    }
}
