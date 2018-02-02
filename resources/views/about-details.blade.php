@extends('welcome')

@section('head')
	<style>
	ul{
		width: 100px;
		margin: auto;
	}
	</style>
@stop

@section('content')
	<div>
	<h4>{{ $selected->name }}</h4>
	<ul>
	<li>{{ $selected->gender }}</li>
	<li>{{ $selected->phone }}</li>
	</ul>
	</div>
	<br>
	<br>
	<button class="btn btn-primary" type="button" onclick="location.href='{{ action('Controller@edit', $selected->id) }}'">Edit</button>
@stop