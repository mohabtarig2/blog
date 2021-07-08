<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tcimg extends Model
{
    protected $table ='tcimg';
    protected $fillable =['id','construction_id','extension','path','name','created_at','updated_at'];
}
