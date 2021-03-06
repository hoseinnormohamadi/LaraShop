<?php

namespace App\Http\Controllers\Api\v1;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Resources\v1\CourseCollection;
use App\Tag;
use App\User;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use \App\Http\Resources\v1\Course as CourseResources;
use App\Http\Controllers\Api\v1\UploadController as Uploader;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(2);
        return new CourseCollection($courses);
    }
    public function single($id){
        $course = Course::find($id);
        return $course;
    }
    public function Search(){
        if (request('tag')) {
            $courses = Tag::where('name', request('tag'))->firstOrfail()->courses;
        } else {
            $courses = Course::all();
        }
        return $courses;
    }
}
