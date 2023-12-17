<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    use HasFactory;

    protected $table = 'article_tags';

    protected $fillable = [
        'id',
        'article_id',
        'tag_id',
        'created_at'
    ];

    public function tag(){ 
        return $this->belongsTo(Tag::class);
    }

    public function article(){ 
        return $this->belongsTo(Article::class);
    }
}
