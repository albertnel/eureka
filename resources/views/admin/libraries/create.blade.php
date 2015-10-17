@extends('app')

@section('content')

	<h1>New Library</h1>
	<hr/>

	{!! Form::open(['url' => 'admin/libraries']) !!}

		@include('admin.libraries._form', ['submitButtonText' => 'Add Library'])

	{!! Form::close() !!}

	@include('errors.list')

@stop
