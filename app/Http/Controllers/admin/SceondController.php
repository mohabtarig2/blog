<?php

namespace App\Http\Controllers\admin;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SceondController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showmessage2');
    }
    public function showmessage2(){
        return'im showmessage2';
    }
    public function showmessage3(){
        return'im showmessage3';
    }
}
