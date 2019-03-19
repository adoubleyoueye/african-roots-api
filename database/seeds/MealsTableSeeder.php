<?php

use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->insert([
            'name' => 'Apple pancakes',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.8,
            'category' => 'Breakfasts',
            'image' => 'url("african-roots-client/public/meals-pictures/apple-pancakes.jpeg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Baked peppers',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/baked-pepper.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Black bean and lentil curry',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.1,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/black-bean-lentil-curry.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Blueberry smoothie',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.3,
            'category' => 'Drinks',
            'image' => 'url("african-roots-client/public/meals-pictures/blueberry-smoothie.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Braaibroodjie',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/braaibroodjie.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Bunny chow',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.7, 
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/bunny-chow.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Butternut muffin',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.6,
            'category' => 'Breakfassa',
            'image' => 'url("african-roots-client/public/meals-pictures/butternut-muffin.jpeg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Cappuccino',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.7,
            'category' => 'Drinks',
            'image' => 'url("african-roots-client/public/meals-pictures/cappuccino.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Creamy potato soup',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/potato-soup.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Fresh fruit juices',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5,
            'category' => 'Drinks',
            'image' => 'url("african-roots-client/public/meals-pictures/fruit-juice.jpeg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Koeksisters',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9,
            'category' => 'Desserts',
            'image' => 'url("african-roots-client/public/meals-pictures/koeksisters.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Mango and berry smoothie',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.2,
            'category' => 'Drinks',
            'image' => 'url("african-roots-client/public/meals-pictures/mango-berry-smoothie.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Melktert',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9,
            'category' => 'Desserts',
            'image' => 'url("african-roots-client/public/meals-pictures/melktert.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Mini meatless sausage rolls',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.8,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/mini-sausage-rolls.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Mushroom and spinach pizza',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/pizza.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Polenta fries',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.7,
            'category' => 'Light meals',
            'image' => 'url("african-roots-client/public/meals-pictures/polenta-fries.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Quinoa bowl',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.8,
            'category' => 'Breakfasts',
            'image' => 'url("african-roots-client/public/meals-pictures/quinoa-bowl.jpg")'
        ]);
        DB::table('meals')->insert([
            'name' => 'Scones',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5,
            'category' => 'Breakfasts',
            'image' => 'url("african-roots-client/public/meals-pictures/scones.jpeg")'
        ]);
    }
}
