<?php

namespace App\Http\Controllers\relation;

use App\User;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Phone;
use App\Models\services;
use Dotenv\Result\Success;
use Illuminate\Http\Request;

class RealatioController extends Controller
{
    public function hasOne()
    {
        $user = User::with(['phone' => function ($q) {

            $q->select('code', 'phone', 'user_id');
        }])->find(1);
        return $user->phone->code;
        //return response()->json($user);
    }

    public function has_One()
    {


        $phone = Phone::with('user')->find(2);
        $phone->makeVisible(['user_id']);
        return response()->json($phone);
    }

    public function getUserHasPhone()
    {


        $user = User::whereHas('phone')->get();

        return $user;
    }
    public function getUserNoHasPhone()
    {


        $user = User::whereDoesntHave('phone')->get();

        return $user;
    }
    public function getUserWhereHasPhoneWithCondition()
    {
        return User::whereHas('phone', function ($q) {
            $q->where('code', '02');
        })->get();
    }

    public function getHopitalDoctors()
    {

        //$hospital =  Hospital::find(1);
        // return $hospital->doctors;
        $hospital =  Hospital::with('doctors')->find(1);

        $doctors =  $hospital->doctors;

        foreach ($doctors as $doctor) {

            echo  $doctor->name . '<br>';
        }
        $doctor = Doctor::find(3);
        return $doctor->hospital->name;
    }
        public function hospitals()
        {
           $hospitals =  Hospital::select('id','name','address')->get();

           return view('doctors.hospital',compact('hospitals'));
        }
        public function doctors($hospital_id)
        {
           $hospitals =  Hospital::find($hospital_id);
//
           $doctors = $hospitals->doctors;
           return view('doctors.doctors',compact('doctors'));
        }

        public function HospitalsHasDoctors(){
           $hospital =  Hospital::whereHas('doctors')->get();
           return $hospital;
        }

        public function HospitalsHaMaleDoctors(){
            $hospital =  Hospital::with('doctors')->whereHas('doctors',function($q){
                $q->where('gender',0);
            })->get();
            return $hospital;
         }

         public function HospitalsNoHasDoctors(){
            $hospital =  Hospital::whereDoesNtHave('doctors')->get();
            return $hospital;
         }

         public function DeleteHospital($hospital_id)
         {
            $hospital =  Hospital::find($hospital_id);

            if(!$hospital)
                return abort('404');

                $hospital->doctors()->delete();
                $hospital->delete();
         }

         public function getDoctorService(){

            $doctor = Doctor::find(2);

            return $doctor->services;


         }
         public function getServiceDoctor(){

                return $doctors=services::with(['doctors'=>function($q){
                    $q->select('doctors.id','name','title');
                }])->find(2);
         }
         public function getDoctorServicesById($doctorId){
             $doctor = Doctor::find($doctorId);
             $services = $doctor->services;

             $doctors = Doctor::select('id','name')->get();
             $Allservices = services::select('id','name')->get();

             return view('doctors.services',compact('services','doctors','Allservices'));

         }
         public function SaveServicesToDoctor(REQUEST $request){
              $doctor = Doctor::find($request-> doctor_id);

             if(!$doctor)
                return abort('404');
                 //$doctor->services()-> attach($request -> services_id);
                // $doctor->services()-> sync($request -> services_id);
                $doctor->services()->syncWithoutDetaching($request -> services_id);


                 return redirect()->back()->with(['success' => 'لقد تم اضافة العرض بنجاح','doctor' =>$doctor]);




        }

}
