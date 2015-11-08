@extends('app')

@section('title', '- Edit Category')

@section('content')

	<h1>{{ $category->name }}</h1>
	<hr/>

	{!! Form::model($category, ['method' => 'PATCH', 'url' => 'admin/categories/' . $category->id]) !!}

		@include('admin.categories._form', ['submitButtonText' => 'Update Category'])

	{!! Form::close() !!}

	@include('errors.list')

@stop
