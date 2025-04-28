<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Logo extends Model
{
    use HasFactory;
    protected $table = 'logos';
    protected $fillable = [
        'title',
        'image',
    ];
}
