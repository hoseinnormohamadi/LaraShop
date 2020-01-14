<?php

namespace App;
use App\Course;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function courses(){
        return $this->belongsToMany(Course::class,'Course_tag','course_id','tag_id');
    }
}
