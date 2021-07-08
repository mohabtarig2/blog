<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    //



    public function getUnreadNotificatons(){

       $notification = Auth::user()->unreadNotifications ;
       return response()->json($notification);
    }


    public function getLastTenNotifications(){
        $notification = Auth::user()->notifications;
        return response()->json($notification);
    }

    public function getAllNotificatons(){
        $notification = Auth::user()->notifications;
        return response()->json($notification);
    }
    public function NotificatonsMarkAsRead(Request $request){
        $notification = Auth::user()->notifications->where('id',$request->id)->first();
        $notification->markAsRead();
        return response()->json(['msg'=>"ok"]);


    }

    public function index(Request $request)
    {

        $credentaials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];


    if(Auth::attempt( $credentaials)){
        $token = auth::user()->createToken('my-app-token')->accessToken;

        return response()->json(['token'=>$token],200);
    }else{
        return response()->json(['erorr'=>'Not Allowd'],401);
    }
    }
}
