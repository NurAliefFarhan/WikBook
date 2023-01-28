<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'writer',
        'publisher',
        'isbn',
        'categoryBook',
        'synopsis',
        'image',
        'status',
        'done_time',
        'user_id',
    ];
}
