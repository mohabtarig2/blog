<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CompnayController extends Controller
{

    public function __construct()
    {

    }

    public function adualt()
    {
        return view('CustomAuth.index');
    }

    public function site()
    {
        return view('site');
    }

    public function admin()
    {
        return view('admin');
    }
    public function adminLogin()
    {
        return view('auth.adminLogin');
    }
    public function checkBussinessLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email'));
    }


}
