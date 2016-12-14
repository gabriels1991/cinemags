@extends('layouts.admin')

@section('content')
@if(Session::has('message'))

<div class="alert  {{Session::get('clase')}} alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong> {{Session::get('message')}}</strong> 
 
</div>
@endif

<div class="peliculas">
<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Elenco</th>
		<th>Genero</th>
		<th>Director</th>
		<th>Duracion</th>
		<th>Caratula</th>
		<th>Operaciones</th>
	</thead>
	@foreach($movies as $movie)
	<tbody>
		<th>{{$movie->name}}</th>
		<th>{{$movie->cast}}</th>
		<th>{{$movie->genre}}</th>

		<th>{{$movie->direction}}</th>
		<th>{{$movie->duration}}</th>
		<th><img src="movies/{{$movie->path}}" style="width:100px"></th>
		<th>

			<?php echo link_to_route('movie.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary']);?>
		

		</th>
	</tbody>
	@endforeach
</table>



</div>
@stop