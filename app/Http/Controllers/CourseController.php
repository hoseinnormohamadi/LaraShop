<?php

namespace App\Http\Controllers;

use App\Course;
use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        /*if (request('tag')){
            $course = Tag::where('name', request('tag'))->firstorfail()->posts;
        }else{*/
            $course = Course::all();

        return view('welcome',['content' =>$course]);
    }
}
