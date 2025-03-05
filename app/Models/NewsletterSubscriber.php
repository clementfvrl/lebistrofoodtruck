<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsletterSubscriber extends Model
{
    protected $fillable = [
        'email',
        'confirmed_at',
        'confirmation_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'confirmed_at' => 'datetime',
    ];

    /**
     * Generate a confirmation token for the subscriber.
     * 
     * @return string
     */
    public function generateConfirmationToken(): string
    {
        $token = Str::random(60);
        $this->update(['confirmation_token' => $token]);
        
        return $token;
    }

    /**
     * Confirm the subscriber.
     * 
     * @return void
     */
    public function confirm(): void
    {
        $this->update([
            'confirmed_at' => now(),
            'confirmation_token' => null,
        ]);
    }

    /**
     * Determine if the subscriber is confirmed.
     * 
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed_at !== null;
    }
}
