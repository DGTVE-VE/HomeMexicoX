<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::text('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio', 'Inicio:') !!}
    {!! Form::date('inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin', 'Fin:') !!}
    {!! Form::date('fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicio Inscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio_inscripcion', 'Inicio Inscripcion:') !!}
    {!! Form::date('inicio_inscripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fin Inscripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin_inscripcion', 'Fin Inscripcion:') !!}
    {!! Form::date('fin_inscripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    {!! Form::text('thumbnail', null, ['class' => 'form-control']) !!}
</div>

<!-- Institucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institucion', 'Institucion:') !!}
    {!! Form::text('institucion', null, ['class' => 'form-control']) !!}
</div>

<!-- Activo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activo', 'Activo:') !!}
    {!! Form::text('activo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('courseNames.index') !!}" class="btn btn-default">Cancel</a>
</div>
