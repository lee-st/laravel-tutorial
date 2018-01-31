@extends('welcome')

@section('head')
	<style>
		.radio{
			display: inline-flex;
		}
	</style>
@stop

@section('content')
	{!! Form::open(['url' => 'about']) !!}
	
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name') !!}
	<br />
	<br />
	<div class="form-group">
		{!! Form::label('gender', 'Gender') !!}
		<div class="radio">
			{!! Form::label('gender1', 'Male') !!}
			{!! Form::radio('gender', 'option1', false, ['id' => 'gender']) !!}
		</div>
		<div class="radio">
			{!! Form::label('gender2', 'Female') !!}
			{!! Form::radio('gender', 'option2', false, ['id' => 'gender']) !!}
		</div>
	</div>
	<br />
	{!! Form::label('phone', 'Phone') !!}
	{!! Form::text('phone') !!}

	<br />
	<br />
	{!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}

	{!! Form::close() !!}
@stop