<?php

use Illuminate\Database\Seeder;

class ImageTourTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('image_tour')->delete();
        
        \DB::table('image_tour')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img_name' => 'gallery',
                'img_desc' => 'album gallery',
                'created_at' => '2016-11-17 12:16:59',
                'updated_at' => '2016-11-17 12:16:59',
            ),
        ));
        
        
    }
}
