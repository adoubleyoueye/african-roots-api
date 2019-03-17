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
            'inventory_id' => 1,
        ]);
        DB::table('meals')->insert([
            'name' => 'Baked peppers',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5
        ]);
        DB::table('meals')->insert([
            'name' => 'Black bean and lentil curry',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.1
        ]);
        DB::table('meals')->insert([
            'name' => 'Blueberry smoothie',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.3
        ]);
        DB::table('meals')->insert([
            'name' => 'Braaibroodjie',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5
        ]);
        DB::table('meals')->insert([
            'name' => 'Bunny chow',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.7
        ]);
        DB::table('meals')->insert([
            'name' => 'Butternut muffin',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.6
        ]);
        DB::table('meals')->insert([
            'name' => 'Cappuccino',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.7
        ]);
        DB::table('meals')->insert([
            'name' => 'Creamy potato soup',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9
        ]);
        DB::table('meals')->insert([
            'name' => 'Fresh fruit juices',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5
        ]);
        DB::table('meals')->insert([
            'name' => 'Koeksisters',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9
        ]);
        DB::table('meals')->insert([
            'name' => 'Mango and berry smoothie',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.2
        ]);
        DB::table('meals')->insert([
            'name' => 'Melktert',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9
        ]);
        DB::table('meals')->insert([
            'name' => 'Mini meatless sausage rolls',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.8
        ]);
        DB::table('meals')->insert([
            'name' => 'Mushroom and spinach pizza',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.9
        ]);
        DB::table('meals')->insert([
            'name' => 'Polenta fries',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.7
        ]);
        DB::table('meals')->insert([
            'name' => 'Quinoa bowl',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.8
        ]);
        DB::table('meals')->insert([
            'name' => 'Scones',
            'ingredient_id' => 0,
            'price_id' =>  0,
            'rating' => 4.5
        ]);
    }
}
