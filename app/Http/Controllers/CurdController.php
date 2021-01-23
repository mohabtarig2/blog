<?php

namespace App\Http\Controllers;

use App\Events\VideoViewr;
use App\Models\video;

use App\Http\Requests\OfferRequest;
use App\Http\Requests\SignRequest;
use App\models\companies;
use App\Models\Offer;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




class CurdController extends Controller
{

    use OfferTrait;

    public function __construct()
    {
    }
    public function getOffers()
    {
        return Offer::select('id', 'name')->get();
    }


    public function rigesterBusiness(Request $request)
    {


//return $request;

        $ruels = $this->getRules();
        $messages = $this->getMessage();


        $valditor = Validator::make($request->all(),$ruels,$messages);

        if($valditor->fails()){
            return redirect()->back()->withErrors($valditor)->withInput($request->all());
        }




       companies::create([
            "company_en" => $request->company_en,
            "company_ar" => $request->company_ar,
            "manager_ar" => $request->manager_ar,
            "manager_en" => $request->manager_en,
            "email" => $request->email,
            "phone" => $request->phone,
            "mobile" => $request->mobile,
            "categories" => $request->categories,
            "password" => Hash::make($request['password']),
            "emirates" => $request->emirates,
            "date_create" => $request->date


        ]);


        return redirect()->back()->with('message', 'You Register Now');


    }

    protected function getRules(){


        return $ruels = [
            'company_en' => 'required|max:100|unique:companies,company_en',
            'company_ar' => 'required|max:100|unique:companies,company_ar',
            'manager_ar' => 'required|max:100|unique:companies,manager_ar',
            'manager_en' => 'required|max:100|unique:companies,manager_en',
            'email' => 'required|max:100|unique:companies,email|unique:users,email',
            'phone' => 'required|numeric',
            'mobile' => 'required|numeric',
            'categories' => 'required|numeric',
            'emirates' => 'required|numeric',
            'password' => 'required',
            'date' => 'required',



        ];




    }

    protected function getMessage(){

        return  $messages =[
            'company_en.required'=> __('messages.offer name required'),
            'company_ar.required'=> __('messages.offer name required'),
            'company_en.unique'=> __('messages.offer name unique'),
            'company_ar.unique'=> __('messages.offer name unique'),
            'manager_ar.required'=> __('messages.offer name required'),
            'manager_en.required'=> __('messages.offer name required'),
            'manager_ar.unique'=> __('messages.offer name unique'),
            'manager_en.unique'=> __('messages.offer name unique'),
            'date.required'=>__('messages.offer price required'),
            'phone.numeric'=>__('messages.offer price numeric'),
            'mobile.numeric'=>__('messages.offer price numeric'),
            'categories.required'=>__('messages.offer details required'),
            'emirates.required'=>__('messages.offer details required'),
        ];
    }


    public function store(OfferRequest $request)
    {

        return $request;




        $file_name = $this->saveImage($request->photo, 'images/offers');

        Offer::create([
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
            "price" => $request->price,
            "details_ar" => $request->details_ar,
            "details_en" => $request->details_en,
            "photo" => $file_name

        ]);

        return redirect()->back()->with(['success' => 'لقد تم اضافة العرض بنجاح']);

    }


    public function create()
    {

        return view('offers.create');
    }

    public function bussines()
    {

        return view('bussines');
    }


    public function getAllOffer()
    {
        $offers = Offer::select(
            'id',
            'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
            'price',
            'photo',
            'details_' . LaravelLocalization::getCurrentLocale() . ' as details'
        )->get();

        return view("offers.all", compact('offers'));
    }

    public function editOffer($offer_id)
    {

        $offer = Offer::find($offer_id);
        if (!$offer)
            return redirect()->back();

        $offer = Offer::select('id', 'name_ar', 'name_en', 'details_ar', 'details_en', 'price','photo')->find($offer_id);

        return view('offers.edit', compact("offer"));
        return $offer_id;
    }

    public function updateOffer(OfferRequest $request, $offer_id)
    {
        $offer = Offer::find($offer_id);
        if (!$offer)
            return redirect()->back();

        $offer->update($request->all());
        return redirect()->back()->with(['success' => 'لقد تم تحديث العرض بنجاح']);
    }


    public function delete($offer_id)
    {
        $offer = Offer::find($offer_id);
        if(!$offer)
        return redirect()->back()->with(['error'=>__('message.offer not exist')]);

        $offer->delete();

        return redirect()
        ->route("offers.All")
        ->with(['success'=>__('message.offer Delete Succesfuly')]);

    }

    public function getVideo()
    {
        $video = video::first();
        event(new VideoViewr($video));
        return view('video')->with('video', $video);
    }
}
