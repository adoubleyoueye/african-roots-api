<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seeds the application's database.
     *
     * @return void
     */
    public function run()
    /**
     * Calls the different seed tables to the database
     */
    {
        $this->call(InventoryTableSeeder::class);
        $this->call(MealsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
