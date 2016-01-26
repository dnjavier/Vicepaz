$(document).ready(function(){
	$("#cmbprovincia").change(function(){
		var id=$("#cmbprovincia").val();
		var url="provincia/"+id;
		$.ajax({
			url: url,
			dataType: 'json',
			error: function(error){
				console.log(error);
			},
			success: function(data){
				llenarCombo(data,"#cmbcanton");
				$("#cmbdistrito").html("<option value= disabled selected>Seleccionar</option>");
				$('select').material_select();
			}
		});
	});

	$("#cmbcanton").change(function(){
		var idProvincia=$("#cmbprovincia").val();
		var idCanton=$("#cmbcanton").val();
		var url="provincia/"+idProvincia+"/"+idCanton;
		$.ajax({
			url: url,
			dataType: 'json',
			error: function(error){
				console.log(error);
			},
			success: function(data){
				llenarCombo(data,"#cmbdistrito");
			}
			});
		});
	});
	
function llenarCombo(data, cmbname){
			console.log(data);
            $(cmbname).html("<option value= disabled selected>Seleccionar</option>");
            for(var x=0; x<data.length; x++){
            	$(cmbname).append(
            		"<option value='"+data[x].id+"'>"+data[x].nombre+"</option>"
            		);
            }
            $('select').material_select();
}

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
				if(errors.nombre)
					$("#lblnombre").addClass("errorlbl");
				if(errors.apellido1)
					$("#lblapellido1").addClass("errorlbl");

				if(errors.apellido2)
					
					$("#lblapellido2").addClass("errorlbl");
				if(errors.provincia)
					$("#lblprovincia").addClass("errorlbl");

				if(errors.canton)
					$("#lblcanton").addClass("errorlbl");

				if(errors.distrito)
					$("#lbldistrito").addClass("errorlbl");

				if(errors.telefono)
					$("#lbltelefono").addClass("errorlbl");

				if(errors.cedula)
					$("#lblcedula").addClass("errorlbl");

				if(errors.nacionalidad)
					$("#lblnacionalidad").addClass("errorlbl");

				if(errors.edad)
					$("#lbledad").addClass("errorlbl");

				if(errors.ocupacion)
					$("#lblocupacion").addClass("errorlbl");

				
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

