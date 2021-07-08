<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tconstr extends Model
{
    protected $table = 'Tconstr';
    protected $fillable = ['id','created_at','updated_at','title','notes','emirates','user_id'];




    public function Tcimg(){

        return $this->hasMany('App\tcimg','construction_id');
    }

    public function user(){
        return $this->belongsTo(user::class);
    }


    public function offerConsr(){

        return $this->hasMany('App\offerConsr','construction_id');
    }

}

