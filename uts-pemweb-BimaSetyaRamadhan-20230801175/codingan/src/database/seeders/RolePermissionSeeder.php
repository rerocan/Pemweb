<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Dokter (role_id 2)
        $guruPermissions = Permission::whereIn('name', [
            'view_guru', 'view_any_guru',
            'view_jadwal::mengajar', 'view_any_jadwal::mengajar',
        ])->get();

        $dokterRole = Role::find(2);
        if ($dokterRole) {
            $dokterRole->syncPermissions($guruPermissions);
        }

        // Petugas (role_id 3)
        $staffPermissions = Permission::whereIn('name', [
            'view_guru', 'view_any_guru', 'create_guru', 
            'view_jadwal::mengajar', 'view_any_jadwal::mengajar', 'create_jadwal::mengajar',
            'view_riwayat::pendidikan', 'view_any_riwayat::pendidikan', 'create_riwayat::pendidikan',])->get();

        $petugasRole = Role::find(3);
        if ($petugasRole) {
            $petugasRole->syncPermissions($staffPermissions);
        }

    }
}