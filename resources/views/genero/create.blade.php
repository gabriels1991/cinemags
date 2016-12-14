		@extends('layouts.admin')

		@section('content')

	<div id="alert-danger" class="alert  alert-danger alert-dismissible" role="alert" style="display:none">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong id="msj"></strong>
	</div>


		 

	<div id="alert-success" class="alert  alert-success alert-dismissible" role="alert" style="display:none">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong> Creado</strong>
	</div>

		
	{!! Form::open() !!}

	@include('genero.form.genero')

	{!!link_to('#', $title='Guardar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}

	{!!Form::close()!!}


		@stop

