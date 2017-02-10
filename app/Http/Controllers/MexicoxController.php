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

    public function MexicoX() {
        $clasifica = DB::select("select  distinct(c.categoria)
                                from course_name a, curso_categoria b, categorias c
                                where a.id = b.id_curso 
                                and  b.id_categoria = c.id
                                and a.course_id is not null 
                                and trim(a.course_id)!='' and a.activo=1 order by categoria asc");
        $cursosTodos = DB::select("select  c.categoria,a.course_name,a.course_id, a.inicio, a.fin,a.inicio_inscripcion,a.fin_inscripcion,a.descripcion,a.thumbnail,a.institucion
                                    from course_name a, curso_categoria b, categorias c
                                    where a.id = b.id_curso 
                                    and  b.id_categoria = c.id
                                    and a.course_id is not null 
                                    and trim(a.course_id)!='' and a.activo=1 order by inicio desc");
        return view('viewMexicoX/mexicox')->with('cursos', $cursosTodos)->with('clasifica', $clasifica);
    }

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
            FROM edxapp.course_overviews_courseoverview a inner join course_name b on a.id = b.course_id 
            where b.course_id is not null and trim(b.course_id)!='' and b.activo=1 
            and a.enrollment_start < '".$fechaHoy."' and a.enrollment_end > '".$fechaHoy."' order by inicio desc;");
        } else {
            $cursosRecientes = DB::select("
            SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso
            FROM curso_categoria c inner join course_name b on b.id = c.id_curso 
		    inner join edxapp.course_overviews_courseoverview a on a.id = b.course_id 
            where c.id_categoria = " . $categoria . "
            and b.course_id is not null and trim(b.course_id)!='' and b.activo=1 order by b.inicio desc;");
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
        $cursosRecientes = DB::select("SELECT a.display_name as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, a.end as finCurso
            FROM edxapp.course_overviews_courseoverview a inner join course_name b on a.id = b.course_id
            inner join curso_categoria c on b.id = c.id_curso
            where b.institucion = '" . $institucion . "'" . $condicionCat . " and b.course_id is not null 
            and trim(b.course_id)!='' and b.activo=1 group by b.course_id order by b.inicio desc;");
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
    
    /*  *****   Consulta instituciones con cursos al seleccionar una categoría en el menú principal *****    */
    public function obtenerInstituciones($categoria) {
        if ($categoria == '0') {
            $instituciones = DB::select("select distinct(a.nombre_institucion), a.institucion from course_name a
                                    where a.course_id is not null 
                                    and trim(a.course_id)!='' and a.activo=1 order by a.nombre_institucion");
        } else {
            $instituciones = DB::select("SELECT distinct(a.nombre_institucion), a.institucion FROM course_name a inner join curso_categoria b
                on a.id = b.id_curso where b.id_categoria = " . $categoria . "
                and a.course_id is not null and trim(a.course_id)!='' and a.activo=1 order by a.nombre_institucion desc");
        }
        return view('viewHome2017/muestraInstituciones')->with('instituciones', $instituciones)->with('categoria',$categoria);
    }

    public function buscar() {
        $termino = filter_input(INPUT_POST, 'termino');
                   
        $cursosRecientes = Course_overviews_courseoverview::whereRaw("match(display_name,short_description)"
                . "against('$termino') "
                . "and id is not null and trim(id)!=''")->get();
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }

}
