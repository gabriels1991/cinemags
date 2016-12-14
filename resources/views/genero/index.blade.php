@extends('layouts.admin')

@section('content')

@include('genero.modal')

	<div id="alert-success" class="alert  alert-success alert-dismissible" role="alert" style="display:none">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<strong> Creado</strong>
	</div>
	

<table class="table">
	<thead>
		<th>Generos</th>
		<th>Operaciones</th>
	</thead>
	<tbody id="datos">
		
	</tbody>
</table>


@stop