<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Personaje extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'id',
        'name',
        'movie_series',
        'picture',
        'general_description'
    ];
}
