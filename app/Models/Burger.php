<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Burger extends Model
{
    protected $fillable = [
        'product_id',
        'ingredients',
        'allergens',
        'description',
    ];

    /**
     * Get the product that owns the burger.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
