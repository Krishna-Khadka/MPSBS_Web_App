<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','category_id', 'image', 'date'
    ];

    public function category() : BelongsTo{
        return $this->belongsTo(GalleryCategory::class,'category_id');
    }

    public function images(){
        return $this->hasMany(GalleryImage::class,'gallery_id');
    }
}
