<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'id', 
        'title', 
        'content', 
        'category',
        'file_type',
        'file_data',
        'created_at'
    ];

}
