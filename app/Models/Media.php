<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_reference',
        'name',
        'classification',
        'date_of_release',
        'general_review',
        'seasons'
    ];
}
