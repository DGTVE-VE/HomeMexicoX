<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Model\Cursos_docentes;
use App\Model\Course_name;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    
    public function index() {
        
        $cursosTodos = Cursos_docentes::whereHas('Course_name', function($query){
			$query->where('activo', '=', 1);
		})->get();
        
        return view('home',['cursos'=>$cursosTodos]);
    }
}
