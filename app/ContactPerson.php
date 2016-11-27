<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    protected $table = 'contact_person';
    protected $fillable = [
        'user_id',
        'provinsi',
        'kabkota',
        'kecamatan',
        'alamat',
        'telp'
    ];
}
