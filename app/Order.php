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
        'warna',
        'size',
        'konfirmasi',
        'status_order',
        'pesan'
    ];

    public function kaos()
    {
        return $this->belongsTo(Kaos::class, 'kaos_id');
    }

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class,'metode_pembayaran_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
