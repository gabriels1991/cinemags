		@extends('layouts.admin')

		@section('content')

		@include('alerts.request')



		{!! Form::open(['url' => 'usuario']) !!}

		@include('usuario.forms.usr')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

		{!!Form::close()!!}


		@stop

