<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes; // Dùng xóa mềm
    protected $fillable=[
        'title',
        'cover_art',
        'developer',
        'release_year',
        'genre',
    ];
}
