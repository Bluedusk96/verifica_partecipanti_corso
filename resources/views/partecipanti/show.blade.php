@extends('app')

@section('title')
{{$partecipante->name}}
@stop

@section('content')
<h1>{{$partecipante->name}}</h1>
<ul>
	<li>{{$partecipante->name}}</li>
	<li>{{$partecipante->surname}}</li>
	<li>{{$partecipante->email}}</li>
	<li>{{$partecipante->telephone}}</li>
</ul>
@stop