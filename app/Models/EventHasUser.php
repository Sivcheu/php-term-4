<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHasUser extends Model
{
    use HasFactory;
    protected $table = 'event_has_users';
    protected $fillable = [
        'user_id',
        'event_id'
    ];

    
}