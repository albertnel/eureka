@extends('app')

@section('content')

	<h1>New Category</h1>
	<hr/>

	{!! Form::open(['url' => 'admin/categories']) !!}

		@include('admin.categories._form', ['submitButtonText' => 'Add Library'])

	{!! Form::close() !!}

	@include('errors.list')

@stop
