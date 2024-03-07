<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    const Position = [
        'administration' => 'Administration',
        'management' => 'Management',
        'core team' => 'Core Team',
        'accountant' => 'Accountant',
        'teaching staff' => 'Teaching staff',
        'support team' => 'Support Team',
        'other team' => 'Other Team'
    ];
    
    use HasFactory;
    protected $fillable = ['name', 'photo', 'position', 'role', 'contact', 'address', 'email', 'facebook_url', 'instagram_url', 'is_active','DOJ'];
}
