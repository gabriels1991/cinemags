@extends('layouts.admin')
	@section('content')
		@include('alerts.request')

		  	{!! Form::model($movie,['route' => ['movie.update',$movie->id],'method'=>'put','files'=>true]) !!}

		  		@include('pelicula.form.pelicula_form')

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}


			</br>	</br>




		{!! Form::open(['route' => ['movie.destroy',$movie->id],'method'=>'delete']) !!}

		{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}

		{!!Form::close()!!}

	@endsection