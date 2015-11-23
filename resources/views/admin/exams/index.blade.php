@extends('app')

@section('title', '- Examinations')

@section('content')

<h1>Examinations</h1>
<hr/>

<div class="row">

    <div class="col-md-12">

        <table class="table table-bordered table-hover">
            <thead>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Survey</th>
                <th>Libraries</th>
                <th>Questions</th>
                <th>Actions</th>
            </thead>

            <tbody>

                @if (count($exams))

                    @foreach ($exams as $exam)

                        <tr>
                            <td>{{ $exam->name }}</td>
                            <td>{{ $exam->start_date . ' ' . $exam->start_time }}</td>
                            <td>{{ $exam->end_date . ' ' . $exam->end_time }}</td>
                            <td>{{ ($exam->is_survey ? 'Yes' : 'No') }}
                            <td>{{ count($exam->libraries) }}</td>
                            <td>{{ count($exam->questions) }}</td>
                            <td>
                                <a href="{{ action('ExamsController@edit', [$exam->id]) }}" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="{{ action('ExamsController@show', [$exam->id]) }}" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>

                    @endforeach

                @else

                    <tr>
                        <td colspan="3">No examinations available yet.</td>
                    </tr>

                @endif

            </tbody>

        </table>

        <input type="button" class="btn btn-primary" value="Add New Exam" onclick="window.location='{{ url('admin/exams/create') }}'">

    </div>

</div>

@stop
