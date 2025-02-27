<?php

namespace App\Livewire;

use Livewire\Component;

class Merch extends Component
{
    public $items = [];
    public $categories = [
        'all' => 'Alle Produkte',
        'clothing' => 'Kleidung',
        'accessories' => 'Accessoires',
        'home' => 'Zuhause'
    ];
    public $activeCategory = 'all';
    
    public function mount()
    {
        // In a real application, this would come from a database
        $this->items = [
            [
                'id' => 1,
                'name' => 'Street Food T-Shirt',
                'description' => 'Hochwertiges T-Shirt mit Street Food Logo auf der Brust',
                'price' => 24.90,
                'image' => 'tshirt.jpg',
                'category' => 'clothing',
                'available' => true,
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL']
            ],
            [
                'id' => 2,
                'name' => 'Street Food Hoodie',
                'description' => 'Warmer Hoodie mit Logo-Print auf der Rückseite',
                'price' => 49.90,
                'image' => 'hoodie.jpg',
                'category' => 'clothing',
                'available' => true,
                'sizes' => ['S', 'M', 'L', 'XL']
            ],
            [
                'id' => 3,
                'name' => 'Burger Cap',
                'description' => 'Stylische Cap mit Burger-Stickerei',
                'price' => 19.90,
                'image' => 'cap.jpg',
                'category' => 'accessories',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 4,
                'name' => 'Street Food Tote Bag',
                'description' => 'Praktische Stofftasche mit Street Food Motiv',
                'price' => 14.90,
                'image' => 'totebag.jpg',
                'category' => 'accessories',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 5,
                'name' => 'Street Food Beanie',
                'description' => 'Stylische Beanie-Mütze mit gesticktem Logo',
                'price' => 18.90,
                'image' => 'beanie.jpg',
                'category' => 'accessories',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 6,
                'name' => 'Burger Kaffeetasse',
                'description' => 'Keramiktasse mit Burger-Motiv, spülmaschinenfest',
                'price' => 12.90,
                'image' => 'mug.jpg',
                'category' => 'home',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 7,
                'name' => 'Street Food Poster',
                'description' => 'Hochwertiger Kunstdruck im Format A2',
                'price' => 16.90,
                'image' => 'poster.jpg',
                'category' => 'home',
                'available' => true,
                'sizes' => ['A2']
            ],
            [
                'id' => 8,
                'name' => 'Burger Socken',
                'description' => 'Lustige Socken mit Burger-Muster',
                'price' => 9.90,
                'image' => 'socks.jpg',
                'category' => 'clothing',
                'available' => true,
                'sizes' => ['36-40', '41-46']
            ],
            [
                'id' => 9,
                'name' => 'Street Food Sticker-Set',
                'description' => 'Set mit 10 verschiedenen Street Food Stickern',
                'price' => 7.90,
                'image' => 'stickers.jpg',
                'category' => 'accessories',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 10,
                'name' => 'Street Food Kochschürze',
                'description' => 'Robuste Kochschürze mit Street Food Logo, perfekt zum Grillen',
                'price' => 22.90,
                'image' => 'apron.jpg',
                'category' => 'home',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 11,
                'name' => 'Burger Schlüsselanhänger',
                'description' => 'Burger-förmiger Schlüsselanhänger aus Kunstharz',
                'price' => 6.90,
                'image' => 'keychain.jpg',
                'category' => 'accessories',
                'available' => true,
                'sizes' => ['One Size']
            ],
            [
                'id' => 12,
                'name' => 'Street Food Tank Top',
                'description' => 'Leichtes Tank Top mit Street Food Logo, perfekt für den Sommer',
                'price' => 19.90,
                'image' => 'tanktop.jpg',
                'category' => 'clothing',
                'available' => true,
                'sizes' => ['S', 'M', 'L', 'XL']
            ]
        ];
    }
    
    public function setCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function render()
    {
        $filteredItems = $this->items;
        
        if ($this->activeCategory !== 'all') {
            $filteredItems = array_filter($this->items, function($item) {
                return $item['category'] === $this->activeCategory;
            });
        }
        
        return view('livewire.merch', [
            'filteredItems' => $filteredItems
        ])->layout('layouts.app');
    }
}