<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'tour_id',
        'tgl_booking',
        'adult',
        'metode_pembayaran_id',
        'user_id',
        'konfirmasi',
        'status_pembayaran'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class,'tour_id');
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
