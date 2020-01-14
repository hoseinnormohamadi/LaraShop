<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Course;
use App\Tag;
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
    public function Show($id){
        $course = Course::find($id);
        $comments = Comment::where('course_id','=',$course->id)->get();
        return view('Details',['content' => $course],['comments' => $comments]);
    }
    public function Search(){
        if (request('tag')) {
            $courses = Tag::where('name', request('tag'))->firstOrfail()->courses;
        } else {
            $courses = Course::all();
        }
        return view('Search' , ['content' => $courses]);
    }
}
