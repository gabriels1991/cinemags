		<div class="form-group">
			{!!Form::label('Nombre')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa Nombre del Usuario'])!!}
			
		</div>
		<div class="form-group">
			{!!Form::label('Correo')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa Email'])!!}
						
		</div>
		<div class="form-group">
			{!!Form::label('Password')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Igresa Contraseña'])!!}
		</div>