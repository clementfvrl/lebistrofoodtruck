<?php

namespace App\Livewire;

use Livewire\Component;

class Menu extends Component
{
    public $activeCategory = 'burgers';
    public $categories = [
        'burgers' => 'Burger',
        'wraps' => 'Wraps',
        'sides' => 'Beilagen',
        'drinks' => 'Getränke',
        'desserts' => 'Desserts'
    ];
    
    public $items = [];

    public function mount()
    {
        // In a real application, this would come from a database
        $this->items = [
            'burgers' => [
                [
                    'id' => 1,
                    'name' => 'Classic Burger',
                    'description' => 'Mit 100% Rindfleisch, Käse, Salat und unserer Spezialsauce',
                    'price' => 9.90,
                    'image' => 'burger-classic.jpg'
                ],
                [
                    'id' => 2,
                    'name' => 'Cheese Burger Deluxe',
                    'description' => 'Mit doppeltem Käse, Rinderpattie, Zwiebeln und Gurken',
                    'price' => 10.90,
                    'image' => 'burger-cheese.jpg'
                ],
                [
                    'id' => 3,
                    'name' => 'Veggie Burger',
                    'description' => 'Hausgemachtes Gemüsepattie mit frischem Gemüse und Avocado',
                    'price' => 8.90,
                    'image' => 'burger-veggie.jpg'
                ],
                [
                    'id' => 4,
                    'name' => 'BBQ Burger',
                    'description' => 'Mit Rinderpattie, knusprigem Bacon, Käse und BBQ-Sauce',
                    'price' => 11.50,
                    'image' => 'burger-bbq.jpg'
                ]
            ],
            'wraps' => [
                [
                    'id' => 5,
                    'name' => 'Chicken Wrap',
                    'description' => 'Gegrilltes Hähnchen, frisches Gemüse und Joghurt-Sauce',
                    'price' => 8.50,
                    'image' => 'wrap-chicken.jpg'
                ],
                [
                    'id' => 6,
                    'name' => 'Veggie Wrap',
                    'description' => 'Gefüllt mit Gemüse, Avocado und hausgemachtem Hummus',
                    'price' => 8.50,
                    'image' => 'wrap-veggie.jpg'
                ],
                [
                    'id' => 7,
                    'name' => 'Falafel Wrap',
                    'description' => 'Hausgemachte Falafel mit Gemüse und Tahini-Sauce',
                    'price' => 8.90,
                    'image' => 'wrap-falafel.jpg'
                ]
            ],
            'sides' => [
                [
                    'id' => 8,
                    'name' => 'Pommes Frites',
                    'description' => 'Knusprige Pommes mit Meersalz',
                    'price' => 3.90,
                    'image' => 'sides-fries.jpg'
                ],
                [
                    'id' => 9,
                    'name' => 'Loaded Fries',
                    'description' => 'Knusprige Pommes mit Käsesoße, Speck und Jalapeños',
                    'price' => 7.50,
                    'image' => 'sides-loaded.jpg'
                ],
                [
                    'id' => 10,
                    'name' => 'Süßkartoffel-Pommes',
                    'description' => 'Knusprige Süßkartoffel-Pommes mit Dip',
                    'price' => 4.90,
                    'image' => 'sides-sweet.jpg'
                ],
                [
                    'id' => 11,
                    'name' => 'Coleslaw',
                    'description' => 'Hausgemachter cremiger Krautsalat',
                    'price' => 3.50,
                    'image' => 'sides-coleslaw.jpg'
                ]
            ],
            'drinks' => [
                [
                    'id' => 12,
                    'name' => 'Hausgemachte Limonade',
                    'description' => 'Frisch zubereitet mit echten Früchten',
                    'price' => 3.90,
                    'image' => 'drink-lemonade.jpg'
                ],
                [
                    'id' => 13,
                    'name' => 'Craft Beer (0,5l)',
                    'description' => 'Lokales Craft Beer vom Fass',
                    'price' => 4.50,
                    'image' => 'drink-beer.jpg'
                ],
                [
                    'id' => 14,
                    'name' => 'Softdrinks',
                    'description' => 'Verschiedene Sorten (0,33l)',
                    'price' => 2.90,
                    'image' => 'drink-soda.jpg'
                ]
            ],
            'desserts' => [
                [
                    'id' => 15,
                    'name' => 'Cheesecake',
                    'description' => 'Hausgemachter New York Style Cheesecake',
                    'price' => 5.50,
                    'image' => 'dessert-cheesecake.jpg'
                ],
                [
                    'id' => 16,
                    'name' => 'Brownie',
                    'description' => 'Warmer Schokoladen-Brownie mit Vanilleeis',
                    'price' => 6.90,
                    'image' => 'dessert-brownie.jpg'
                ]
            ]
        ];
    }

    public function setCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function render()
    {
        return view('livewire.menu')->layout('layouts.app');
    }
}