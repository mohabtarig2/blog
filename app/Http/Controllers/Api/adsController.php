<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\offer_villa_img;
use App\offerConsr;
use App\Toffers;
use App\Villa;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;




class adsController extends Controller
{

    public function countAllConsule(){

    $userid = Auth::id();



    $pending = Villa::where('c_id', '=', $userid)->where('confirmed', '=', 2)->get();
    $pendingCount = $pending->count();


    $active = Villa::where('c_id', '=', $userid)->where('confirmed', '=', 1)->get();
    $activeCount = $active->count();



    $Drafts= Villa::where('c_id', '=', $userid)->where('confirmed', '=', 0)->get();

    $DraftCount = $Drafts->count();
    $Offers =  Toffers::latest()->with('tender')->where('com_id',$userid)->get();


                foreach($Offers as $Offer){

                    $Offer->setAttribute('added_at',$Offer->created_at->diffForHumans());

                }




        return response()->json(['active'=>$activeCount,'pending'=>$pendingCount,'draft'=>$DraftCount,"latest"=>$Offers]);

            }

            public function countAllConstruction(){

                $userid = Auth::id();







                $Offers =  offerConsr::latest()->with('tender')->where('com_id',$userid)->get();


                            foreach($Offers as $Offer){

                                $Offer->setAttribute('added_at',$Offer->created_at->diffForHumans());

                            }



                    return response()->json($Offers);

          }

    public function store(Request $request)
    {

       $ruels = $this->getRules( $request);
       $messages = $this->getMessage($request);




       $valditor = Validator::make( $request->all(),$ruels,$messages);


       if($valditor->fails()){
           $errors =  response()->json(['errors' => $valditor->errors()],422);
           return $errors;
       }




       $offer =    Villa::create([
        "Emirates" => $request->Emirates,
        "Description" => $request->desc,
        "type_villa" => $request->villa,
        "title" => $request->title,
        "price" => $request->price,
        "floors" => $request->floors,
        "rooms" => $request->rooms,
        "Date" => now(),
        "time" => now(),
        "c_id" => Auth::id(),
        "confirmed" => 2,


    ]);



    if ($request->hasFile('images')) {
        $images = $request->file('images');

       foreach($images as $image){


           $file_extension = $image->getClientOriginalExtension();
       $file_name = time() . '.' . $file_extension;


       $file_name = 'amb_project_management_consulte' . time() . '_' . $image->getClientOriginalName();
       $file_extension = $image->getClientOriginalExtension();


       $file_path = $image->storeAs('consulting/offer', $file_name, 'public');

       $image->move(public_path('consulting/offer'), $file_name);





           offer_villa_img::create([
               "name" => $file_name,
               'path'=>$file_path,
               'img_villa_id'=>$offer->id,

           ]);

       }

   }

    return response()->json(['sueccess'=>'upload Successfuly','data'=>$offer],200);

    //return response()->json(['message'=>'تم رفع الصور بنجاح']);








    }

    protected function getRules(){


        return $ruels = [
            'Emirates'   => 'required',
            'desc' => 'required|min:100',
            'title'   => 'required|min:4',
            'villa' => 'required',
            'price' => 'required',
            'floors' => 'required',
            'rooms' => 'required',


        ];




    }

    protected function getMessage(){

        return  $messages =[
            'Emirates.required'=> __('Emirates is required'),
            'desc.required'=> __('Description is required'),
            'title.required'=> __('title  type is  required'),
            'villa.required'=> __('villa  type is  required'),
            'desc.min'=> __('Must Be 100 Charcter    '),
            'title.min'=> __('The title must be at least 4 characters'),

        ];
    }

    public function ads_user(Request $request)
    {

      $id =   Auth::id();
        $villas =  Villa::latest()->where('c_id',$id)->paginate(5);
            foreach($villas as $villa){
        $villa->setAttribute('added_at',$villa->created_at->diffForHumans());
            }

        return response()->json($villas);

    }

    public function adsdetails(Request $request){


        $id =   $request->id;
        $villas =  Villa::with('villaImage')->where('id',$id)->get();
        foreach($villas as $villa){
        $villa->setAttribute('added_at',$villa->created_at->diffForHumans());
        }


        return response()->json($villas);
    }

    public function showOffer(Request $request){



        $villa =  Villa::with('villaImage')->where('confirmed',1)->get();


        return response()->json($villa);
    }

    public function searchoffer($query){


            $posts = Villa::where('Emirates','like','%'.$query.'%')->with('villaImage');

            $nbposts =count($posts->get());

            foreach($posts->get() as $post){
                $post->setAttribute('added_at',$post->created_at->diffForHumans());

            }
            $posts = $posts->paginate(intval($nbposts));

            return response()->json($posts);




    }


}
