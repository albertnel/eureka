@extends('app')

@section('title', '- Categories')

@section('content')

<h1>Categories</h1>
<hr/>

<div class="row">

	<div class="col-md-12">

		<table class="table table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Actions</th>
			</thead>

			<tbody>

				@if (count($categories))

					@foreach ($categories as $category)

						<tr>
							<td>{{ $category->name }}</td>
							<td>
								<a href="{{ action('CategoriesController@edit', [$category->id]) }}" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
								<a href="{{ action('CategoriesController@destroy', [$category->id]) }}" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
							</td>
						</tr>

					@endforeach

				@else

					<tr>
						<td colspan="3">No categories available yet.</td>
					</tr>

				@endif

			</tbody>

		</table>

		<input type="button" class="btn btn-primary" value="Add New Category" onclick="window.location='{{ url('admin/categories/create') }}'">

	</div>

</div>

@stop
