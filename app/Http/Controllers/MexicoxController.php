<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Categorias;
use App\Http\Requests;
use App\Models\Categoria;
use Carbon\Carbon;
use App\Model\Course_name;
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
        $clasifica = DB::select("select distinct(c.categoria)
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
        $categorias = DB::select("select id, categoria from categorias order by categoria");
        return view('viewHome2017/mexicox')->with('cursos', $cursosTodos)->with('clasifica', $clasifica)->with('categorias', $categorias);
    }

    /*  *****   Filtra cursos por categoria en clic de categorias de menu principal ****    */
    public function filtroCursos($categoria) {
        if ($categoria == '0') {
            $cursosRecientes = DB::select("select  c.categoria,a.course_name,a.course_id, a.inicio, a.fin,a.inicio_inscripcion,a.fin_inscripcion,a.descripcion,a.thumbnail,a.institucion
                                    from course_name a, curso_categoria b, categorias c
                                    where a.id = b.id_curso 
                                    and  b.id_categoria = c.id
                                    and a.course_id is not null 
                                    and trim(a.course_id)!='' and a.activo=1 order by inicio desc limit 9");
        } else {
            $cursosRecientes = DB::select("SELECT * FROM bitnami_edx.course_name a inner join bitnami_edx.curso_categoria b
                on a.id = b.id_curso where b.id_categoria = " . $categoria . "
                and a.course_id is not null and trim(a.course_id)!='' and a.activo=1 order by inicio desc;");
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
            $condicionCat = "and b.id_categoria = " . $categoria;
        }
        $institucion = $_POST['imparte'];
        $cursosRecientes = DB::select("SELECT * FROM bitnami_edx.course_name a inner join bitnami_edx.curso_categoria b
            on a.id = b.id_curso where a.institucion = '" . $institucion . 
            "'" . $condicionCat . " and a.course_id is not null and trim(a.course_id)!='' and a.activo=1 order by inicio desc;");
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
    
    /*  *****   Consulta instituciones con cursos al seleccionar una categoría en el menú principal *****    */
    public function obtenerInstituciones($categoria) {
        if ($categoria == '0') {
            $instituciones = DB::select("select a.institucion from course_name a, curso_categoria b, categorias c
                                    where a.id = b.id_curso and  b.id_categoria = c.id and a.course_id is not null 
                                    and trim(a.course_id)!='' and a.activo=1 order by inicio desc limit 9");
        } else {
            $instituciones = DB::select("SELECT a.institucion FROM bitnami_edx.course_name a inner join bitnami_edx.curso_categoria b
                on a.id = b.id_curso where b.id_categoria = " . $categoria . "
                and a.course_id is not null and trim(a.course_id)!='' and a.activo=1 group by institucion order by inicio desc");
        }
        return view('viewHome2017/muestraInstituciones')->with('instituciones', $instituciones)->with('categoria',$categoria);
    }

    public function buscar() {
        $termino = filter_input(INPUT_POST, 'termino');
                   
        $cursosRecientes = Course_name::whereRaw("match(course_name,descripcion)"
                . "against('$termino') "
                . "and course_id is not null and trim(course_id)!=''")->get();
        
        //dd( $cursos);
		return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }

}
