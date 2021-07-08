<?php

namespace App\Http\Controllers;

use App\cons_offer_image;
use App\Events\commentConsr;
use App\offerConsr;
use App\tcimg;
use App\Tconstr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Return_;

class constructionController extends Controller
{
    public function tender(Request $request){


        $ruels = $this->getRules( $request);
        $messages = $this->getMessage($request);


        $valditor = Validator::make( $request->all(),$ruels,$messages);


        if($valditor->fails()){
            $errors =  response()->json(['errors' => $valditor->errors()],422);
            return $errors;
        }

            //$pathTofile = $request->file('imageAds')->store('images/offers','public');

            //return $pathTofile;
       // return $request->all();

          $Constr =    Tconstr::create([
                'title'=>$request->title,
                'notes'=>$request->notes,
                'emirates'=>$request->emirates,
                'user_id'=>Auth::id(),
            ]);
           $tender_id =   $Constr->id;

          // if($Constr->count() > 0){



            if($request->hasFile('images')){
                $images = $request->file('images');
                foreach($images as $image){

                    $file_name = 'amb_project_management'.time().'_'.$image->getClientOriginalName();
                    $file_extension = $image->getClientOriginalExtension();
                    $names = $file_name;






                if($file_extension=='jpg' || $file_extension=='png  '){
                    $file_path = $image->storeAs('Construction/image', $file_name, 'public');

                                $image->move(public_path('Construction/image'), $file_name);
                }elseif($file_extension=='xlsx'){
                    $file_path = $image->storeAs('Construction/Excel', $file_name, 'public');

                    $image->move(public_path('Construction/Excel'), $file_name);
                }
                elseif($file_extension=='dwg'){
                    $file_path = $image->storeAs('Construction/autocad', $file_name, 'public');

                    $image->move(public_path('Construction/autocad'), $file_name);
                }
                elseif($file_extension=='pdf'){
                    $file_path = $image->storeAs('Construction/pdf', $file_name, 'public');

                    $image->move(public_path('Construction/pdf'), $file_name);
                }
                tcimg::create([
                    "name" => $file_name,
                    "path" =>'/storage/' . $file_path,
                    "construction_id" =>$tender_id,
                    "extension" =>$file_extension


                ]);





            }


            return $tender_id;







        }else{
            return 'you dont have files';
        }


        //return response()->json(['message'=>'تم رفع الصور بنجاح']);


    }
    protected function getRules(){


        return $ruels = [


        'emirates' => 'required|integer',
        'images' => 'require',
        'notes' => 'required|string|min:100',
        'title' => 'required|string|min:4',


        ];


    }

    protected function getMessage(){

        return  $messages =[
            'emirates.required'=> __('The emirates is Required'),
            'images.required'=> __('You Have to Upload Some Files '),
            'notes.max'=> __('Notes Must be 100 charcter At least '),
            'notes.required'=> __('The Notes Is required '),
            'title.required'=> __('Title Is Reqiured '),
            'title.min'=> __('Title  Must be 4 charcter At least'),

        ];


}

  public function ShowTenders(Request $request){
       $tenderid =  $request->id;

        $tenders = Tconstr::where('id',$tenderid)->with('tcimg')->with('offerConsr')->get();
        foreach($tenders as $tender){
            $tender->setAttribute('added_at',$tender->updated_at->diffForHumans());
            }

        return response()->json($tenders) ;


    }
    public function UpdateTenderConstruction(Request $request){

        $ruels = $this->getRules( $request);
        $messages = $this->getMessage($request);


        $valditor = Validator::make( $request->all(),$ruels,$messages);


        if($valditor->fails()){
            $errors =  response()->json(['errors' => $valditor->errors()],422);
            return $errors;
        }


            $posts = Tconstr::find($request->id);
            $posts->title = $request->title;
            $posts->notes = $request->notes;
            $posts->emirates = $request->emirates;
            $posts->status = 0;
            $posts ->save();


                $posts->setAttribute('added_at',$posts->updated_at->diffForHumans());

            return response()->json($posts);

    }



    public function AllTenderConsr(){


        $tenders = Tconstr::latest()->where('status',1)->paginate(5);;
        foreach($tenders as $tender){
            $offer = offerconsr::where('construction_id',$tender->id)->get();

            $tender->setAttribute('added_at',$tender->updated_at->diffForHumans());
            $tender->setAttribute('count',$offer->count());
            }

        return response()->json(['data'=>$tenders]) ;
    }





    public function insertOffer(Request $request){




        $ruels = $this->getRulesOffer( $request);
        $messages = $this->getMessageOffer($request);


        $valditor = Validator::make( $request->all(),$ruels,$messages);


        if($valditor->fails()){
            $errors =  response()->json(['errors' => $valditor->errors()],422);
            return $errors;
        }




        $offer_consr =    offerConsr::create([
            'textOffer'=>$request->textOffer,
            'com_id'=>Auth::id(),
            'construction_id'=>$request->construction_id,
        ]);

        $add_at = $offer_consr->created_at->diffForHumans();
        if($request->hasFile('images')){





            $comment_id =$offer_consr->id;


            $images = $request->file('images');
            foreach($images as $image){

                $file_name = 'amb_project_management'.time().'_'.$image->getClientOriginalName();
                $file_extension = $image->getClientOriginalExtension();
                $names = $file_name;







                $file_path = $image->storeAs('Construction/offer/image', $file_name, 'public');

                            $image->move(public_path('Construction/offer/image'), $file_name);


            cons_offer_image::create([
                "name" => $file_name,
                "path" => $file_path,
                "comment_id" =>$comment_id,
                "extension" =>$file_extension


            ]);


        }



    }
    broadcast(new commentConsr($offer_consr->user,$offer_consr,$add_at));

    return response()->json('added offer successfuly') ;






    }


    protected function getRulesOffer(){


        return $ruels = [


        'textOffer' => 'required|min:100',
        'com_id' =>'unique:offerConsr',
        //  'images' => 'required | mimes:jpeg,jpg,png | max:1000',



        ];


    }

    protected function getMessageOffer(){

        return  $messages =[
            'textOffer.required'=> __('Your Details Nots Is Required '),
            'com_id.unique'=> __('You cant put offer more than one '),
            'images.min'=> __('at least 100 characters '),


        ];


}
}




