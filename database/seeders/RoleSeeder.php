<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sadece iki rol oluşturuyoruz: admin ve user.
        Role::create([
            'name' => 'admin',
            'description_en' => 'Administrator role with full access',
            'description_tr' => 'Tam erişim sağlayan yönetici rolü'
        ]);

        Role::create([
            'name' => 'user',
            'description_en' => 'Regular user with limited access',
            'description_tr' => 'Sınırlı erişim sağlayan normal kullanıcı rolü'
        ]);
    }
}
