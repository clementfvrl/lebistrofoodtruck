<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Snack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SnacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $snackData = [
            [
                'img_src' => '/images/snacks/fries.jpg',
                'img_alt' => 'French fries',
                'name' => 'French fries',
                'description' => 'Knusprig goldene Pommes frites, perfekt gesalzen und serviert mit Ihrer Wahl an Dips.',
                'ingredients' => 'Kartoffeln, Pflanzenöl, Salz',
                'allergens' => 'Kann Spuren von Gluten enthalten',
                'price' => 4.00,
            ],
            [
                'img_src' => '/images/snacks/truffle-fries.jpg',
                'img_alt' => 'Truffle fries',
                'name' => 'Truffle fries',
                'description' => 'Unsere knusprigen Pommes frites verfeinert mit Trüffelöl und Parmesan, ein wahrer Gaumenschmaus.',
                'ingredients' => 'Kartoffeln, Pflanzenöl, Trüffelöl, Parmesan, Salz, Petersilie',
                'allergens' => 'Enthält Milch/-Erzeugnisse (laktosehaltig), Kann Spuren von Gluten enthalten',
                'price' => 5.00,
            ],
            [
                'img_src' => '/images/snacks/potatoes.jpg',
                'img_alt' => 'Potatoes',
                'name' => 'Potatoes',
                'description' => 'Ofenfrische Kartoffelspalten mit knuspriger Außenseite und fluffigem Inneren.',
                'ingredients' => 'Kartoffeln, Pflanzenöl, Salz, Gewürze',
                'allergens' => 'Kann Spuren von Gluten enthalten',
                'price' => 4.00,
            ],
            [
                'img_src' => '/images/snacks/mozzarella-sticks.jpg',
                'img_alt' => 'Mozzarella sticks',
                'name' => 'Mozzarella sticks',
                'description' => 'Knusprig frittierte Mozzarella-Sticks mit außen krosch und innen cremig geschmolzenem Käse.',
                'ingredients' => 'Mozzarella, Paniermehl, Ei, Gewürze, Pflanzenöl',
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig)',
                'price' => 4.00,
            ],
        ];

        foreach ($snackData as $data) {
            $product = Product::create([
                'name' => $data['name'],
                'img_src' => $data['img_src'],
                'img_alt' => $data['img_alt'],
                'price' => $data['price'],
                'type' => 'snack',
            ]);

            Snack::create([
                'product_id' => $product->id,
                'description' => $data['description'],
                'ingredients' => $data['ingredients'],
                'allergens' => $data['allergens'],
            ]);
        }
    }
}
