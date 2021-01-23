<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Villa;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adsController extends Controller
{
    public function store(Request $request)
    {

        //$pathTofile = $request->file('imageAds')->store('images/offers','public');

        //return $pathTofile;



        //return $file_name;
       // $pathTofile = $request->file('image')

         Villa::create([
            "Emirates" => $request->Emirates,
            "Description" => $request->desc,
            "type_villa" => $request->villa,
            "title" => $request->title,
            "Date" => now(),
            "time" => now(),
            "c_id" => 1,
            "confirmed" => 0,

        ]);

        return 'success';




    }

    protected function getRules(){


        return $ruels = [
            'Emirates'   => 'required|text',
            'Description' => 'required|min:100',
            'title'   => 'required|text',
            'Description' => 'required|min:100'
        ];




    }

    protected function getMessage(){

        return  $messages =[
            'Emirates.required'=> __('messages.offer name required'),
            'Description.required'=> __('messages.offer name required'),
            'company_en.unique'=> __('messages.offer name unique'),
            'title.unique'=> __('messages.offer name unique'),
            'Description.required'=> __('messages.offer name required'),
        ];
    }

    public function delete(Request $request,$id)
    {
        $villa = Villa::find($id);
        $villa->delete();
    }


}
