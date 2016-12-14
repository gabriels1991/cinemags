		<div class="form-group">
			{!!Form::label('Genero')!!}
			<input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">

			{!!Form::text('genre',null,['id'=>'genre','class'=>'form-control','placeholder'=>'Ingresa el genero'])!!}
			
		</div>
		