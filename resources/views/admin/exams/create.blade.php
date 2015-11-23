@extends('app')

@section('title', '- Create Examination')

@section('content')

    <h1>New Examination</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/exams']) !!}

        @include('admin.exams._form', ['submitButtonText' => 'Add Exam', 'categories' => $categories])

    {!! Form::close() !!}

    @include('errors.list')

@stop
