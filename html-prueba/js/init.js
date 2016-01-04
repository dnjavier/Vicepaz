(function($) {
    $(function() {

        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('select').material_select();
        $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });

    }); // End Document Ready
    
    
    //Si la pregunta #3 es SI, muestra mas. (cuestionario.html)
    $(function(){    
        $("input[name='group3']:radio").change(
            function(){
                var isChecked = $("input[id='test5']:checked").val();
                if(isChecked == 'on'){
                    $("#div2-question3").removeClass("hide");
                } else {
                    $("#div2-question3").addClass("hide");
                }
            }
        );
    });
    
    //clasificacion.html asignar los select options segun otro select
    $(function(){
        var vecinales = {"1": "Linderos, colindancias o servidumbres",
                         "2": "Ruidos excesivos",
                         "3": "Problemas con animales",
                         "4": "Daños menores a la propiedad",
                         "5": "Problemas con basura o contaminación",
                         "6": "Otros"
                        };
        
        var familia =   {"1": "Cuotas alimentarias",
                         "2": "Régimen de visitas",
                         "3": "Acuerdos socio-económicos de ayuda",
                         "4": "Acuerdo de cuido de un familiar",
                         "5": "Otros"
                        };
        
        var prestamos = {"1": "Arreglos de pago",
                         "2": "Otros"
                        };
        
        var consumidor ={"1": "Garantías",
                         "2": "Defectos de fábrica",
                         "3": "Incumplimientos de pago",
                         "4": "Arreglos de pago",
                         "5": "Otros"
                        };
        
        var laboral =   {"1": "Diferencias",
                         "2": "Acuerdos de pago",
                         "3": "Otros"
                        };

        
        //$('#select_categoria option:gt(0)').remove(); // remove all options, but not the first 
        $('#select_naturaleza').change( function() {
            var naturaleza = $('#select_naturaleza').find(":selected").val();
            var $el = $("#select_categoria");
            //$el.empty(); // remove old options
            $('#select_categoria option:gt(0)').remove(); // remove all options, but not the first 
            
            //Vecinales-Comunales
            if(naturaleza == 1){                
                $.each(vecinales, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            } 
            //Familia
            if(naturaleza == 2){
                $.each(familia, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            } 
            //Prestamos-Deudas
            if(naturaleza == 3){
                $.each(prestamos, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            }
            //Consumidor
            if(naturaleza == 4){
                $.each(consumidor, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            }
            //Laboral
            if(naturaleza == 5){
                $.each(laboral, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            } 
            
            $('select').material_select();
        });
         
    });
    
    
})(jQuery); // End of jQuery name space