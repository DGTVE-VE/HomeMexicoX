<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    
    public function index() {
        
        $cursosTodos = DB::select("select *from course_name where course_id is not null and trim(course_id)!='' and activo=1 order by inicio desc");
        
        return view('home',['cursos'=>$cursosTodos]);
    }
}
