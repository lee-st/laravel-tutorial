@extends('welcome')

@section('head')
	<style>
		.radio{
			display: inline-flex;
		}
	</style>
@stop

@section('content')
	{!! Form::open([ 'url' => 'about']) !!}
		@include('partials.form', ['buttonText'=>'Add New'])
	{!! Form::close() !!}

	@include('errors.form-error')
@stop