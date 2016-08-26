@extends('layouts.admin')

@section('content')
        <h1 class="pull-left">Course Names</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('courseNames.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @include('courseNames.table')
        
@endsection
