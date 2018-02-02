{!! Form::label('name', 'Name') !!} {!! Form::text('name') !!}
<br><br>
<div class="radio-button-group">
	{!! Form::label('gender', 'Gender') !!}
	<div class="radio">
		{!! Form::label('gender1', 'Male') !!} {!! Form::radio('gender', 'Male', true, ['id' => 'gender']) !!}
	</div>
	<div class="radio">
		{!! Form::label('gender2', 'Female') !!} {!! Form::radio('gender', 'Female', false, ['id' => 'gender']) !!}
	</div>
</div>
<br>{!! Form::label('phone', 'Phone') !!} {!! Form::text('phone') !!}
<br><br>{!! Form::submit($buttonText, ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
</div>