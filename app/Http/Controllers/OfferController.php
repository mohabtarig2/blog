<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use OfferTrait;
    public function create(){
return view("offersAjax.create");
    }
    
    public function store(OfferRequest $request){
        

       // $file_name = $this->saveImage($request->photo, 'images/offers');

        Offer::create([
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
            "price" => $request->price,
            "details_ar" => $request->details_ar,
            "details_en" => $request->details_en,
            //"photo" => $file_name

        ]);

        return redirect()->back()->with(['success' => 'لقد تم اضافة العرض بنجاح']);
    }
}
