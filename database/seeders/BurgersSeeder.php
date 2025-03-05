<?php

namespace Database\Seeders;

use App\Models\Burger;
use App\Models\Product;
use Illuminate\Database\Seeder;

class BurgersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $burgerData = [
            [
                'img_src' => '/images/burgers/burning-man.jpg',
                'img_alt' => 'Burning Man burger',
                'name' => 'Burning Man',
                'ingredients' => 'mit 160g einheimischem Rinderfaschiertem, Barbecuesauce, Bacon, Guacamole, Jalapenos, Zwiebeln, Tomaten, Eisbergsalat und Cheddar',
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse, Substanzen oder Produkte, die Allergien oder Intoleranzen hervorrufen können, Mit Nitrat, Mit Nitritpökelsalz',
                'description' => 'Burning Man ist ein scharfer Burger mit saftigem Rindfleisch und würziger Guacamole. Die Kombination aus Barbecuesauce, Jalapenos, Zwiebeln, Tomaten, Eisbergsalat und Cheddar sorgt für einen intensiven Geschmack und eine angenehme Schärfe. Ein Muss für alle Burger-Liebhaber, die es gerne etwas schärfer mögen.',
                'price' => 12.90,
            ],
            [
                'img_src' => '/images/burgers/dannys-cheeseburger.jpg',
                'img_alt' => "Danny's Cheeseburger",
                'name' => "Danny's Cheeseburger",
                'ingredients' => "Austrian Beef-Patty 280g, Brioche Buns, Cheddar, Ketchup, Senf, Zwiebel, Pickles",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Senf/-Erzeugnisse, Enthält Sesamsamen/-Erzeugnisse',
                'description' => "Danny's Cheeseburger - Ein Klassiker, der nie aus der Mode kommt. Unser saftiger 280g-Austrian Beef-Patty wird perfekt mit Ketchup, Senf, Zwiebeln und Pickles kombiniert, um den ultimativen Geschmack zu erzielen.",
                'price' => 12.90,
            ],
            [
                'img_src' => '/images/burgers/double-cheese-burger.jpg',
                'img_alt' => "Double Cheeseburger",
                'name' => "Double Cheeseburger",
                'ingredients' => "mit 120g frischem Rindfleisch, Tomaten, Eisbergsalat, Zwiebeln, Pickles, Cheddar und Special-Bistro-Sauce",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse',
                'description' => "Der Classic Cheeseburger von Le Bistro Foodtruck ist die perfekte Wahl für alle, die einen traditionellen, köstlichen Burger mit etwas weniger Fleisch bevorzugen. Mit 120g saftigem Rindfleisch, knackigem Eisbergsalat, frischen Tomaten, Zwiebeln, knusprigen Pickles, cremigem Cheddar und unserer Special-Bistro-Sauce, ist dieser Burger ein echter Klassiker, der jeden Geschmack trifft. Probiere ihn noch heute und erlebe den unverkennbaren Geschmack von Le Bistro Foodtruck!",
                'price' => 9.90,
            ],
            [
                'img_src' => '/images/burgers/hamburger.jpg',
                'img_alt' => "Classic Hamburger",
                'name' => "Classic Hamburger",
                'ingredients' => "mit 120g frischem Rindfleisch, Tomaten, Eisbergsalat, Zwiebeln, Pickles und Special-Bistro-Sauce",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse',
                'description' => "Unser Classic Hamburger ist der Inbegriff eines klassischen Burgers: mit 120g saftigem österreichischem Rindfleisch, frischen Tomaten, knackigem Eisbergsalat, Zwiebeln, knusprigen Pickels und unserer besonderen Bistro-Sauce. Jeder Bissen ist ein Genuss für die Sinne, und das Beste daran ist, dass er perfekt für unterwegs ist. Gönnen Sie sich einen Classic Hamburger und lassen Sie sich von unserem Geschmack überzeugen!",
                'price' => 8.90,
            ],
            [
                'img_src' => '/images/burgers/manceys-burger.jpg',
                'img_alt' => "Mancey's Burger",
                'name' => "Mancey's Burger",
                'ingredients' => "mit 180g 100 % Austrian Beef-Patty, Trüffel-Mayonnaise, Eisbergsalat, Cheddar, Emmentaler, Spiegelei, Tomatensalsa, Zwiebeln und Tomaten",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse',
                'description' => "Mancey's Burger ist unser Star der Karte - und das aus gutem Grund! Der 180g 100% Austrian Beef-Patty wird mit Trüffel-Mayonnaise, Eisbergsalat, Cheddar, Emmentaler, Spiegelei, Tomatensalsa, Zwiebeln und Tomaten zu einer wahren Geschmacksexplosion.",
                'price' => 13.90,
            ],
            [
                'img_src' => '/images/burgers/masterpiece-burger.jpg',
                'img_alt' => "Masterpiece Burger",
                'name' => "Masterpiece Burger",
                'ingredients' => "mit 180g einheimischem Rinderfaschiertem, Burgersauce, Bacon, Mayonnaise, Ei, Zwiebeln, Tomaten, Eisbersalat und Cheddar",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse, Substanzen oder Produkte, die Allergien oder Intoleranzen hervorrufen können, Mit Nitrat, Mit Nitritpökelsalz',
                'description' => "Masterpiece Burger - Ein wahres Meisterwerk aus 180g österreichischem Rinderfaschiertem, der mit einer reichhaltigen Burgersauce, knusprigem Bacon, cremiger Mayonnaise, einem saftigen Ei, frischen Zwiebeln, Tomaten, knackigem Eisbersalat und geschmolzenem Cheddar belegt ist. Dieser Burger ist ein echter Hingucker und ein wahrer Genuss für alle, die das Besondere lieben.",
                'price' => 13.90,
            ],
            [
                'img_src' => '/images/burgers/mr-veggie.jpg',
                'img_alt' => "Mr.Veggie burger",
                'name' => "Mr.Veggie burger",
                'ingredients' => "mit Cheddar, Champignons, gegrillter Zucchini, Tomaten, Eisbersalat, Zwiebeln, veganem Patty und Burgersauce",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse',
                'description' => "Mr. Veggie ist die perfekte Wahl für alle, die sich für eine fleischlose Option entscheiden. Mit saftigem veganem Patty, Cheddar, gegrillten Champignons, Zucchini, knackigen Tomaten, frischem Eisbergsalat, Zwiebeln und unserer leckeren Burgersauce, ist dieser Burger ein wahrer Genuss für vegetarische Burgerliebhaber.",
                'price' => 12.90,
            ],
            [
                'img_src' => '/images/burgers/seshs-burger.jpg',
                'img_alt' => "Sesh's burger",
                'name' => "Sesh's burger",
                'ingredients' => "mit 160g frischem Chicken, Barbecuesauce, Bacon, Guacamole, Zwiebeln, Jalapenos, Tomaten, Eisbersalat und Cheddar",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse, Substanzen oder Produkte, die Allergien oder Intoleranzen hervorrufen können, Mit Nitrat, Mit Nitritpökelsalz',
                'description' => "Unser Sesh's Burger ist die perfekte Wahl für alle, die es gerne etwas schärfer mögen. Hier trifft ein saftiges 160g Hähnchenfilet auf Barbecuesauce, knusprigen Bacon, Guacamole, Zwiebeln, Jalapenos, Tomaten, Eisbergsalat und Cheddar - ein wahrhaft feuriges Geschmackserlebnis!",
                'price' => 12.90,
            ],
            [
                'img_src' => '/images/burgers/the-chicken-chick.jpg',
                'img_alt' => "The Chicken Chick burger",
                'name' => "The Chicken Chick",
                'ingredients' => "mit paniertem Chicken, Bacon, Crunchy Onion, Eisbergsalat, Mayonnaise und Sweet-Chili-Sauce",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse, Substanzen oder Produkte, die Allergien oder Intoleranzen hervorrufen können, Mit Nitrat, Mit Nitritpökelsalz',
                'description' => "The Chicken Chick ist der perfekte Burger für alle, die auf der Suche nach einer knusprigen und herzhaften Abwechslung sind. Paniertes Hühnchen, knuspriger Bacon, knusprige Zwiebeln, knackiger Eisbergsalat und eine süße Chili-Mayonnaise machen diesen Burger zu einem wahren Geschmackserlebnis. Probieren Sie jetzt den The Chicken Chick Burger und lassen Sie sich von seinen Aromen verzaubern!",
                'price' => 11.90,
            ],
            [
                'img_src' => '/images/burgers/vip-grill-chicken.jpg',
                'img_alt' => "VIP Grill Chicken burger",
                'name' => "VIP Grill Chicken",
                'ingredients' => "mit Einheimisches Chicken Filet Natur gegrillt, Brioche Bun, Original Burgersauce, Guacamole, Cheddar, gegrilltem Speck, Eisbergsalat",
                'allergens' => 'Enthält glutenhaltige/s Getreide/-Erzeugnisse, Enthält Ei/-Erzeugnisse, Enthält Milch/-Erzeugnisse (laktosehaltig), Enthält Sesamsamen/-Erzeugnisse, Substanzen oder Produkte, die Allergien oder Intoleranzen hervorrufen können, Mit Nitrat, Mit Nitritpökelsalz',
                'description' => "Mit unserem V.I.P. Grill Chicken Burger erlebst du wahren Grillgenuss! Das saftige heimische Hühnerfilet wird auf offener Flamme gegrillt und mit cremiger Guacamole, knusprigem Speck und frischem Eisbergsalat abgerundet. Der Brioche-Bun und die Original Burgersauce machen diesen Burger zu einem unwiderstehlichen Erlebnis. Gönn' dir den V.I.P.-Status",
                'price' => 12.90,
            ],
        ];

        foreach ($burgerData as $data) {
            $product = Product::create([
                'name' => $data['name'],
                'img_src' => $data['img_src'],
                'img_alt' => $data['img_alt'],
                'price' => $data['price'],
                'type' => 'burger',
            ]);

            Burger::create([
                'product_id' => $product->id,
                'ingredients' => $data['ingredients'],
                'allergens' => $data['allergens'],
                'description' => $data['description'],
            ]);
        }
    }
}
