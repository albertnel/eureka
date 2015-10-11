@extends('app')

@section('content')

<style>

table {
	border: 1px solid black;
	padding: 0px;
}

table td {
	border: 1px solid black;
	margin: 0px;
}

</style>

<h2>Libraries</h2>

<div class="row">
	
	<div class="col-md-12">

		<table>
			<tr>
				<th>Name</th>
				<th>Questions</th>
				<th>Actions</th>
			</tr>

		@if (count($libraries))

			@foreach ($libraries as $library)

				<tr>
					<td>{{ $library->name }}</td>
					<td></td>
					<td><a href="{{ action('LibrariesController@edit', [$library->id]) }}">Edit</a></td>
				</tr>
				
			@endforeach

		@else

			<tr>
				<td colspan="3">No libraries available yet.</td>
			</tr>

		@endif

		</table>

	</div>

</div>

@stop