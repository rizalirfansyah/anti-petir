<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $table = 'references';

    protected $fillable = [
        'id', 
        'logo_name', 
        'file_type', 
        'file_data'
    ];

}
