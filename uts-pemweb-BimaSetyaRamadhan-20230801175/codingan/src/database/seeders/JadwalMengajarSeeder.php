<?php

namespace Database\Seeders;

use App\Models\JadwalMengajar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalMengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalMengajar::create([
            'guru_id' => 1,
            'hari' => 'Senin',
            'mata_pelajaran' => 'Matematika',
            'kelas' => 'XII IPA 1',
            'waktu_mulai' => '08:00:00',
            'waktu_selesai' => '09:30:00',
        ]);
    }
}
