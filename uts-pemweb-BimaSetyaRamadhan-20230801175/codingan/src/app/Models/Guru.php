<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;


class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = ['name', 'nip'];
}
