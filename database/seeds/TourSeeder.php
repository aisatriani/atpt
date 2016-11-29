<?php

use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tour::create([
            'nama_tour' => 'Pulo Cinta',
            'deskripsi' => 'Terletak di Teluk Tomini, Provinsi Gorontalo (Sulawesi), satu pulau kecil berbentuk hati menurut legenda menjadi lokasi pertemuan rahasia pangeran dari Gorontalo dengan putri saudagar dari Belanda. Saat itu adalah masa peperangan, dan kedua insan dari pihak yang bertikai menyatu dan melupakan sejenak posisi mereka yang berseberangan. Saat malam hari bertabur bintang, mereka menikmati secret escape, to embrace the love.',
            'telp' => '021-294849',
            'latitude' => '0.4215077',
            'longitude' => '122.254257',
            'itenerary' => '-',
            'includes' => '-',
            'harga' => '1500000',
            'min_require' => 2,
        ]);

        \App\Tour::create([
            'nama_tour' => 'Taman laut olele',
            'deskripsi' => 'Pantai Olele merupakan pintu gerbang utama menuju ke surga Taman Laut Olele dengan alam bahari yang sangat indah. Taman Laut Olele ini menyimpan banyak sekali keindahan diantaranya yaitu Biota Laut, Terumbu karang, Bunga karang raksasa, berbagai jenis spesies ikan, goa jin dengan berbagai ikan hiasnya, dan masih banyak lagi.',
            'telp' => '-',
            'latitude' => '0.411564',
            'longitude' => '123.1505176',
            'itenerary' => '-',
            'includes' => '-',
            'harga' => '750000',
            'min_require' => 2,
        ]);

        \App\Tour::create([
            'nama_tour' => 'Pulau saronde',
            'deskripsi' => 'Pilau saronde merupakan sebuah pulau kecil yang terletak 65 kilometer dari pusat kota gorontalo tepatnya di kecamatan kwandang, kabupaten gorontalo utara. Pulau yang hanya mememiliki luas 1 kilometer ini dikelilingi oleh keindahan yang sangat mengagumkan yakni pasir putih batu karang dan hamparan air laut biru indah dan tenang.',
            'telp' => '-',
            'latitude' => '0.9254677',
            'longitude' => '122.8624315',
            'itenerary' => '-',
            'includes' => '-',
            'harga' => '550000',
            'min_require' => 2,
        ]);

        \App\Tour::create([
            'nama_tour' => 'Pulau diyonumo',
            'deskripsi' => 'Pulau Diyonumo merupakan pulau yang  berada di daerah Sumalata Timur, Gorontalo Utara. Tepatnya di Desa Deme 2 Kecamatan Sumalata. Pulau ini masih perawan banget loh guys. Belum terjamah tangan-tangan usil. Nah untuk mencapai pulau ini kamu cukup berlayar sekitar 10 menit dari Desa Deme 2 dengan katinting. Gak usah galau mikirin Ketinting, warga sekitar udah banyak yang menyiapkan jasa penyewaan Ketinting.',
            'telp' => '-',
            'latitude' => '0.9879035',
            'longitude' => '122.5219016',
            'itenerary' => '-',
            'includes' => '-',
            'harga' => '250000',
            'min_require' => 2,
        ]);

        \App\Tour::create([
            'nama_tour' => 'City Tour',
            'deskripsi' => 'Propinsi Gorontalo masih termasuk salah satu propinsi di Indonesia yang sangat muda, namun ternyata propinsi ini telah lebih terlebih dahulu merdeka yaitu sejak 23 Januari 1942.  Berkunjung ke Propinsi Gorontalo sangatlah berkesan terutama menikmati keindahan kota Gorontalo seperti menara limboto, bantahayo poboide, pendaratan soekarno, benteng otanahadan masing banyak lagi. siapapun yang berkunjung serasa sedang dimanjakan dengan keiindahan tempat-tempat wisata yang ada di Gorontalo.',
            'telp' => '-',
            'latitude' => '0.548922',
            'longitude' => '123.0050009',
            'itenerary' => '-',
            'includes' => '-',
            'harga' => '300000',
            'min_require' => 2,
        ]);

        \App\Tour::create([
            'nama_tour' => 'Air terjun lombongo',
            'deskripsi' => 'Air terjun lombongo merupakan Air terjun yang memiliki panorama dan keindahan yang lebih dibanding air terjun di mana pun.Air terjun itu terletak di Desa Lombongo, Kecamatan Suwawa, kabupaten Bone Bolango Provinsi Gorontalo. Air terjun itu berada di tengah kawasan hutan dan Taman Bogani Nani Wartabone.',
            'telp' => '-',
            'latitude' => '0.5490869',
            'longitude' => '123.184922',
            'itenerary' => '-',
            'includes' => '-',
            'harga' => '350000',
            'min_require' => 2,
        ]);

    }
}
