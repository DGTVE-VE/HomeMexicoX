<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cursos_docentes extends Model
{
    public $table = 'cursos_docentes';
	
	public function course_name(){
		return $this->hasOne('App\Model\Course_name', 'id', 'id_course_name');
	}
}
