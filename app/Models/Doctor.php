<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name','title ','hospital_id','create_at','update_at'];
    protected $hidden = ['created_at','updated_at'];


    public function hospital(){
        return $this -> belongsTo('App\Models\Hospital','hospital_id','id');
    }

    public function services() {
        return $this->belongsToMany('App\Models\services','doctor_services','doctor_id','service_id','id','id');
    }

}
