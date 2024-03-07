<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    use HasFactory;

    const Post_Status = [
        'published' => 'Published',
        'unpublished' => 'Unpublished',
        'draft' => 'Draft'
    ];


    

    protected $fillable = [
        'event_category_id',
        'title',
        'slug',
        'description',
        'image_url',
        'post_type',
        'status',
        'event_date',
        'start_time',
        'end_time',
    ];

    public function EventCategory(): BelongsTo {
        return $this->belongsTo(EventCategory::class,'event_category_id');
    }
}
