@extends('layouts.admin')

@if(Session::has('message'))

<div class="alert  {{Session::get('clase')}} alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong> {{Session::get('message')}}</strong> 
 
</div>
@endif

@section('content')

<div class="users">
<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Email</th>
		<th>Operaciones</th>
	</thead>
	@foreach($usuarios as $user)
	<tbody>
		<th>{{$user->name}}</th>
		<th>{{$user->email}}</th>
		<th>

			<?php echo link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);?>
		

		</th>
	</tbody>
	@endforeach
</table>

{!! $usuarios->render() !!}

</div>
@stop