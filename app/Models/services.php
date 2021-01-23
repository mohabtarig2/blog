<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{

    protected $table = "services";
    protected $fillable = ['id','name','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;

    public function doctors() {
        return $this->belongsToMany('App\Models\Doctor','doctor_services','doctor_id','service_id','id','id');
    }

}
