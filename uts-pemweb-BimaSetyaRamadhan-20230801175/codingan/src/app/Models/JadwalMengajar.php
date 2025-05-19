<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalMengajar extends Model
{
    use HasFactory;
    protected $table = 'jadwal_mengajars';
    protected $fillable = ['guru_id', 'hari', 'mata_pelajaran', 'kelas', 'waktu_mulai', 'waktu_selesai'];
}
