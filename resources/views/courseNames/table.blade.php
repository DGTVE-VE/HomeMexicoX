

    <?php $i = 0; ?>
    @foreach($courseNames as $courseName)
    <?php $i ++; ?>
    @if($i%3 == 0)
    <div class='row'>
    @endif
        <div class="panel panel-default col-md-4">
            <div class="panel-heading">
                <h3 class="panel-title">{!! $courseName->course_name !!}</h3>
            </div>
            <div class="panel-body">
                <table class="table">                    
                    <tr><td>Course_id</td><td>{!! $courseName->course_id !!}</td></tr>
                    <tr><td>Inicio</td><td>{!! $courseName->inicio !!}</td></tr>
                    <tr><td>Fin</td><td>{!! $courseName->fin !!}</td></tr>
                    <tr><td>Inicio Inscripcion</td><td>{!! $courseName->inicio_inscripcion !!}</td></tr>
                    <tr><td>Fin Inscripcion</td><td>{!! $courseName->fin_inscripcion !!}</td></tr>
                    <tr><td>Descripcion</td><td>{!! $courseName->descripcion !!}</td></tr>
                    <tr><td>Thumbnail</td><td><img width="100px" class="img-responsive" src="{{'http://mexicox.gob.mx/' . $courseName->thumbnail }}" alt="thumbnail"></td></tr>
                    <tr><td>Institucion</td><td>{!! $courseName->institucion !!}</td></tr>
                    <tr><td>Activo</td><td>{!! $courseName->activo !!}</td></tr>
                    <tr><td colspan="2" style='width:50px'>
                        {!! Form::open(['route' => ['courseNames.destroy', $courseName->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('courseNames.show', [$courseName->id]) !!}" class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{!! route('courseNames.edit', [$courseName->id]) !!}" class='btn btn-default btn-xs'>
                                <i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    </tr>
                </table>
            </div>
        </div>
    @if($i%3 == 0)
    </div>
    @endif
        
    @endforeach
    

