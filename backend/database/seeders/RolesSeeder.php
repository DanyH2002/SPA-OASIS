<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Admin',     'discount_percent' => 0,    'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cliente',   'discount_percent' => 0,    'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Miembro',   'discount_percent' => 10,   'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Terapeuta', 'discount_percent' => 0,    'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Barra',     'discount_percent' => 0,    'created_at' => now(), 'updated_at' => now()],
        ];
        foreach ($roles as $rol) {
            Roles::Create($rol);
        };
    }
}
