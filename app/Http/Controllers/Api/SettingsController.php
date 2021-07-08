<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class SettingsController extends Controller
{


    protected function ChangePassword(Request $request){
        $id =  $request->user()->id;
    $email =  $request->user()->email;
    $mypassword =  $request->user()->password;
    if (Auth::attempt(['email' => $email, 'password' => $request->password])) {
                if($request->npassword == $request->cpassword){
            $hpassword =  Hash::make($request->npassword);

            $user = User::find($id);

            User::where('id', $id)->update(array('password' => $hpassword));
            return 'success change password';
                }else{
                    return 'not match';
                }
            }else{
return ' You Password Not Corecct';
            }
    }
    public function CompanyProfile(Request $request){
        $id =  $request->user()->id;
        $user = User::with(['company' => function ($q) {

            $q->select('*');
        }])->find($id);
        return $user;
    }
}
