<?php

namespace Database\Seeders;

use App\Models\Drink;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drinkData = [
            [
                'img_src' => '/images/drinks/coca-cola.jpg',
                'img_alt' => 'Coca Cola can',
                'name' => 'Coca Cola',
                'description' => 'Klassisches Coca-Cola mit seinem unverwechselbaren Geschmack, eiskalt serviert.',
                'price' => 2.90,
            ],
            [
                'img_src' => '/images/drinks/coca-zero.jpg',
                'img_alt' => 'Coca Cola Zero can',
                'name' => 'Coca Cola Zero',
                'description' => 'Der klassische Coca-Cola-Geschmack ohne Zucker und ohne Kalorien.',
                'price' => 2.90,
            ],
            [
                'img_src' => '/images/drinks/redbull.jpg',
                'img_alt' => 'Redbull can',
                'name' => 'Redbull',
                'description' => 'Energy-Drink mit Taurin, Koffein und B-Vitaminen für mehr Energie und Konzentration.',
                'price' => 3.90,
            ],
            [
                'img_src' => '/images/drinks/water.jpg',
                'img_alt' => 'Mineral water bottle',
                'name' => 'Mineralwasser',
                'description' => 'Erfrischendes natürliches Mineralwasser, mit oder ohne Kohlensäure erhältlich.',
                'price' => 2.50,
            ],
            [
                'img_src' => '/images/drinks/beer.jpg',
                'img_alt' => 'Beer bottle',
                'name' => 'Bier vom Fass',
                'description' => 'Frisch gezapftes österreichisches Bier vom Fass.',
                'price' => 3.90,
            ],
            [
                'img_src' => '/images/drinks/orange-juice.jpg',
                'img_alt' => 'Fresh orange juice',
                'name' => 'Orangensaft',
                'description' => 'Frisch gepresster Orangensaft aus saftigen, sonnengereiften Früchten.',
                'price' => 3.50,
            ],
        ];

        foreach ($drinkData as $data) {
            $product = Product::create([
                'name' => $data['name'],
                'img_src' => $data['img_src'],
                'img_alt' => $data['img_alt'],
                'price' => $data['price'],
                'type' => 'drink',
            ]);

            Drink::create([
                'product_id' => $product->id,
                'description' => $data['description'],
            ]);
        }
    }
}
