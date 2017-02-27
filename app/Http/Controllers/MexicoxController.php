<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categorias;
use App\Http\Requests;
use App\Models\Categoria;
use Carbon\Carbon;
use App\Model\Course_name;
use App\Model\Course_overviews_courseoverview;
use \Illuminate\Support\Facades\Redirect;

class MexicoxController extends Controller {

    public function Home2017() {
        $categorias = DB::select("SELECT id, categoria FROM categorias ORDER BY categoria");
        return view('viewHome2017/mexicox')->with('categorias', $categorias);
    }

    public function login() {
        return redirect('http://mx.mexicox.gob.mx/login');
    }

    /*  *****   Filtra cursos por categoria en clic de categorias de menu principal ****    */
    public function filtroCursos($categoria) {
        $fechaHoy = date_format(date_create('now'), 'Y-m-d');
        /*$cursosNvo = Course_overviews_courseoverview::find('course-v1:BANSEFI+BANSEFIIEF01x+2016_S2')->course_name;*/
        /*$cursosNvo = Course_overviews_courseoverview::whereHas('Course_name', function ($query) {
            $query->where('activo', '=', 1);
            })->get();*/
        if ($categoria == '0') {
        $cursosRecientes = DB::select("SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso,
            b.institucion, b.nombre_institucion
            FROM course_name b INNER JOIN edxapp.course_overviews_courseoverview a ON a.id = b.course_id 
            WHERE b.course_id is not null AND TRIM(b.course_id)!='' AND b.activo=1 
            AND a.enrollment_end > '".$fechaHoy."' ORDER BY a.start desc;");
        } else {
            $cursosRecientes = DB::select("SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso,
            b.institucion, b.nombre_institucion
            FROM curso_categoria c INNER JOIN course_name b ON b.id = c.id_curso 
		    INNER JOIN edxapp.course_overviews_courseoverview a ON a.id = b.course_id 
            WHERE c.id_categoria = " . $categoria . "
            AND b.course_id is not null AND TRIM(b.course_id)!='' AND b.activo=1 ORDER BY a.start DESC;");
        }
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }

    /*  *****   filtra cursos por institución en clic de lista de instituciones *****    */
    public function cursosInstitucion() {
        $categoria = $_POST['cat'];
        if($categoria == 0){
            $condicionCat = '';
        }
        else{
            $condicionCat = "AND c.id_categoria = " . $categoria;
        }
        $institucion = $_POST['imparte'];
        $cursosRecientes = DB::select("SELECT a.display_name AS nombreCurso, a.id AS id_curso, a.course_image_url AS thumbnail,
            a.enrollment_end AS finInscripcion, a.enrollment_start AS inicioInscripcion, a.start AS inicioCurso, a.end AS finCurso, 
            b.institucion, b.nombre_institucion
            FROM edxapp.course_overviews_courseoverview a INNER JOIN course_name b ON a.id = b.course_id
            INNER JOIN curso_categoria c ON b.id = c.id_curso
            WHERE b.institucion = '" . $institucion . "'" . $condicionCat . " AND b.course_id is not null 
            AND trim(b.course_id)!='' AND b.activo=1 GROUP BY b.course_id ORDER BY a.start DESC;");
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
    
    /*  *****   Consulta instituciones con cursos al seleccionar una categoría en el menú principal *****    */
    public function obtenerInstituciones($categoria) {
        if ($categoria == '0') {
            $instituciones = DB::select("SELECT distinct(b.nombre_institucion), b. institucion
                                FROM edxapp.course_overviews_courseoverview a INNER JOIN course_name b ON a.id = b.course_id
                                WHERE a.id is not null AND TRIM(a.id)!='' AND b.activo=1 ORDER BY b.institucion");
        } else {
            $instituciones = DB::select("SELECT DISTINCT(b.nombre_institucion), b. institucion
                            FROM edxapp.course_overviews_courseoverview a INNER JOIN course_name b ON a.id = b.course_id
                            INNER JOIN curso_categoria c ON b.id = c.id_curso
                            WHERE c.id_categoria = " . $categoria . "
                            AND a.id is not null AND TRIM(a.id)!='' AND b.activo=1 ORDER BY b.nombre_institucion desc");
        }
        return view('viewHome2017/muestraInstituciones')->with('instituciones', $instituciones)->with('categoria',$categoria);
    }

    public function buscar() {
        $termino = filter_input(INPUT_POST, 'termino');

        $cursosRecientes = DB::select("SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso,
            b.institucion, b.nombre_institucion
            FROM course_name b INNER JOIN edxapp.course_overviews_courseoverview a ON a.id = b.course_id 
            WHERE b.course_id is not null AND TRIM(b.course_id)!='' AND b.activo=1 
            AND MATCH(a.display_name,a.short_description) AGAINST('".$termino."') ORDER BY a.start DESC;");
		return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
}
