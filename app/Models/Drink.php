<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drink extends Model
{
    protected $fillable = [
        'product_id',
        'description',
    ];

    /**
     * Get the product that owns the drink.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
