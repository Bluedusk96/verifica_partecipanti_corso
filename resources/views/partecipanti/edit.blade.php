@extends('app')

@section('title')
Edit partecipante
@stop

@section('content')
<h1>Edit partecipante </h1>
<hr />
{!! Form::model($partecipante, ['method' => 'PATCH', 'action' => ['PartecipantiController@update', $partecipante->id]]) !!}
	@include('partecipanti.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop