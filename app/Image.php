<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageTour extends Model
{
    protected $table = 'image_tour';
    protected $fillable = [
        'img_name',
        'img_desc',
        'tour_id'
    ];

    public function tour()
    {
        return $this->belongsTo('tour','tour_id');
    }
}
