<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Menu extends Component
{
    public $activeCategory = 'burgers';
    public $categories = [
        'burgers' => 'Burger',
        'snacks' => 'Beilagen',
        'drinks' => 'Getränke',
    ];
    
    public function setCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function render()
    {
        $products = match($this->activeCategory) {
            'burgers' => Product::where('type', 'burger')->with('burger')->get(),
            'snacks' => Product::where('type', 'snack')->with('snack')->get(),
            'drinks' => Product::where('type', 'drink')->with('drink')->get(),
            default => Product::where('type', 'burger')->with('burger')->get(),
        };

        return view('livewire.menu', [
            'products' => $products,
        ])->layout('layouts.app');
    }
}