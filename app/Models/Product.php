<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'img_src',
        'img_alt',
        'price',
        'type',
    ];

    /**
     * Get the specific product model.
     */
    public function productable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the burger if this product is a burger.
     */
    public function burger()
    {
        return $this->hasOne(Burger::class);
    }

    /**
     * Get the drink if this product is a drink.
     */
    public function drink()
    {
        return $this->hasOne(Drink::class);
    }

    /**
     * Get the snack if this product is a snack.
     */
    public function snack()
    {
        return $this->hasOne(Snack::class);
    }

    /**
     * Format the price with Euro symbol.
     */
    public function formattedPrice()
    {
        return '€' . number_format($this->price, 2, ',', '.');
    }

    /**
     * Scope a query to only include burgers.
     */
    public function scopeBurgers($query)
    {
        return $query->where('type', 'burger');
    }

    /**
     * Scope a query to only include drinks.
     */
    public function scopeDrinks($query)
    {
        return $query->where('type', 'drink');
    }

    /**
     * Scope a query to only include snacks.
     */
    public function scopeSnacks($query)
    {
        return $query->where('type', 'snack');
    }
}
