<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tconsulte extends Model
{
    protected $table = 'tconsult';

    protected $fillable = [
        'id', 'villa_type','floors','title','bedroom',
        'room_mastar','living_room',
        'majlis','kitchens','dining_room',
        'bathroom','position','min','max',
        'emirats','note','status','user_id','created_at'
    ];


    public function AllOffers(){

        return $this->hasMany('App\Toffers','tender_id');
    }
    public function Toffer(){
        return $this->hasMany(Toffers::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }

    public function getDateEndAttribute($value){

          $end = new Carbon($value);
            return $end->diffForHumans();
        }

}
