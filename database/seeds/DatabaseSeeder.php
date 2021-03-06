<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(TourSeeder::class);
        $this->call(KaosSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(MetodePembayaranSeeder::class);
        $this->call('MediaTableSeeder');
    }
}
