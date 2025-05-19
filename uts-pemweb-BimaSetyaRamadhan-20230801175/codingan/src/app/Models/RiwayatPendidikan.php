<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatPendidikan extends Model
{
    use HasFactory;
    protected $table = 'riwayat_pendidikans';
    protected $fillable = ['guru_id', 'jenjang', 'nama_institusi', 'tahun_kelulusan'];
}
