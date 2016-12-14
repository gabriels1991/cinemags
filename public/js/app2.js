$('#registro').click(function(){
	var dato=$('#genre').val();
	var token=$('#token').val();

	var route='http://localhost:8000/genero';

	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN': token},
		type:'POST',
		dataType:'json',
		data:{genre:dato},

		success:function(){
			$('#genre').val('');
			$('#alert-success').fadeIn();

		},
		error:function(msj){
				
				$('#msj').html(msj.responseJSON.genre);
				$('#alert-danger').fadeIn();

			}
	});

});


$(document).ready(function(){
	cargarDatos();
});

function cargarDatos(){

	var tablaDatos =$('#datos');
	var route='http://localhost:8000/generos'
	$('#datos').empty();
	$.get(route,function(res){
		$(res).each(function(key,value){
			tablaDatos.append("<tr><td>"+value.genre+"</td><td><button OnClick='Mostrar(this)' id='editar' value="+value.id+" class='btn btn-primary' data-toggle='modal' data-target='#myModal' style='margin-right:20px;'>Editar</button>  <button id='eliminar' OnClick='Eliminar(this)' value="+value.id+" class='btn btn-danger'>Eliminar</button></td></tr>");

		});

	});

}


//Llamada a modal y paso de id de boton
	function Mostrar(btn){
	var route ='http://localhost:8000/genero/'+btn.value+'/edit';
	$.get(route,function(res){
		$('#genre').val(res.genre);
		$('#id').val(res.id);
	});

	}





	$('#actualizar').click(function(){
		var value = $('#id').val();
		var dato=$('#genre').val();
		var route = 'http://localhost:8000/genero/'+value+'';
		var token =$('#token').val();

		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'PUT',
			dataType: 'json',
			data: {genre: dato},
			success:function(){
			cargarDatos();
			$('#myModal').modal('toggle');
			$('#alert-success').fadeIn();			
			}

		});

	});



function Eliminar(btn2){
	var value2=btn2.value;
	var token =$('#token').val();
	var route = "http://localhost:8000/genero/"+value2;

	
    var respuesta = confirm("Esta seguro de elimnra este registro?");
    if (respuesta == true) {

    		$.ajax({
			url: route,
			headers: {'X-CSRF-TOKEN': token},
			type: 'DELETE',
			dataType: 'json',
			
			success:function(){
			cargarDatos();
			}
			
		});
       
    } else {
       
    }



}




//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

$(document).on('click','.pagination a',function(e){
e.preventDefault();
var page = $(this).attr('href').split('page=')[1];

route="http://localhost:8000/usuario"

		$.ajax({
			url: route,
			data: {page: page},			
			type: 'GET',
			dataType: 'json',			
			success:function(data){
			$('.users').html(data);
			}
			
		});
});

