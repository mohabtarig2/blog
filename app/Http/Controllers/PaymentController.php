<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentOffer(Request $request){


                    if($request->payment=="paypal"){
                        return 'paypal';
                    }
                    if($request->payment=="visa"){
                        return 'visa';
                    }
    }
}
