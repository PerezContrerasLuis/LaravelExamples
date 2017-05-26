
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

