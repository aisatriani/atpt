<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'name' => 'administrator',
        	'username' => 'admin',
        	'password' => bcrypt('admin123'),
        	'email' => 'aisatriani03@gmail.com',
            'api_token' => str_random(60)
        ]);
    }
}
