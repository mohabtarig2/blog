<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    protected $fillable = [
        'Description', 'Emirates', 'Date','title','type_villa','confirmed','c_id','time'
    ];
}
