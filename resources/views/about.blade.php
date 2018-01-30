@extends('welcome')

@section('head')
<title>About</title>
@stop

@section('content')
        @foreach($allacc as $acc)
        	<div>
                <a href="{{ action('Controller@show', [$acc->id]) }}">{{ $acc->name }}</a>
			</div>
        @endforeach
@stop