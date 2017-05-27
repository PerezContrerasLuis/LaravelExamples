    //Evento para insertar un genero
	$("#registro").click(function(){
		var dato  = $("#genre").val();
		var route = "http://localhost:8000/genero";
		var token =  $("#token").val();

		$.ajax({
			headers:{'X-CSRF-TOKEN':token},
			url: route,
			type:'post',
			dataType:'json',
			data:{genre:dato},
			success:function(){
				$("#msj_succes").fadeIn();
			}
		});
	});


	//funcion que carga la tabla de generos 
	$(document).ready(function(){
		var tablaDatos = $('#tabladatos');
		var route	   = "http://localhost:8000/generos";

		$.get(route,function(res){ console.log(res); 
			$(res).each(function(key,value){
				tablaDatos.append("<tr><td>"+value.genre+"</td><td><button class='btn btn-primary'>Editar</button>&nbsp<button class='btn btn-danger'>Eliminar</button></td></tr>");
			});
		});
	});