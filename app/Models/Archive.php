<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;


    const category = [
        'news' => 'News',
        'events' => 'Events',
        'school life' => 'School Life',
        'other' => 'Other'
    ];

    protected $fillable = [
        'title','slug', 'description', 'category', 'images', 'date', 'documents', 'published',
    ];

    public function images(){
        return $this->hasMany(ArchiveImage::class,'archive_id');
    }

}
