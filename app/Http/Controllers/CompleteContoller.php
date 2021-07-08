<?php

namespace App\Http\Controllers;

use App\models\companies;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CompleteContoller extends Controller
{


    public function complete(Request $request)
    {




  $ruels = $this->getRules($request);
        $messages = $this->getMessage($request);


        $valditor = Validator::make($request->all(),$ruels,$messages);

        if($valditor->fails()){

            $errors =  response()->json(['error' => $valditor->errors()], 401);
            return $errors;

        }



        return companies::create([
            'about_us' => $request->about,
            'phone' => $request->phone,
            'emirates' => $request->emirates,
            'date_create' => $request->date_create,
            'manager_ar' => $request->manger_ar,
            'manager_en' => $request->manger_en,
            'company_ar' => $request->Company_ar,
            'company_en' => $request->Company_en,
            'user_id' => $request->user()->id,

        ]);



    }

    protected function getRules(){


        return $ruels = [
            'about' => 'required|string|min:100',
        'phone' => 'required|string|max:10|unique:companies',
        'date_create' =>'required|date',
        'emirates' => 'required|integer',
        'manger_ar' => 'required|string',
        'manger_en' => 'required|string',
        'Company_ar' => 'required|string',
        'Company_en' => 'required|string',




        ];




    }

    protected function getMessage(){

        return  $messages =[
            'about.required'=> __(' About us Is Required'),
            'phone.required'=> __(' Number Is required'),
            'date_create.required'=> __(' date Is required'),
            'emirates.required'=> __(' emirates Is required'),
            'manger_ar.required'=> __(' mange name ar Is required'),
            'manger_en.required'=> __(' mange name en Is required'),
            'Company_ar.required'=> __(' Number Is required'),
            'Company_en.required'=> __(' Number Is required'),


        ];
    }

}
