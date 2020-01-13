<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\payment;
use App\User;
use App\Http\Resources\v1\User as UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        auth()->user()->update([
           'Api_Token' =>  \Str::random(100)
        ]);
        return new UserResource(auth()->user());
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
        return new UserResource($user);
    }
    public function Courses(){
         return payment::where('user_id' , auth()->user()->id);
    }
}
