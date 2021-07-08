<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offerConsr extends Model
{
    protected $table='offerConsr';
    protected $fillable=['id','textOffer','created_at','updated_at','com_id','construction_id'];


    public function tender(){
      return   $this->belongsTo('App\Tconstr','construction_id');
    }

    public function user(){
        return   $this->belongsTo('App\User','com_id');
      }
}
