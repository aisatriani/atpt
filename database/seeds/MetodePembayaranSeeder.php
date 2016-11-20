<?php

use Illuminate\Database\Seeder;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MetodePembayaran::create([
            'nama_metode' => 'Loket Pembayaran',
            'desc' => 'Pembayaran hanya dapat dilakukan di loket/kantor atupato',
            'no_rek' => '-'
        ]);

        \App\MetodePembayaran::create([
            'nama_metode' => 'Bayar di tempat',
            'desc' => 'Pembarayan dilakukan di tempat saat pengantaran barang',
            'no_rek' => '-'
        ]);

        \App\MetodePembayaran::create([
            'nama_metode' => 'Bank Transfer Mandiri',
            'desc' => 'Pembayaran dapat dilakukan melalui ATM/Teller bank BRI',
            'no_rek' => '1234 234 1342'
        ]);
        \App\MetodePembayaran::create([
            'nama_metode' => 'Bank Transfer BCA',
            'desc' => 'Pembayaran dapat dilakukan melalui ATM/Teller bank BRI',
            'no_rek' => '234 2435 12312'
        ]);
    }
}
