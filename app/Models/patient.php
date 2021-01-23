<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = ['name','title ','hospital_id','create_at','update_at'];
    protected $hidden = ['created_at','updated_at'];

}
