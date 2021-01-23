<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = "companies";
    protected $fillable = ['company_ar','phone','company_en','manager_ar','manager_en','mobile','email','categories','emirates','password','date_create','emirates'];
       public $timestamp = false;

}
