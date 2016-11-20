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
}
