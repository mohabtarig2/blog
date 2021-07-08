<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\models\companies;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CompnayController extends Controller
{

    public function __construct()
    {

    }

    public function getData(){

        $userid = Auth::id();
         return companies::get()->where('user_id',$userid);


    }

    public function savedatacompany(Request $request){

        $ruels = $this->getRules( $request);
        $messages = $this->getMessage($request);



        $valditor = Validator::make( $request->all(),$ruels,$messages);


        if($valditor->fails()){
            $errors =  response()->json(['errors' => $valditor->errors()],422);
            return $errors;
        }else{

        $companies = companies::find($request->id);

        $companies->company_ar = $request->company_ar;
        $companies->company_en = $request->company_en;
        $companies->manager_en = $request->manager_en;
        $companies->manager_ar= $request->manager_ar;
        $companies->about_us= $request->about_us;

       // $companies->status = 0;
        $companies ->save();


        return response()->json(['success'=>'You Update Succesffuly' ,'Com'=>$companies]);


        }

    }
    protected function getRules(){


        return $ruels = [



        'company_ar' => 'required|min:4',
        'company_en' => 'required|string|min:4',
        'about_us' => 'required|string|min:100',
        'manager_ar' =>'required|min:4|string',
        'manager_en' => 'required|min:4|string',


        ];




    }

    protected function getMessage(){

        return  $messages =[
            'company_ar.required'=> __('Company name (arabic) Is Required'),
            'company_ar.min'=> __('Company name (arabic) must be great than 4'),
            'company_en.required'=> __('Company name (english) Is Required'),
            'company_en.min'=> __('Company name (english) must be great than 4'),
            'manager_ar.required'=> __('manager name (arabic) Is Required'),
            'manager_ar.min'=> __('manager name (arabic) must be great than 4'),
            'manager_en.required'=> __('Company name (english) Is Required'),
            'manager_en.min'=> __('Company name (english) must be great than 4'),
            'about_us.max'=> __('about us chracter not less than  100'),



        ];

    }




}
