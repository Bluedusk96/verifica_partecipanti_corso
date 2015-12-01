@extends('app')

@section('title')
New partecipante
@stop

@section('content')
<h1>New partecipante</h1>
<hr />
{!! Form::model($partecipante = new \App\Partecipante, array('action' => 'PartecipantiController@index')) !!}
	@include('partecipanti.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop