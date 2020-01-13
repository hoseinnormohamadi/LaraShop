<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $validData = $this->validate($request,[
            'body' => 'required'
        ]);
        auth()->user()->comments()->create($validData);
        return response([
            'Data' => [
                'Message' => 'Created Successfully'
            ],
            'Status' => 'Success'
        ]);
    }
}
