<?php

namespace App\Http\Controllers;

use App\Course;
use App\Episode;
use App\Http\Resources\v1\EpisodeCollection;
use App\Tag;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('/Admin.welcome');
    }

    public function create()
    {
        return view('Admin.Courses.createnew', [
            'tags' => Tag::all()
        ]);
    }
    public function show($id){
        $course = Course::find($id);
        $episodes = Episode::where('course_id', '=', $course->id)->get();
        return view('Admin.Courses.Details',['content' => $course],['Episodes'=>$episodes]);
    }
    public function SendToDB(Request $request)
    {

        $new_Course = new Course($this->ValidateCourse());
        $new_Course->user_id = 1;
        $new_Course->image = 'Pics/' . $this->UploadPic(request());
        $new_Course->save();
        $new_Course->tag()->attach(request('tag'));
        $courseID = $new_Course->id;
        $episode_number = request()->input('episodes_number');
        for ($x = 0; $x < $episode_number; $x++) {
            $new_Episode = new Episode();
            $new_Episode->title = \request()->input('Episode_Title_'.$x);
            $new_Episode->body = \request()->input('Episode_Body_'.$x);
            $new_Episode->number = $x+1;
            $new_Episode->course_id = $courseID;
            $new_Episode->save();
        }
        return redirect('/Admin/');

    }
    public function edit($id){
        $course = Course::find($id);
        return view('Admin.Courses.edit',['course' => $course],[
            'tags' =>Tag::all()
        ]);
    }

    public function Posts()
    {
        if (request('tag')) {
            $posts = Tag::where('name', request('tag'))->firstorfail()->posts;
        } else {
            $posts = Course::all();
        }
        return view('Admin.Courses.index', ['content' => $posts]);
    }

    private function ValidateCourse()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required'

        ]);
    }

    private function UploadPic(Request $request)
    {
        $request->validate([
            'Pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $PicName = time() . '.' . $request->Pic->extension();

        $request->Pic->move(public_path('Pics'), $PicName);

        return $PicName;
    }

}
