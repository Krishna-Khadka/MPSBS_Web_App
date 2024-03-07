<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchiveImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'archive_id', 'images',
    ];

    public function archive(){
        return $this->belongsTo(Archive::class);
    }
}
