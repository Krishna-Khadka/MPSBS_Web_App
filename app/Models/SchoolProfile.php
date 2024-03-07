<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolProfile extends Model
{
    protected $fillable = [
        'about_us',
        'mission_vision',
        'why_choose_us',
        'message',
        'history',
        'email',
        'secondary_email',
        'telephone',
        'contact_no',
        'secondary_contact_no',
        'address',
        'google_map_url',
        'website_url',
        'facebook_url',
    ];
    use HasFactory;
}
