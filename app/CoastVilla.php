<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoastVilla extends Model
{
    protected $fillable = [
        'Description', 'Emirates', 'Date','title','type_villa',
        'confirmed','c_id','time','floors','bedrooms',
        'm_rooms','d_room','majlis','bathroom','s_room','price','halls'
    ];
}
