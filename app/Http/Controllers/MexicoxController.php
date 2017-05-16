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
use App\Model\bannerPrincipal;
use App\Model\Blog;

class MexicoxController extends Controller {

    public function Home2017() {
        $categorias = DB::select("SELECT id, categoria FROM categorias ORDER BY categoria");
        $imgBanner = bannerPrincipal::where('activo',1)->orderBy('created_at', 'desc')->get();
        return view('viewHome2017/mexicox')->with('categorias', $categorias)->with('imagenBanner', $imgBanner);
    }

    public function login() {
        return redirect('http://mx.mexicox.gob.mx/login');
    }

    /*  *****   Filtra cursos por categoria en clic de categorias de menu principal ****    */
    public function filtroCursos($categoria, $periodo) {
        $fechaHoy = date_format(date_create('now'), 'Y-m-d');
        /*$cursosNvo = Course_overviews_courseoverview::find('course-v1:BANSEFI+BANSEFIIEF01x+2016_S2')->course_name;*/
        /*$cursosNvo = Course_overviews_courseoverview::whereHas('Course_name', function ($query) {
            $query->where('activo', '=', 1);
            })->get();*/
        if($categoria == 0){
            $condicionCat = '';
            $joinCat = "";
        }
        else{
            $joinCat = "INNER JOIN curso_categoria c ON b.id = c.id_curso ";
            $condicionCat = "AND c.id_categoria = " . $categoria;
        }
        if($periodo == 1){
            $condicionPeriodo = " <= '" . $fechaHoy . "'";
        }
        else{
            $condicionPeriodo = " > '" . $fechaHoy . "'";
        }
        $cursosRecientes = DB::select("SELECT DISTINCT(a.display_name) as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso,
            a.end as finCurso, b.institucion, b.nombre_institucion
            FROM edxapp.course_overviews_courseoverview a
		    INNER JOIN course_name b ON a.id = b.course_id 
            ".$joinCat."
            WHERE b.course_id is not null AND TRIM(b.course_id)!='' AND b.activo=1 
            ".$condicionCat." AND a.end ".$condicionPeriodo.
            " ORDER BY a.start desc;");
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }

    /*  *****   filtra cursos por institución en clic de lista de instituciones *****    */
    public function cursosInstitucion() {
        $categoria = $_POST['cat'];
        $archivados = $_POST['archivado'];
        $institucion = $_POST['imparte'];
        $fechaHoy = date_format(date_create('now'), 'Y-m-d');
        if($categoria == 0){
            $joinCat = '';
            $condicionCat = '';
        }
        else{
            $joinCat = "INNER JOIN curso_categoria c ON b.id = c.id_curso";
            $condicionCat = "AND c.id_categoria = " . $categoria;
        }
        if($archivados == 1){
            $condicionPeriodo = " <= '" . $fechaHoy . "'";
        }
        else{
            $condicionPeriodo = " > '" . $fechaHoy . "'";
        }
        $cursosRecientes = DB::select("SELECT DISTINCT(a.display_name) AS nombreCurso, a.id AS id_curso, a.course_image_url AS thumbnail,
            a.enrollment_end AS finInscripcion, a.enrollment_start AS inicioInscripcion, a.start AS inicioCurso, a.end AS finCurso, 
            b.institucion, b.nombre_institucion
            FROM edxapp.course_overviews_courseoverview a INNER JOIN course_name b ON a.id = b.course_id
            ".$joinCat."
            WHERE b.institucion = '" . $institucion . "'" . $condicionCat . " AND b.course_id is not null
            AND a.end ".$condicionPeriodo."
            AND trim(b.course_id)!='' AND b.activo=1 GROUP BY b.course_id ORDER BY a.start DESC;");
        return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
    
    /*  *****   Consulta instituciones con cursos al seleccionar una categoría en el menú principal *****    */
    public function obtenerInstituciones($categoria) {
        if ($categoria == '0') {
            $condicionCat = "WHERE ";
        } else {
            $condicionCat = "INNER JOIN curso_categoria c ON b.id = c.id_curso WHERE c.id_categoria = " . $categoria." AND ";
        }
        $instituciones = DB::select("SELECT DISTINCT(b.nombre_institucion), b. institucion
                        FROM edxapp.course_overviews_courseoverview a INNER JOIN course_name b ON a.id = b.course_id
                        ".$condicionCat."
                        a.id is not null AND TRIM(a.id)!='' AND b.activo=1 ORDER BY b.nombre_institucion desc");
        return view('viewHome2017/muestraInstituciones')->with('instituciones', $instituciones)->with('categoria',$categoria);
    }

    public function buscar() {
        $archivados = filter_input(INPUT_POST, 'archivado');
        $termino = filter_input(INPUT_POST, 'termino');
        $fechaHoy = date_format(date_create('now'), 'Y-m-d');
        if($archivados == 1){
            $condicionPeriodo = " <= '" . $fechaHoy . "'";
        }
        else{
            $condicionPeriodo = " > '" . $fechaHoy . "'";
        }
        $cursosRecientes = DB::select("SELECT DISTINCT(a.display_name) as nombreCurso, a.id as id_curso, a.course_image_url as thumbnail,
            a.enrollment_end as finInscripcion, a.enrollment_start as inicioInscripcion, a.start as inicioCurso, 
            a.end as finCurso, b.institucion, b.nombre_institucion
            FROM course_name b INNER JOIN edxapp.course_overviews_courseoverview a ON a.id = b.course_id 
            WHERE b.course_id is not null AND TRIM(b.course_id)!='' AND b.activo=1 
            AND a.end ".$condicionPeriodo."
            AND MATCH(a.display_name,a.short_description) AGAINST('".$termino."') ORDER BY a.start DESC;");
		return view('viewHome2017/muestraCursos')->with('cursosFiltrados', $cursosRecientes);
    }
    
    public function blog(){
        $entradas = Blog::where('publico', 1)->orderBy('id', 'desc')->get();
        $usuario = session()->get('nombre');
        return view('viewHome2017/blog/blog')->with('entradas', collect($entradas));
    }
    
    public function viewblog($idEntrada){
        $entradas = Blog::where('publico', '0')->get();
        $entrada = Blog::whereid($idEntrada)->get();
        $usuario = session()->get('nombre');
        return view('viewHome2017/blog/viewblog')->with('entradas', collect($entradas))->with('entrada', collect($entrada))->with('name_user',$usuario);
    }
    
    public function getblog(Request $request){
        $inputid = $request->input('id');
        return $this->viewblog($inputid);
    }
     public function aliados() {
         $categorias = DB::select("SELECT id, categoria FROM categorias ORDER BY categoria");
        return view('viewHome2017.aliados')->with('categorias', $categorias);
    }
}
