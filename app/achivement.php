<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class achivement extends Model
{
    protected $table = 'achivement';
    protected $fillable = ['id', 'name', 'path','user_id','created_at','updated_at'];
}
