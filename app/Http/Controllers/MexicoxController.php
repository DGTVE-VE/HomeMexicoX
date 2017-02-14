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

class MexicoxController extends Controller {

    public function Home2017() {
        $categorias = DB::select("select id, categoria from categorias order by categoria");
        return view('viewHome2017/mexicox')->with('categorias', $categorias);
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
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso
            FROM course_name b inner join edxapp.course_overviews_courseoverview a on a.id = b.course_id 
            where b.course_id is not null and trim(b.course_id)!='' and b.activo=1 
            and a.enrollment_start < '".$fechaHoy."' and a.enrollment_end > '".$fechaHoy."' order by a.start desc;");
        } else {
            $cursosRecientes = DB::select("
            SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso
            FROM curso_categoria c inner join course_name b on b.id = c.id_curso 
		    inner join edxapp.course_overviews_courseoverview a on a.id = b.course_id 
            where c.id_categoria = " . $categoria . "
            and b.course_id is not null and trim(b.course_id)!='' and b.activo=1 order by a.start desc;");
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
            $condicionCat = "and c.id_categoria = " . $categoria;
        }
        $institucion = $_POST['imparte'];
        $cursosRecientes = DB::select("SELECT a.display_name AS nombreCurso, a.id AS id_curso, a.course_image_url AS thumbnail,
            a.enrollment_end AS finInscripcion, a.enrollment_start AS inicioInscripcion, a.start AS inicioCurso, a.end AS finCurso
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
                                WHERE a.id is not null AND trim(a.id)!='' AND b.activo=1 ORDER BY b.institucion");
        } else {
            $instituciones = DB::select("SELECT DISTINCT(b.nombre_institucion), b. institucion
                            FROM edxapp.course_overviews_courseoverview a INNER JOIN course_name b ON a.id = b.course_id
                            INNER JOIN curso_categoria c ON b.id = c.id_curso
                            WHERE c.id_categoria = " . $categoria . "
                            AND a.id is not null AND trim(a.id)!='' AND b.activo=1 ORDER BY b.nombre_institucion desc");
        }
        return view('viewHome2017/muestraInstituciones')->with('instituciones', $instituciones)->with('categoria',$categoria);
    }

    public function buscar() {
        $termino = filter_input(INPUT_POST, 'termino');

        $cursosRecientes = DB::select("SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso
            FROM course_name b inner join edxapp.course_overviews_courseoverview a on a.id = b.course_id 
            where b.course_id is not null and trim(b.course_id)!='' and b.activo=1 
            and match(a.display_name,a.short_description) against('".$termino."') order by inicio desc;");
		return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
}
