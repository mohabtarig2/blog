<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cons_offer_image extends Model
{
    protected $table ="cons_offer_image";

    protected $fillable = ['id','comment_id','created_at','updated_at','name','extension','path'];
}
