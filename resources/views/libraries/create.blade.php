@extends('app')

@section('content')

	<h1>New Library</h1>
	<hr/>

	{!! Form::open(['url' => 'libraries']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Add Library', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}

@stop
