<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    protected $fillable = [
        'service_type',
        'name',
        'email',
        'phone',
        'date',
        'location',
        'hours',
        'guests',
        'event_type',
        'music_style',
        'message',
        'is_processed',
    ];

    protected $casts = [
        'date' => 'date',
        'is_processed' => 'boolean',
    ];
}