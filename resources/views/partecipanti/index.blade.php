@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Partecipanti</h1>
@if (count($partecipanti))
<ul>
	@foreach ($partecipanti as $partecipante)
		<partecipante>
			<h2><a href="{{action('PartecipantiController@show', [$partecipante->id])}}">{{$partecipante->name}}</a><h2>
			<ul>
				<li>{{$partecipante->name}}</li>
				<li>{{$partecipante->surname}}</li>
				<li>{{$partecipante->email}}</li>
				<li>{{$partecipante->telephone}}</li>
				
			<!-- <li>{{$partecipante->id}}</li>  -->
				
				
			</ul>
		</partecipante>
	@endforeach
</ul>
@else
<p>no partecipanti</p>
@endif

@stop