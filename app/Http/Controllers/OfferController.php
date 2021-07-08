<?php

namespace App\Http\Controllers;

use App\Console\Commands\notify;
use App\Events\NewComment;
use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Notifications\Notyifyowner;
use App\tclfile;
use App\Tconsulte;
use App\Toffers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



use Illuminate\Http\Response;


class OfferController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cons_offer(Request $request)
    {


        $id = Auth::id();
        $tender_id =  $request->tender_id;

        $Toffers =  Toffers::where('tender_id', $tender_id)->where('com_id', $id);

        if ($Toffers->count() > 0) {
            return response()->json(["already" => 'Alreay have Offer You Dont have to put again']);
        } else {

            $ruels = $this->getRules();
            $messages = $this->getMessage();


            $validator = Validator::make($request->all(), $ruels, $messages);


            if ($validator->fails()) {

                return response()->json(['errors' => $validator->errors()], 422);
            }



            $fileUpload = new Toffers();


            $fileUpload->com_id = Auth::id();
            $fileUpload->budget = $request->budget;
            $fileUpload->item = $request->item;
            $fileUpload->comment = $request->notes;
            $fileUpload->design = $request->design;
            $fileUpload->Supervisor = $request->Supervisor;
            $fileUpload->tender_id = $request->tender_id;
            $fileUpload->TotalAreaBuild = $request->tab;
            $fileUpload->save();





            $message = "This Notificaation is ready";
            $user = User::find(Auth::id());
            $tender_id = $request->tender_id;


            broadcast(new NewComment($message, $user, $tender_id))->toOthers();
            $tender = Tconsulte::with('user')->find($fileUpload->tender_id);
            $tender_owner = $tender->user;


            if ($tender_owner->id != $fileUpload->com_id) {
                $tender_owner->notify(new Notyifyowner($fileUpload, $tender));
            }




            if ($request->hasFile('images')) {
                $images = $request->file('images');

                $commnets= Toffers::where('tender_id',$fileUpload->tender_id )->with('user')->get();

                foreach($images as $image){

                    $file_name = 'amb_project_management_consulte' . time() . '_' . $image->getClientOriginalName();
                    $file_extension = $image->getClientOriginalExtension();


                    $file_path = $image->storeAs('consulting/image', $file_name, 'public');

                    $image->move(public_path('consulting/image'), $file_name);


                    $commnet =  tclfile::create([
                        "name" => $file_name,
                        "path" => '/' . $file_path,
                        "consl_id" => $fileUpload->id,
                        "extension" => $file_extension



                    ]);

                    // foreach($commnets as $com){
                    //     $com->setAttribute('Commented_at',$commnet->created_at->diffForHumans());
                    //     $com->setAttribute('ImageComments',$commnet);
                    // }


                }


                $commnets= Toffers::where('tender_id',$fileUpload->tender_id)->with('user')->get();
                foreach($commnets as $comment){


                    $tcfiles= tclfile::where('consl_id',$comment->id)->get();



                   // $tender->setAttribute('Commenter',Toffers::where('tender_id',$id)->with('user')->get());
                    $comment->setAttribute('Commented_at',$comment->created_at->diffForHumans());
                    $comment->setAttribute('ImageComments',$tcfiles);
                }

                $id = Auth::id();
                $tender_id = $request->tender_id;

                $CommentTender = Toffers::where('tender_id',$tender_id)->where('com_id',$id);
                $count = $CommentTender->count();



                $AllOffers = Toffers::all()->where('tender_id',$id);
        $countOffers = $AllOffers->count();



                $fileUpload->setAttribute('comments',$commnets);
                $fileUpload->setAttribute('tender',$tender);
                $fileUpload->setAttribute('AllOffers',$countOffers);
                $fileUpload->setAttribute('added_at',$fileUpload->created_at->diffForHumans());
                $fileUpload->setAttribute('UserisOffer',$count);

                // $message = "This Notificaation is ready";
                //$user = User::find(Auth::id());
                //  $tender_id = $request->tender_id;

                //broadcast(new NewComment($message,$user,$tender_id));




                return response()->json($fileUpload);
            }
        }
    }
    public function Myoffer(Request $request)
    {


        $id = $request->id;
        $tenders = Tconsulte::where('id',$id)->with('user')->get();


        $commnets= Toffers::where('tender_id',$id)->with('user')->get();

        $count =  $commnets->count();

        $uid = Auth::id();
        $tender_id = $request->id;

        $CommentTender = Toffers::where('tender_id',$tender_id)->where('com_id',$uid);
        $count = $CommentTender->count();


        $AllOffers = Toffers::all()->where('tender_id',$id);
        $countOffers = $AllOffers->count();

        foreach($tenders as $tender){


                foreach($commnets as $comment){


                    $tcfiles= tclfile::where('consl_id',$comment->id)->get();



                   // $tender->setAttribute('Commenter',Toffers::where('tender_id',$id)->with('user')->get());
                    $comment->setAttribute('Commented_at',$comment->created_at->diffForHumans());
                    $comment->setAttribute('ImageComments',$tcfiles);
                }

                $tender->setAttribute('comments',$commnets);
                $tender->setAttribute('UserisOffer',$count);
                $tender->setAttribute('AllOffers',$countOffers);
                 $tender->setAttribute('added_at',$tender->created_at->diffForHumans());

        }

        return response()->json($tenders);
    }
    protected function getRules()
    {


        return $ruels = [
            'notes' => 'required|min:100',
            'item' => 'required|min:100',
            'tab' => 'required|min:5',
            'budget' => 'required|min:5',
            'design' => 'required|min:5',
            'Supervisor' => 'required|min:5',



        ];
    }

    protected function getMessage()
    {

        return  $messages = [
            'notes.required' => 'Your Offer Is required',
            'notes.min' => __('notes Not less Than 100 Charcter'),
            'budget.min' => __('minimum  5 numbers'),
            'item.min' => __('item Not less Than 100 Charcter'),
            'design.min' => __('minimum  5 numbers'),
            'Supervisor.min' => __('minimum  5 numbers'),

            'item.required' => __('items name required'),
            'budget.required' => __('budget is required'),
            'design.required' => __('design is required'),
            'Supervisor.required' => __('Supervisor is required'),
            'tab.required' => __('total area build is required'),


        ];
    }
}
