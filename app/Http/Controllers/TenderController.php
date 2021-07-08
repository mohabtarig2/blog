<?php

namespace App\Http\Controllers;

use App\Events\NewTender;
use App\Notifications\NotiTenders;
use App\tclfile;
use App\Tconstr;
use App\Tconsulte;
use App\Toffers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;

class TenderController extends Controller
{



        public function insert_consl(Request $request){



            $ruels = $this->getRules( $request);
            $messages = $this->getMessage($request);



            $valditor = Validator::make( $request->all(),$ruels,$messages);


            if($valditor->fails()){
                $errors =  response()->json(['errors' => $valditor->errors()],422);
                return $errors;
            }





           $tender =  Tconsulte::create([
                'villa_type' => $request->villa_type,
                'position' => $request->position,
                'min' => $request->min,
                'max' => $request->max,
                'room_mastar' => $request->mastar_room,
                'majlis' => $request->majlis,
                'living_room' => $request->living_room,
                'kitchens' => $request->max,
                'floors' => $request->floor,
                'emirats' => $request->emirates,
                'bathroom' => $request->bathroom,
                'dining_room' =>$request->dining_room,
                'note' => $request->Notes,
                'title' => $request->title,
                'bedroom' => $request->bedroom,
                'user_id' => $request->user()->id

            ]);

        $tender_id = Tconsulte::select('id')->latest()->where('user_id',auth::id())->get();
        $user = User::find(Auth::id());
        $admins = User::where('role_id',11)->get();
        $tenders = Tconsulte::with('user')->find($tender_id);



        $tenders_owner = $user;







            broadcast(new NewTender($user,$tender,$admins))->toOthers();



            //Notification::send($admins, new NotiTenders($tender));
            //$admins->notify(new NotiTenders($tender));

            return response()->json($tender->id);



        }

        protected function getRules(){


            return $ruels = [



            'title' => 'required|min:4',
            'emirates' => 'required|integer',
            'villa_type' => 'required|string',
            'position' => 'required|string',
            'mastar_room' => 'required|integer',
            'min' => 'required|integer',
            'max' => 'required|integer',
            'living_room' => 'required|integer',
            'majlis' => 'required|integer',
            'kitchens' => 'required|integer',
            'dining_room' => 'required|integer',
            'floor' => 'required|integer',
            'bathroom' => 'required|integer',
            'bedroom'=>'required|integer',
            'Notes' => 'required|min:100',


            ];




        }

        protected function getMessage(){

            return  $messages =[
                'Notes.required'=> __('The Notes Is Required'),
                'title.required'=> __('The title Is Required'),
                'title.max'=> __('The title must Be at least 4 charcter'),
                'Notes.max'=> __('The Notes must Be at least 100 charcter'),
                'position.required'=> __('The position must Be at least 100 charcter'),
                'mastar_room.required'=> __(' The Mastar room is required'),


            ];


}
            public function AllMyCtender(Request $request)
            {
                $id = $request->user()->id;
                $tender = Tconsulte::select('id','title','note','status','created_at')->with('AllOffers')->where('user_id',$id)->get();

                $tenderConstr = Tconstr::latest()->with('Tcimg')->where('user_id',$id)->get();



                return response()->json(['consulte'=> $tender,'consr'=>$tenderConstr]);


            }

            public function CountCtender(Request $request)
            {
                $id = $request->user()->id;
                $tender = Tconsulte::all()->where('user_id',$id);
                $count = $tender->count();

                return $count;
            }
            public function ctender(Request $request)
            {




                $id = $request->id;
        $tenders = Tconsulte::where('id',$id)->with('user')->get();


        $commnets= Toffers::where('tender_id',$id)->with('user')->get();





        foreach($tenders as $tender){


                foreach($commnets as $comment){


                    $tcfiles= tclfile::where('consl_id',$comment->id)->get();



                   // $tender->setAttribute('Commenter',Toffers::where('tender_id',$id)->with('user')->get());
                    $comment->setAttribute('Commented_at',$comment->created_at->diffForHumans());
                    $comment->setAttribute('ImageComments',$tcfiles);
                }

                $tender->setAttribute('comments',$commnets);
                 $tender->setAttribute('added_at',$tender->created_at->diffForHumans());

        }

        return response()->json($tenders);
            }


            public function commentctender(Request $request)
            {

                $tender_id = $request->id;


                $CommentTender = Toffers::get()->where('tender_id',$tender_id);




                return response()->json($CommentTender);
            }



            public function CountcComment(Request $request)
            {

                $tender_id = $request->id;

                $CommentTender = Toffers::all()->where('tender_id',$tender_id);
                $count = $CommentTender->count();



                return response()->json($count);
            }
            public function MyofferIsset(Request $request)
            {

                $id = Auth::id();
                $tender_id = $request->id;

                $CommentTender = Toffers::where('tender_id',$tender_id)->where('com_id',$id);
                $count = $CommentTender->count();



                return response()->json($count);
            }
            public function AllTenderConsulte()
            {
                $tenders = Tconsulte::latest()->where('status',1)->paginate(5);

                foreach($tenders as $tender){
                   $uid =  $tender->id;
                    $offer = Toffers::where('tender_id',$uid)->get();

                    $tender->setAttribute('count',$offer->count());
                    $tender->setAttribute('added_at',$tender->created_at->diffForHumans());
                }
                return response()->json($tenders);

            }

        }

