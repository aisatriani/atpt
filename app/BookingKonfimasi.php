<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingKonfimasi extends Model
{
    protected $table = 'booking_konfimasi';
    protected $fillable = [
        'booking_id',
        'nama_pengirim',
        'gambar',
        'keterangan'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class,'booking_id');
    }

    public function getGambarAttribute($val)
    {
        return url('bukti') .'/'. $val;
    }
}
