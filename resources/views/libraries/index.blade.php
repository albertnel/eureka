@extends('app')

@section('content')

<h1>Libraries</h1>
<hr/>

<div class="row">
	
	<div class="col-md-12">

		<table class="table table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Questions</th>
				<th>Actions</th>
			</thead>

			<tbody>

				@if (count($libraries))

					@foreach ($libraries as $library)

						<tr>
							<td>{{ $library->name }}</td>
							<td></td>
							<td><a href="{{ action('LibrariesController@show', [$library->id]) }}">Edit</a></td>
						</tr>
						
					@endforeach

				@else

					<tr>
						<td colspan="3">No libraries available yet.</td>
					</tr>

				@endif

			</tbody>

		</table>

		<input type="button" class="btn btn-primary" value="Add New Library" onclick="window.location='{{ url('libraries/create') }}'">

	</div>

</div>

@stop