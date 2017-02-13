<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course_name extends Model
{
    public  $table = 'course_name';
    
    public function course_overviews_courseoverview(){
        return $this->hasOne('App\Model\Course_overviews_courseoverview','course_id','id');
    }
}
