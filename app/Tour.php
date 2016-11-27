<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Tour extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $table = 'tours';
    protected $fillable = [
        'nama_tour',
        'deskripsi',
        'telp',
        'latitude',
        'longitude',
        'itenerary',
        'includes',
        'harga'
    ];

    public $hidden = ['media'];

    public function images()
    {
        return $this->morphTo();
    }

    public function getIteneraryAttribute($val)
    {
        return json_decode($val);
    }

    public function getIncludesAttribute($val)
    {
        return json_decode($val);
    }
    public function getHargaFormatAttribute($val)
    {
        return 'Rp '. number_format($this->harga,0,',','.');
    }
}
