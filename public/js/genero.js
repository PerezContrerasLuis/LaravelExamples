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
		cargar();
	});

	function cargar(){
		$("#tabladatos").empty();
		var tablaDatos = $('#tabladatos');
		var route	   = "http://localhost:8000/generos";
		

		$.get(route,function(res){ console.log(res); 
			$(res).each(function(key,value){
				tablaDatos.append("<tr><td>"+value.genre+"</td><td><button class='btn btn-primary' value="+value.id+" onclick='Mostrar(this)' data-toggle='modal' data-target='#myModal'>Editar</button>&nbsp<button class='btn btn-danger'>Eliminar</button></td></tr>");
			});
		});
	}

	//funcion para mostrar los datos en la modal editar genero
	 function Mostrar(btn){
		console.log(btn.value);
		var route = 'http://localhost:8000/genero/'+btn.value+'/edit';

		$.get(route,function(res){
			$("#id").val(res.id);
			$("#genre").val(res.genre);
		});
	}

	//funcion para actualizar 
	$("#actualizar").click(function(){
		var value  = $("#id").val();
		var dato   = $("#genre").val();
		var token  = $("#token").val();

		var route  = 'http://localhost:8000/genero/'+value+'';

		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:'PUT',
			dataType:'json',
			data:{genre:dato},
			success:function(){
					cargar();
					$("#myModal").modal("toggle");
					$("#msj_edit").fadeIn();
			}
		});
	});