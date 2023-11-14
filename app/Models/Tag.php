<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        'id',
        'article_id',
        'name',
        'created_at'
    ];

    public function articles(){
    	return $this->belongsTo(Article::class,'article_id', 'id');
    }
}
