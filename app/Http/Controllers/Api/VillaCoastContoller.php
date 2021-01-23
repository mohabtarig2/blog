<?php


namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\CoastVilla;
use Illuminate\Http\Request;

class VillaCoastContoller extends Controller
{
    public function store(Request $request)
    {

        //$pathTofile = $request->file('imageAds')->store('images/offers','public');

        //return $pathTofile;



        //return $file_name;
       // $pathTofile = $request->file('image')



         CoastVilla::create([
            "Emirates" => $request->Emirates,
            "Description" => $request->desc,
            "type_villa" => $request->villa,
            "title" => $request->title,
            "Date" => now(),
            "time" => now(),
            "c_id" => 1,
            "confirmed" => 0,
            "floors" => $request->floors,
            "bedrooms" => $request->bedrooms,
            "m_rooms" => $request->m_rooms,
            "halls" => $request->halls,
            "bathroom" => $request->bathroom,
            "s_room" => $request->s_room,
            "majlis" => $request->majles,
            "price" => $request->s_room,

        ]);

        return 'success';




    }
}
