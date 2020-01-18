<?php

namespace App\Http\Controllers\Api\v1;

use App\Course;
use App\Http\Controllers\Controller;
use App\Mail\Buy;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use  App\Http\Resources\v1\payment as PaymentResource;
use Kavenegar\KavenegarApi;

class BuyController extends Controller
{
    public function buy(Request $request, Course $course)
    {
        if (!$course) {
            return response([
                'Data' => [
                    'Message' => 'Please Select a Valid Course'
                ],
                'Status' => 'Error'
            ]);
        }
        $validate_payment = Payment::where([['user_id', auth()->user()->id], ['course_id', $course->id]])->first();
        if ($validate_payment != null) {
            return [
                'Data' => 'You have This Course',
                'Status' => 'Error',
            ];
        }
        $payment = Payment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $course->id,
            'Amount' => $course->price,
            'status' => true
        ]);
        //Send Email
        \Mail::to(auth()->user()->email)->send(new Buy($course));
        //Send SMS
        $sender = "1000596446";
        $receptor = "09907310108";
        $message = "دوره " . $course->title . " با موفقیت در تاریخ " . Carbon::now()->format('d-m-Y') . " خریداری شد.";
        $api = new KavenegarApi("2F595443484157717A423272716244386936597458724D72335062695A334B6F3463754D516C35736D36553D");
        $api->Send($sender, $receptor, $message);
        return new PaymentResource($payment);
    }
}
