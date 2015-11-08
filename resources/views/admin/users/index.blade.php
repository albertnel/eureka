@extends('app')

@section('title', '- Users')

@section('content')

<h1>Users</h1>
<hr/>

<div class="row">

    <div class="col-md-12">

        <table class="table table-bordered table-hover">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </thead>

            <tbody>

                @if (count($users))

                    @foreach ($users as $user)

                        <tr>
                            <td>{{ $user->getFullName() }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ action('UsersController@edit', [$user->id]) }}" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="{{ action('UsersController@show', [$user->id]) }}" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>

                    @endforeach

                @else

                    <tr>
                        <td colspan="3">No users available.</td>
                    </tr>

                @endif

            </tbody>

        </table>

        <input type="button" class="btn btn-primary" value="Add New User" onclick="window.location='{{ url('admin/users/create') }}'">

    </div>

</div>

@stop
