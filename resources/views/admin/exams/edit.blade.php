@extends('app')

@section('title', '- Edit Examination')

@section('content')

    <h1>{{ $exam->name }}</h1>
    <hr/>

    {!! Form::model($exam, ['method' => 'PATCH', 'url' => 'admin/exams/' . $exam->id]) !!}

        @include('admin.exams._form', ['submitButtonText' => 'Update Exam'])

    {!! Form::close() !!}

    @include('errors.list')

@stop
