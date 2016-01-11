
/*******************FUNCION DE LOS BOTONES****************************/
function next(){
	//COMPROBACION DE LOS DATOS ANTES DE CONTINUAR AL SIGUIENET PASO
	var isInactive = $("#afectado").hasClass("inactive");
	if(!isInactive){
		$.ajax({
			url: "check",
			data: $("#afectado input, #afectado select").serialize(),
			type: 'post',
			dataType: 'json',
			error: function(errorThrown){
				//COMO MANEJAR EL ERROR
				console.log(errorThrown.responseText);
			},

			complete: function(jqXHR, textStatus){
				if(textStatus=="success"){
					success();
				}
			}
		});	

	}else $("form").submit();
}

function previous(){
	var isInactive = $("#afectado").hasClass("inactive");
	if(isInactive){
		$("#btnAnterior").addClass("inactive");
		$("#afectado").removeClass("inactive");
		$("#contraparte").addClass("inactive");
		$("#btnSiguiente").html('Siguiente');
	}
}


/*******************CAMBIO DE PAGINA****************************/
function success(){
	//CAMBIO DE FORMULARIO
	$("#btnAnterior").removeClass("inactive");
	$("#afectado").addClass("inactive");
	$("#contraparte").removeClass("inactive");
	$("#btnSiguiente").html('Enviar');
}

