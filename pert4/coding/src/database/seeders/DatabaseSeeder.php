<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan role super_admin sudah ada
        Role::firstOrCreate(['name' => 'super_admin']);

        // Cek apakah user dengan email admin@admin.com sudah ada
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Ganti dengan password sesuai kebutuhan
            ]
        );

        // Berikan role super_admin jika belum punya
        if (!$user->hasRole('super_admin')) {
            $user->assignRole('super_admin');
        }

        $this->call([
            ProductSeeder::class,
        ]);
    }
}