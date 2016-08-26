@extends('layouts.admin')

@section('content')
    @include('courseNames.show_fields')

    <div class="form-group">
           <a href="{!! route('courseNames.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
