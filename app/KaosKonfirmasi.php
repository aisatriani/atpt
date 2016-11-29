<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaosKonfirmasi extends Model
{
    protected $table = 'kaos_konfirmasi';
    protected $fillable = [
        'order_id',
        'nama_pengirim',
        'gambar',
        'keterangan'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }

    public function getGambarAttribute($val)
    {
        return url('bukti') .'/'. $val;
    }
}
