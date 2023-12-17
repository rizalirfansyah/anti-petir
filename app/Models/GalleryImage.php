<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    protected $table = 'gallery_images';

    protected $fillable = [
        'id',
        'gallery_id',
        'image',
        'created_at'
    ];

    public function gallery(){ 
        return $this->belongsTo(Gallery::class);
    }
}
