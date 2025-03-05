<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Snack extends Model
{
    protected $fillable = [
        'product_id',
        'description',
        'ingredients',
        'allergens',
    ];

    /**
     * Get the product that owns the snack.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
