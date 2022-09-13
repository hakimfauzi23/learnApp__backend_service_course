<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCourse extends Model
{
    protected $table = 'my_courses';
    protected $fillable = [
        'course_id', 'user_id'
    ];

    // get course data
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}
