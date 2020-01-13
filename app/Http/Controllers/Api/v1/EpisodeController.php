<?php

namespace App\Http\Controllers\Api\v1;

use App\Episode;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CourseCollection;
use App\Http\Resources\v1\EpisodeCollection;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index(){
        $Episodes = Episode::paginate(5);
        return new EpisodeCollection($Episodes);
    }
    public function single($id){
        $episode = Episode::find($id);
        return $episode;
    }
}
