@extends('layouts.admin')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit CourseName</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($courseName, ['route' => ['courseNames.update', $courseName->id], 'method' => 'patch']) !!}

            @include('courseNames.fields')

            {!! Form::close() !!}
        </div>
@endsection
