<div class="form-group">
	{!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="row form-group">
	<div class="col-md-2">{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}</div>
	<div class="col-md-2">{!! Form::button('Back', ['class' => 'btn btn-danger', 'style' => 'width:100%', 'onclick' => 'window.location="' . url('admin/categories') . '"']) !!}</div>
</div>