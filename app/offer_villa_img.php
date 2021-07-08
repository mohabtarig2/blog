<?php

namespace App;

use App\Villa;
use Illuminate\Database\Eloquent\Model;

class offer_villa_img extends Model
{
    protected $table = "offer_villa_img";
    protected $fillable = ['id','img_villa_id','name','path'];

  public function Villa_offer()
{
    return $this->belongsTo('App\Villa');
}
}
