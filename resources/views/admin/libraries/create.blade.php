@extends('app')

@section('title', '- Create Library')

@section('content')

	<h1>New Library</h1>
	<hr/>

	{!! Form::open(['url' => 'admin/libraries']) !!}

		@include('admin.libraries._form', ['submitButtonText' => 'Add Library', 'categories' => $categories])

	{!! Form::close() !!}

	@include('errors.list')

@stop
