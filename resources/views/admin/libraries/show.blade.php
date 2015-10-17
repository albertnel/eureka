@extends('app')

@section('content')

	<h1>New Library</h1>
	<hr/>

	{!! Form::open(['url' => 'libraries']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>

		<div class="row form-group">
			<div class="col-md-2">{!! Form::submit('Add Library', ['class' => 'btn btn-primary form-control']) !!}</div>
			<div class="col-md-2">{!! Form::button('Cancel', ['class' => 'btn btn-danger', 'style' => 'width:100%', 'onclick' => 'window.location="' . url('libraries') . '"']) !!}</div>
		</div>

	{!! Form::close() !!}

@stop
