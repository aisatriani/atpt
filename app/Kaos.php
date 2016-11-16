<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Kaos extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $table = 'kaos';
    protected $fillable = [
        'nama_kaos',
        'ukuran',
        'bahan',
        'sablon',
        'warna',
        'harga',
        'stok'
    ];

    public $hidden = ['media'];
}
