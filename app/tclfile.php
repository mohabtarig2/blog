<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tclfile extends Model
{
    protected $table = 'tcl_file';
    protected $fillable =['id','consl_id','extension','path','name','created_at','updated_at'];

}
