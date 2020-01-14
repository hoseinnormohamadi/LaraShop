<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\User;
use App\Http\Resources\v1\User as UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Payment;
use App\Http\Resources\v1\payment as PaymentResource;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $validData = $this->validate($request, [
            'email' => 'required|exists:users',
            'password' => 'required',
        ]);
        if (!auth()->attempt($validData)) {
            return response([
                'Data' => 'The given data was invalid',
                'Status' => 'Error'
            ], 403);
        }
        $token = $this->Create_Token();
        return new UserResource(auth()->user(), $token);
    }

    public function register(Request $request)
    {
        $validData = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $user = User::create([
            'name' => $validData['name'],
            'email' => $validData['email'],
            'password' => Hash::make($validData['password']),
            'Api_Token' => \Str::random(100)
        ]);
        auth()->login($user);
        $token = $this->Create_Token();
        return new UserResource($user , $token);
    }
    public function Courses(){
            $payments = Payment::where('user_id' ,auth()->user()->id)->get();
            return new PaymentResource($payments);
    }
    public function Download($id){
        $payment = Payment::where([
            ['user_id','=',auth()->user()->id],
            ['course_id','=',$id]
        ])->get();
        return '/Details/'.$id;
    }

    public function Create_Token()
    {
        auth()->user()->tokens()->delete();
        return auth()->user()->createToken('Api_Token')->accessToken;

    }
}
