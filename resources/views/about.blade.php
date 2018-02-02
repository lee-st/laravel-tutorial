@extends('welcome')

@section('head')
<title>About</title>

@stop

@section('content')
    
        <div>
        @foreach($allacc as $acc)
            <a href="{{ action('Controller@show', [$acc->id]) }}">{{ $acc->name }}</a><br />
            @endforeach
		</div>
       
        <br />
        <button class="btn btn-primary" type="button" onclick="location.href='{{ action('Controller@create') }}'">Add New </button>
@stop