<?php

namespace App\Http\Controllers\Api\v1;

use App\Course;
use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use  App\Http\Resources\v1\payment as PaymentResource;
class BuyController extends Controller
{
    public function buy(Request $request, Course $course){
        if (! $course){
            return response([
                'Data' =>[
                    'Message' => 'Please Select a Valid Course'
                ],
                'Status' => 'Error'
            ]);
        }
        $payment  = Payment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $course->id,
            'Amount' => $course->price,
            'status'=> true
        ]);
        return new PaymentResource($payment);
    }
}
