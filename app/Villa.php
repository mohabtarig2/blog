<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use App\offer_villa_img;

class Villa extends Model
{
    protected $fillable = [
        'Description', 'Emirates', 'Date','title','type_villa','confirmed','c_id','time','price','rooms','floors'
    ];




    public function villaImage(){

        return $this->hasMany('App\offer_villa_img','img_villa_id');

    }



}
