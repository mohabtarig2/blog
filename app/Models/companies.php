<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class companies extends Model implements AuthenticatableContract {

    use Authenticatable;

    protected $table = "companies";
    protected $fillable = ['company_ar','phone','company_en','manager_ar','manager_en','mobile','email','about_us','emirates','password','date_create','emirates','user_id'];
       public $timestamp = false;

}
