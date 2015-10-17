@extends('app')

@section('content')

	<h1>{{ $library->name }}</h1>
	<hr/>

	{!! Form::model($library, ['method' => 'PATCH', 'url' => 'admin/libraries/' . $library->id]) !!}

		@include('admin.libraries._form', ['submitButtonText' => 'Update Library'])

	{!! Form::close() !!}

	@include('errors.list')

@stop