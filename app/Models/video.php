<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\TimestampLastCombCodec;

class video extends Model
{
    //

 protected $table = "videos";
 protected $fillable = ['name','viewers'];
    public $timestamp = false;


}
