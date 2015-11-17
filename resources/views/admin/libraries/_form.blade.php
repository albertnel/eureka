<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<select multiple="multiple" id="my-select" name="my-select[]">
    @foreach ($categories as $category)
        <option value="">{{ $category->name }}</option>
    @endforeach
</select>

<div class="row form-group" style="margin-top:20px">
	<div class="col-md-2">{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}</div>
	<div class="col-md-2">{!! Form::button('Back', ['class' => 'btn btn-danger', 'style' => 'width:100%', 'onclick' => 'window.location="' . url('admin/libraries') . '"']) !!}</div>
</div>

<script src="/js/jquery.multi-select.js" type="text/javascript"></script>
<script type="text/javascript">

$('#my-select').multiSelect();

</script>
