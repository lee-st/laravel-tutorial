@extends('welcome')

@section('head')
<title>About</title>
@stop

@section('content')
        @foreach($allacc as $acc)
        <div> {{ $acc->name }} </div>
        @endforeach
@stop