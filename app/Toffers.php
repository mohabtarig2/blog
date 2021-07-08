<?php

namespace App;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Model;

class Toffers extends Model
{
    protected $table = "toffers";

    protected $fillble = ['id','com_id','tender_id','comment','Supervisor','design','created_at','updated_at','name','path','item','budget','TotalAreaBuild'];



    public function user(){
        return $this->belongsTo('App\user','com_id');
    }
    public function images(){
        return $this->hasMany('App\tclfile','consl_id');
    }

    public function tender(){
        return $this->belongsTo('App\Tconsulte','tender_id');
    }


}
