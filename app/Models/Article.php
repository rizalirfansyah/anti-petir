<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'id',
        'title',
        'category',
        'content',
        'image',
        'created_at'
    ];

    public function article_tags(){
    	return $this->hasMany(ArticleTag::class);
    }
}
