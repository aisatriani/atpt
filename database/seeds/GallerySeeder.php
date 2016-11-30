<?php

use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('media')->delete();

        \App\Gallery::create([
            'img_name' => 'gallery',
            'img_desc' => 'album gallery'
        ]);
    }
}
