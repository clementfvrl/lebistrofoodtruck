<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class FeaturedProducts extends Component
{
    public function render()
    {
        // Get 4 featured products (you could add a 'featured' flag to the products table in the future)
        $featuredProducts = Product::with(['burger', 'drink', 'snack'])
            ->take(4)
            ->get();
            
        return view('livewire.featured-products', [
            'featuredProducts' => $featuredProducts
        ]);
    }
}
