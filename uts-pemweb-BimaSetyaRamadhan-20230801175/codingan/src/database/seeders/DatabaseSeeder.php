<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat role jika belum ada
        $superAdminRole = Role::firstOrCreate(['name' => 'super_admin']);
        $guruRole = Role::firstOrCreate(['name' => 'guru']);
        $staffRole = Role::firstOrCreate(['name' => 'staff']);

        // Buat user admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // Ganti dengan password aman
            ]
        );
        if (!$admin->hasRole('super_admin')) {
            $admin->assignRole($superAdminRole);
        }

        // Buat user guru
        $guru = User::firstOrCreate(
            ['email' => 'guru@guru.com'],
            [
                'name' => 'Guru',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
            ]
        );
        if (!$guru->hasRole('guru')) {
            $guru->assignRole($guruRole);
        }

        // Buat user staff
        $staff = User::firstOrCreate(
            ['email' => 'staff@staff.com'],
            [
                'name' => 'Staff',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
            ]
        );
        if (!$staff->hasRole('staff')) {
            $staff->assignRole($staffRole);
        }

        // Jalankan seeder lainnya
        $this->call([
            GuruSeeder::class,
            JadwalMengajarSeeder::class,
            RiwayatPendidikanSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}
