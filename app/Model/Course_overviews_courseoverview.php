<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Course_name;

class Course_overviews_courseoverview extends Model
{
    public  $table = 'edxapp.course_overviews_courseoverview';
    
    public function course_name(){
        return $this->hasOne('App\Model\Course_name','course_id','id');
    }
}
