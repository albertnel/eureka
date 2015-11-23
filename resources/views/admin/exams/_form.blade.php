<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group" id="start_end_times">
    <div class="row">
        <div class="col-lg-3">
            {!! Form::label('start_date', 'Start Date:') !!}
            {!! Form::text('start_date', null, ['class' => 'form-control date']) !!}
        </div>
        <div class="col-lg-3">
            {!! Form::label('start_time', 'Start Time:') !!}
            {!! Form::text('start_time', null, ['class' => 'form-control time']) !!}
        </div>
        <div class="col-lg-3">
            {!! Form::label('start_date', 'End Date:') !!}
            {!! Form::text('end_date', null, ['class' => 'form-control date']) !!}
        </div>
        <div class="col-lg-3">
            {!! Form::label('end_time', 'End Time:') !!}
            {!! Form::text('end_time', null, ['class' => 'form-control time']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('time_limit', 'Time Limit:') !!}
    {!! Form::text('time_limit', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('is_survey', 'Is Survey:') !!}
    {!! Form::checkbox('is_survey', 1, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('default_allowed_attempts', 'Default Allowed Attempts:') !!}
    {!! Form::text('default_allowed_attempts', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('feedback', 'Feedback:') !!}
    {!! Form::checkbox('feedback', 1, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('feedback_comments', 'Feedback Comments:') !!}
    {!! Form::checkbox('feedback_comments', 1, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('feedback_time_limit', 'Feedback Time Limit:') !!}
    {!! Form::text('feedback_time_limit', null, ['class' => 'form-control']) !!}
</div>

<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('randomize_questions', 'Randomize Questions:') !!}
            {!! Form::checkbox('randomize_questions', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
    <div class="form-group">
        {!! Form::label('force_complete', 'Force Completion:') !!}
        {!! Form::checkbox('force_complete', 1, ['class' => 'form-control']) !!}
    </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('allow_navigation', 'Allow Navigation:') !!}
            {!! Form::checkbox('allow_navigation', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('allow_answer_editing', 'Allow Answer Editing:') !!}
            {!! Form::checkbox('allow_answer_editing', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>

<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('allow_logout', 'Allow Logout:') !!}
            {!! Form::checkbox('allow_logout', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_results', 'Display Results:') !!}
            {!! Form::checkbox('display_results', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_student_name', 'Display Student Name:') !!}
            {!! Form::checkbox('display_student_name', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_exam_name', 'Display Exam Name:') !!}
            {!! Form::checkbox('display_exam_name', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>

<div class="row">

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_exam_date', 'Display Exam Date:') !!}
            {!! Form::checkbox('display_exam_date', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_exam_time', 'Display Exam Time:') !!}
            {!! Form::checkbox('display_exam_time', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_marks_total', 'Display Marks Total:') !!}
            {!! Form::checkbox('display_marks_total', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('display_marks_percentage', 'Display Marks Percentage:') !!}
            {!! Form::checkbox('display_marks_percentage', 1, ['class' => 'form-control']) !!}
        </div>
    </div>

</div>

<div class="form-group">
    {!! Form::label('display_marks_per_library', 'Display Marks Per Library:') !!}
    {!! Form::checkbox('display_marks_per_library', 1, ['class' => 'form-control']) !!}
</div>

<select multiple="multiple" id="categories-select" name="categories-select[]">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>

<div class="row form-group" style="margin-top:20px">
    <div class="col-md-2">{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}</div>
    <div class="col-md-2">{!! Form::button('Back', ['class' => 'btn btn-danger', 'style' => 'width:100%', 'onclick' => 'window.location="' . url('admin/exams') . '"']) !!}</div>
</div>

<script src="/js/jquery.multi-select.js" type="text/javascript"></script>
<script src="/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/js/jquery.timepicker.js" type="text/javascript"></script>
<script type="text/javascript">

// Activate the categories multi-select widget
$("#categories-select").multiSelect();

// Set the selected categories if applicable
var selectedCategories = [];
@if (isset($selected_categories))
    @foreach ($selected_categories as $category)
        selectedCategories.push("" + {{ $category->id }} + "");
    @endforeach
@endif

$("#categories-select").multiSelect("select", selectedCategories);

// Activate the date- and timepickers
$("#start_end_times .date").datepicker({
    "format": "yyyy-mm-dd",
    "autoclose": true
});
$("#start_end_times .time").timepicker({
    "timeFormat": "H:i",
    "step": function(i) {return (i%2) ? 15 : 45; },
});

</script>
