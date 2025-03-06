<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // İlk olarak sabit rolleri oluşturuyoruz: admin ve user.
        $this->call(\Database\Seeders\RoleSeeder::class);

        // Kullanıcılar ve ilişkili veriler.
        $this->call(\Database\Seeders\UserSeeder::class);
    }
}
