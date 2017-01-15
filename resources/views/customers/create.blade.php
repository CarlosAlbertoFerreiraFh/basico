@extends('layouts.main')
@section('page-title')
	Criar um novo Clientes
@stop
@section('content')
	{!! Form::open(['url' => 'foo/bar']) !!}
    	@include('customers.partials.form')
	{!! Form::close() !!}
@stop