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