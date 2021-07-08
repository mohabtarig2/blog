<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\models\companies;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class BRegisterController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function bcreate(Request $data)
    {


        $ruels = $this->getRules($data);
        $messages = $this->getMessage($data);


        $valditor = Validator::make($data->all(),$ruels,$messages);

        if($valditor->fails()){
            $errors =  response()->json(['errors' => $valditor->errors()], 401);
            return $errors;
        }



        return User::create([
            'name' => $data->name,
            'email' => $data->email,
            'mobile' => $data->mobile,
            'role_id' => $data->Categories,
            'password' => Hash::make($data->password),
        ]);



    }

    protected function getRules(){


        return $ruels = [
            'name' => 'required|string|max:255',
        'mobile' => 'required|string|max:255|unique:users|digits:10',
        'email' => 'required|string|email|max:255|unique:users',
        'password' =>'required|string|min:8|confirmed',
        'Categories' => 'required|integer',


        ];




    }

    protected function getMessage(){

        return  $messages =[
            'name.required'=> __(' name required'),
            'mobile.required'=> __(' mobile required'),
            'mobile.regex'=> __(' mobile Number'),
            'email.unique'=> __('messages.offer name unique'),
            'password.required'=> __('password name riqured'),
            'Categories.required'=> __('Categories is required'),
          //  'password.regex'=>_(' uppercase characters (A – Z)  lowercase characters (a – z) - Base 10 digits (0 – 9)')


        ];
    }


}
