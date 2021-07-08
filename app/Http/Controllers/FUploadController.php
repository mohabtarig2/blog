<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\achivement;
use App\CompanyFile;


use Illuminate\Http\Request;
class FUploadController extends Controller
{
    public function LicenceUpload(Request $request){




        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
            //'file' => 'required|mimes:pdf|max:2048'
         ]);
         $fileUpload = new CompanyFile;

         if($request->file()) {
             $file_name = time().'_'.$request->file->getClientOriginalName();
             $file_path = $request->file('file')->storeAs('uploads/licence', $file_name, 'public');
             $request->file->move(public_path('uploads/licence'), $file_name);


             $fileUpload->name = time().'_'.$request->file->getClientOriginalName();
             $fileUpload->path = '/storage/' . $file_path;
             $fileUpload->user_id = $request->user()->id;
             $fileUpload->save();

             return response()->json(['success'=>'File uploaded successfully.']);


    }
}

public function AchivementUpload(Request $request){




    $request->validate([
        'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
        //'file' => 'required|mimes:pdf|max:2048'
     ]);
     $fileUpload = new achivement();

     if($request->file()) {
         $file_name = time().'_'.$request->file->getClientOriginalName();

         $file_path = $request->file('file')->storeAs('uploads/achive', $file_name, 'public');
         $request->file->move(public_path('uploads/achive'), $file_name);

         $fileUpload->name = time().'_'.$request->file->getClientOriginalName();
         $fileUpload->path = '/storage/' . $file_path;
         $fileUpload->user_id = $request->user()->id;

         $fileUpload->save();

         return response()->json(['success'=>'File uploaded successfully.']);


}
}

}
