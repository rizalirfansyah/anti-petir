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
        'name',
        'created_at'
    ];

    public function article_tag(){ 
        return $this->hasOne(ArticleTag::class);
    }
}
