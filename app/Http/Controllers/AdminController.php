<?php

namespace App\Http\Controllers;

use App\Events\AcceptTender;
use App\Notifications\notifyAcceptTenders;
use App\Tconstr;
use App\Tconsulte;
use App\Toffers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function countAll(){
//users
//tenders
//company
/*

  <span class="badge badge-success pt-2 pb-2 pl-2 pr-2" v-if="status==1">open</span>
        <span class="badge badge-warning pt-2 pb-2 pl-2 pr-2" v-if="status==0">under process</span>
        <span class="badge badge-dark pt-2 pb-2 pl-2 pr-2"    v-if="status==2">closed</span>
*/
$countUsers = User::where('role_id',10)->count();
$countConsulte = User::where('role_id',1)->count();
$countConstruction = User::where('role_id',6)->count();
$StatusTenderConslute = Tconsulte::where('status',0)->count();
$AllTenderConslute = Tconsulte::count();
$AllTenderConsr  = Tconstr::count();

return response()->json([
    'user'=>$countUsers,
    'Consulte'=>$countConsulte,
    'Construction'=>$countConstruction,
    'statusTender'=>$StatusTenderConslute,
    'AllTendersConsulate'=>$AllTenderConslute,
    'AllTenderConsr' => $AllTenderConsr,
    ]);

    }

    public function acceptTender(Request $request){


      $tender_id = $request->id;


        Tconsulte::where('id',$tender_id)->update(['status'=>1]);
        $tenderAccepted = Tconsulte::with('user')->find($tender_id);

        $user = $tenderAccepted->user;





        Broadcast(new acceptTender($user ,$tenderAccepted,$tender_id));

        $user->notify(new notifyAcceptTenders($tenderAccepted));



        return response()->json(['success'=>'You Accept The Tender']);
    }


    public function detailsTenderConsulte(){
        $tenders = Tconsulte::latest()->with('user')->paginate(5);

        foreach($tenders as $tender){
            $tender->setAttribute('added_at',$tender->created_at->diffForHumans());
           // $tender->setAttribute('comment_count',$tender->Toffer->count());
        }

        return response()->json($tenders);
    }

    public function detailsTenderConsr(){
        $tenders = Tconstr::latest()->with('user')->paginate(5);

        foreach($tenders as $tender){
            $tender->setAttribute('added_at',$tender->created_at->diffForHumans());
           // $tender->setAttribute('comment_count',$tender->Toffer->count());
        }

        return response()->json($tenders);
    }



    public function ConslTender(Request $request){
        $id = $request->id;
        $tenders = Tconsulte::where('id',$id)->with('user')->get();


        $commnets= Toffers::where('tender_id',$id)->with('user')->get();


        foreach($tenders as $tender){


                foreach($commnets as $comment){

                   // $tender->setAttribute('Commenter',Toffers::where('tender_id',$id)->with('user')->get());
                    $comment->setAttribute('Commented_at',$comment->created_at->diffForHumans());
                }

                $tender->setAttribute('comments',$commnets);
                 $tender->setAttribute('added_at',$tender->created_at->diffForHumans());

        }

        return response()->json($tenders);
    }

    public function ConsrTender(Request $request){

        $id = $request->id;

        $tenders = Tconstr::where('id',$id)->with('user')->with('tcimg')->get();



        foreach($tenders as $tender){



            $tender->setAttribute('added_at',$tender->created_at->diffForHumans());

        }
        return response()->json($tenders);
    }
}
