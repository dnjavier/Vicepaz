
/*******************FUNCION DE LOS BOTONES****************************/
function next(){
	//COMPROBACION DE LOS DATOS ANTES DE CONTINUAR AL SIGUIENET PASO
	var isInactive = $("#afectado").hasClass("inactive");
	clearErrors();
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

				}else if(errors.apellido2){
					$("#txtapellido2").addClass("errortxt");
					$("#lblapellido2").addClass("errorlbl");
				}else if(errors.provincia){
					$("#cmbprovincia").addClass("errortxt");
					$("#lblprovincia").addClass("errorlbl");

				}else if(errors.canton){
					$("#cmbcanton").addClass("errortxt");
					$("#lblcanton").addClass("errorlbl");

				}else if(errors.distrito){
					$("#cmbdistrito").addClass("errortxt");
					$("#lbldistrito").addClass("errorlbl");

				}else if(errors.telefono){
					$("#txttelefono").addClass("errortxt");
					$("#lbltelefono").addClass("errorlbl");

				}else if(errors.cedula){
					$("#txtcedula").addClass("errortxt");
					$("#lblcedula").addClass("errorlbl");

				}else if(errors.edad){
					$("#cmbedad").addClass("errortxt");
					$("#lbledad").addClass("errorlbl");

				}else if(errors.ocupacion){
					$("#cmbocupacion").addClass("errortxt");
					$("#lblocupacion").addClass("errorlbl");

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

function clearErrors(){
	$("input").removeClass("errortxt");
	$("select").removeClass("errortxt");
	$("label").removeClass("errorlbl");
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

