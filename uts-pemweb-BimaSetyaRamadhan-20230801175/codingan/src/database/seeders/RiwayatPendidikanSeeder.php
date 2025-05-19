<?php

namespace Database\Seeders;

use App\Models\RiwayatPendidikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RiwayatPendidikan::create([
            'guru_id' => 1,
            'jenjang' => 'S1',
            'nama_institusi' => 'Universitas Esa Unggul',
            'tahun_kelulusan' => 2020,
        ]);
    }
}
