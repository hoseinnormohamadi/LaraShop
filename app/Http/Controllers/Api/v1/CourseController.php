<?php

namespace App\Http\Controllers\Api\v1;

use App\Course;
use App\Exceptions\CourseIsPrivate;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Resources\v1\CourseCollection;
use App\User;
use Illuminate\Http\Request;
use \App\Http\Resources\v1\Course as CourseResources;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(2);
        return new CourseCollection($courses);
    }
    public function single(Course $course){
//        throw new CourseIsPrivate();
        return new CourseResources($course);
    }
    public function store(CourseRequest $request){

    }
}
