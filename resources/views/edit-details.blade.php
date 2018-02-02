@extends('welcome')

@section('head')
	<style>
		.radio{
			display: inline-flex;
		}
	</style>
@stop

@section('content')
	{!! Form::model($selected, ['method' => 'PATCH', 'action' => ['Controller@update', $selected->id]]) !!}
	
	@include('partials.form', ['buttonText'=>'Update'])
	
	{!! Form::close() !!}

	@include('errors.form-error')
@stop