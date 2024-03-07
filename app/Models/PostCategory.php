<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','description'];

    public function categories() : HasMany {
        return $this->hasMany(Post::class);
    }
}
