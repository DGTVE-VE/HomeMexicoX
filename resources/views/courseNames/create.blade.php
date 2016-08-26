@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New CourseName</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'courseNames.store']) !!}

            @include('courseNames.fields')

        {!! Form::close() !!}
    </div>
@endsection
