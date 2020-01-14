<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable= [
        'user_id' , 'body' , 'course_id'
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
