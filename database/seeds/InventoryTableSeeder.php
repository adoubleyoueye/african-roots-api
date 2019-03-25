<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory')->insert([
            'name' => 'Almond',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g',
            'image' => 'almonds.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Almond milk',
            'quantity' =>  10,
            'price' => 7,
            'unit' => 'ml',
            'image' => 'almond-milk.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Apple',
            'quantity' =>  20,
            'price' => 3,
            'unit' => 'g',
            'image' => 'apples.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Black bean',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g',
            'image' => 'black-beans.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Blueberry',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g',
            'image' => 'blueberries.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Bread',
            'quantity' =>  20,
            'price' => 5,
            'unit' => 'pc',
            'image' => 'bread.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Butternut',
            'quantity' =>  12,
            'price' => 8,
            'unit' => 'g',
            'image' => 'butternut.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Carrot',
            'quantity' =>  30,
            'price' => 2,
            'unit' => 'g',
            'image' => 'carrots.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Cashew',
            'quantity' =>  50,
            'price' => 2,
            'unit' => 'g',
            'image' => 'cashews.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Cherry tomato',
            'quantity' =>  20,
            'price' => 2,
            'unit' => 'g',
            'image' => 'cherry-tomatoes.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Chickpea',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g',
            'image' => 'chickpeas.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Cinnamon',
            'quantity' =>  100,
            'price' => 1,
            'unit' => 'g',
            'image' => 'cinnamon.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Coconut milk',
            'quantity' =>  20,
            'price' => 7,
            'unit' => 'ml',
            'image' => 'coconut-milk.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Coconut oil',
            'quantity' =>  60,
            'price' => 3,
            'unit' => 'ml',
            'image' => 'coconut-oil.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Coffee',
            'quantity' =>  60,
            'price' => 5,
            'unit' => 'g',
            'image' => 'coffee.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Corn',
            'quantity' =>  50,
            'price' => 1,
            'unit' => 'g',
            'image' => 'corn.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Flour',
            'quantity' =>  200,
            'price' => 1,
            'unit' => 'g',
            'image' => 'flour.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Lentil',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g',
            'image' => 'lentils.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Mango',
            'quantity' =>  30,
            'price' => 5,
            'unit' => 'g',
            'image' => 'mango.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Mushroom',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g',
            'image' => 'mushroom.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Olive oil',
            'quantity' =>  60,
            'price' => 2,
            'unit' => 'ml',
            'image' => 'olive-oil.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Onion',
            'quantity' =>  30,
            'price' => 2,
            'unit' => 'g',
            'image' => 'onions.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Pepper',
            'quantity' =>  30,
            'price' => 2,
            'unit' => 'g',
            'image' => 'peppers.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Polenta',
            'quantity' =>  20,
            'price' => 8,
            'unit' => 'g',
            'image' => 'polenta.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Potato',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'g',
            'image' => 'potato.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Quinoa',
            'quantity' =>  50,
            'price' => 1,
            'unit' => 'g',
            'image' => 'quinoa.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Raspberry',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'g',
            'image' => 'raspberries.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Soy milk',
            'quantity' =>  20,
            'price' => 7,
            'unit' => 'ml',
            'image' => 'soy-milk.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Spinach',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g',
            'image' => 'spinach.png' 
        ]);
        DB::table('inventory')->insert([
            'name' => 'Sugar',
            'quantity' =>  100,
            'price' => 1,
            'unit' => 'g',
            'image' => 'sugar.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Sweet potato',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'g',
            'image' => 'sweet-potato.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Tomato',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g',
            'image' => 'tomatoes.png'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Vegan mayo',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'ml',
            'image' => 'vegan-mayo.png'
        ]);
    }
}
