<?php 

namespace App\Http\Controllers;


class userControl extends Controller{
    public function showAdmin(){
        return 'Ahmed imam';
    }

    public function getIndex(){

        $data =[];
        $data['id']=2;
        $data['string']="ahmed";
/*
        $obj = new \stdClass();
        $obj ->name ="ahmed";
        $obj ->id =5;
        $obj ->gender ="male";
        return view('welcome',compact('obj'));
        */
        return view('welcome')->with('name','ahmed');
                                    /* var , value */
    }
}
