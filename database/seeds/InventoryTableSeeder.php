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
            'category' => 'Nuts',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Almond milk',
            'category' => 'Dairy',
            'quantity' =>  10,
            'price' => 7,
            'unit' => 'ml'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Apple',
            'category' => 'Fruit',
            'quantity' =>  20,
            'price' => 3,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Black bean',
            'category' => 'Beans',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Blueberry',
            'category' => 'Fruit',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Bread',
            'category' => 'Grains',
            'quantity' =>  20,
            'price' => 5,
            'unit' => 'pc'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Butternut',
            'category' => 'Vegetable',
            'quantity' =>  12,
            'price' => 8,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Carrot',
            'category' => 'Vegetable',
            'quantity' =>  30,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Cashew',
            'category' => 'Nuts',
            'quantity' =>  50,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Cherry tomato',
            'category' => 'Fruit',
            'quantity' =>  20,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Chickpea',
            'category' => 'Beans',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Cinnamon',
            'category' => 'Spice',
            'quantity' =>  100,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Coconut milk',
            'category' => 'Dairy',
            'quantity' =>  20,
            'price' => 7,
            'unit' => 'ml'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Coconut oil',
            'category' => 'Oil',
            'quantity' =>  60,
            'price' => 3,
            'unit' => 'ml'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Coffee',
            'category' => 'Beans',
            'quantity' =>  60,
            'price' => 5,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Corn',
            'category' => 'Vegetable',
            'quantity' =>  50,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Flour',
            'category' => 'Grains',
            'quantity' =>  200,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Lentil',
            'category' => 'Beans',
            'quantity' =>  60,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Mango',
            'category' => 'Fruit',
            'quantity' =>  30,
            'price' => 5,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Mushroom',
            'category' => 'Vegetable',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Olive oil',
            'category' => 'Oil',
            'quantity' =>  60,
            'price' => 2,
            'unit' => 'ml'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Onion',
            'category' => 'Vegetable',
            'quantity' =>  30,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Pepper',
            'category' => 'Vegetable',
            'quantity' =>  30,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Polenta',
            'category' => 'Grains',
            'quantity' =>  20,
            'price' => 8,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Potato',
            'category' => 'Vegetable',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Quinoa',
            'category' => 'Grains',
            'quantity' =>  50,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Raspberry',
            'category' => 'Fruit',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Soy milk',
            'category' => 'Dairy',
            'quantity' =>  20,
            'price' => 7,
            'unit' => 'ml'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Spinach',
            'category' => 'Vegetable',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Sugar',
            'category' => 'Grains',
            'quantity' =>  100,
            'price' => 1,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Sweet potato',
            'category' => 'Vegetable',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Tomato',
            'category' => 'Fruit',
            'quantity' =>  40,
            'price' => 2,
            'unit' => 'g'
        ]);
        DB::table('inventory')->insert([
            'name' => 'Vegan mayo',
            'category' => 'Oil',
            'quantity' =>  50,
            'price' => 3,
            'unit' => 'ml'
        ]);
    }
}
