
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
				var errors = $.parseJSON(errorThrown.responseText);
				if(errors.nombre){
					$("#txtnombre").addClass("errortxt");
					$("#lblnombre").addClass("errorlbl");
					//Materialize.toast('I am a toast!', 4000);
				}else if(errors.apellido1){
					$("#txtapellido1").addClass("errortxt");
					$("#lblapellido1").addClass("errorlbl");
				}
			},

			complete: function(jqXHR, textStatus){
				if(textStatus=="success"){
					success();
				}
			}
		});	

	}
}

function previous(){
	var isInactive = $("#afectado").hasClass("inactive");
	if(isInactive){
		$("#btnAnterior").addClass("inactive");
		$("#afectado").removeClass("inactive");
		$("#contraparte").addClass("inactive");
		$("#btnSiguiente").attr("value","Siguiente");
		$("#btnSiguiente").attr("type","button");
	}
}


/*******************CAMBIO DE PAGINA****************************/
function success(){
	//CAMBIO DE FORMULARIO
	$("#btnAnterior").removeClass("inactive");
	$("#afectado").addClass("inactive");
	$("#contraparte").removeClass("inactive");
	$("#btnSiguiente").attr("value","Enviar");
	$("#btnSiguiente").attr("type","submit");
}

