<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'event_type',
        'event_date',
        'start_time',
        'end_time',
        'venue_name',
        'venue_address',
        'guests',
        'package',
        'dietary_requirements',
        'additional_services',
        'budget',
        'message',
        'how_heard',
        'status', // pending, contacted, confirmed, completed, cancelled
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'event_date' => 'date',
        'dietary_requirements' => 'array',
        'additional_services' => 'array',
        'budget' => 'decimal:2',
    ];
    
    /**
     * Calculate the estimated price based on package and guest count
     *
     * @return float
     */
    public function getEstimatedPriceAttribute(): float
    {
        $pricePerPerson = [
            'basic' => 25,
            'premium' => 35,
            'deluxe' => 45,
        ];
        
        return $pricePerPerson[$this->package] * $this->guests;
    }
}