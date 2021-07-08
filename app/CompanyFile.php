<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyFile extends Model
{
    protected $table = 'CompanyFiles';
    protected $fillable = ['id', 'name', 'path','user_id','created_at','updated_at'];





}
