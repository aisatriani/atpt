<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Gallery extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $table = 'image_tour';
    protected $fillable = [
        'img_name',
        'img_desc'
    ];


}
