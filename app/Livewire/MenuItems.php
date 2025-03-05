<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class MenuItems extends Component
{
    public $activeCategory = 'burgers';
    
    public function render()
    {
        return view('livewire.menu-items', [
            'burgers' => Product::burgers()->with('burger')->get(),
            'drinks' => Product::drinks()->with('drink')->get(),
            'snacks' => Product::snacks()->with('snack')->get(),
            'activeProducts' => $this->getActiveProducts(),
        ]);
    }
    
    public function setCategory($category)
    {
        $this->activeCategory = $category;
    }
    
    private function getActiveProducts()
    {
        return match($this->activeCategory) {
            'burgers' => Product::burgers()->with('burger')->get(),
            'drinks' => Product::drinks()->with('drink')->get(),
            'snacks' => Product::snacks()->with('snack')->get(),
            default => Product::burgers()->with('burger')->get(),
        };
    }
}
