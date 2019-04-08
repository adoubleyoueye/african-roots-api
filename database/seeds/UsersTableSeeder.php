<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    /**
     * Sends this data to the users table in the database
     */
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' =>  'admin@mail.com',
            'password' => 'root',
            'role' => 2
        ]);
    }
}
