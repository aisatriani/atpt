<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'kaos_id',
        'tgl_order',
        'user_id',
        'metode_pembayaran_id',
        'konfirmasi',
        'status_order',
        'pesan'
    ];
}
