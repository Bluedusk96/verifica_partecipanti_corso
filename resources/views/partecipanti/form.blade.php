<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
	{!! Form::label('surname', 'Surname') !!}
	{!! Form::text('surname', null, ['class' => 'form-control']) !!}
	
</div>


<div class="form-group">
	{!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
	
	</div>
	
<div class="form-group">
	{!! Form::label('telephone', 'Telephone') !!}
	{!! Form::text('telephone', null, ['class' => 'form-control']) !!}
	
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>