(function($) {
    $(function() {

        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('select').material_select();
        $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });
        
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();

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
    
    //Ubicación provincia, canton y distrito
    $(function(){
        var SanJose = {  "1": "San Jose",
                         "2": "Escazu",
                         "3": "Desamparados",
                         "4": "Puriscal",
                         "5": "Tarrazu",
                         "6": "Aserri",
                         "7": "Mora",
                         "8": "Goicoechea",
                         "9": "Santa Ana",
                         "10": "Alajuelita",
                         "11": "Vazques de Coronado",
                         "12": "Acosta",
                         "13": "Tibas",
                         "14": "Moravia",
                         "15": "Montes de Oca",
                         "16": "Turrubares",
                         "17": "Dota",
                         "18": "Curridabat",
                         "19": "Perez Zeledon",
                         "20": "Leon Cortes"
                        };
        
        var Alajuela =  {"21": "Alajuela",
                         "22": "San Ramon",
                         "23": "Grecia",
                         "34": "San Mateo",
                         "25": "Atenas",
                         "26": "Naranjo",
                         "27": "Palmares",
                         "28": "Poas",
                         "29": "Orotina",
                         "30": "San Carlos",
                         "31": "Alfaro Ruiz",
                         "32": "Valverde Vega",
                         "33": "Upala",
                         "34": "Los Chiles",
                         "35": "Guatuso"
                        };
        
         var Cartago =  {"36": "Cartago",
                         "37": "Paraiso",
                         "38": "La Union",
                         "39": "Jimenez",
                         "40": "Turrealba",
                         "41": "Oreamuno",
                         "42": "Alvarado",
                         "43": "El guarco"
                        };
        
        var Heredia =  {"44": "Heredia",
                         "45": "Barva",
                         "46": "Santo Domingo",
                         "47": "Santa Barbara",
                         "48": "San Rafael",
                         "49": "San Isidro",
                         "50": "Belen",
                         "51": "Flores",
                         "52": "San Pablo",
                         "53": "Sarapiqui"
                        };
        
        var Guanacaste ={"54": "Liberia",
                         "55": "Nicoya",
                         "56": "Santa Cruz",
                         "57": "Bagaces",
                         "58": "Carrillo",
                         "59": "Canas",
                         "60": "Abangares",
                         "61": "Tilaran",
                         "62": "Nandayure",
                         "63": "La Cruz",
                         "64": "Hojancha"
                        };
        
        var Puntarenas ={"65": "Puntarenas",
                         "66": "Esparza",
                         "67": "Buenos Aires",
                         "68": "Montes de Oro",
                         "69": "Osa",
                         "70": "Aguirre",
                         "71": "Golfito",
                         "72": "Coto Brus",
                         "73": "Parrite",
                         "74": "Corredores",
                         "75": "Garabito"
                        };
        
        var Limon =  {   "76": "Limon",
                         "77": "Pococi",
                         "78": "Siquirres",
                         "79": "Guacimo",
                         "80": "Matina",
                         "81": "Talamanca"
                        };

        
        $('#select_provincia').change( function() {
            var provincia = $('#select_provincia').find(":selected").val();
            var $el = $("#select_canton");
            $('#select_canton option:gt(0)').remove(); // remove all options, but not the first 
            
            if(provincia == 1){                
                llenaCombo(SanJose);
            } 
            if(provincia == 2){
                llenaCombo(Alajuela);
            } 
            if(provincia == 3){
                llenaCombo(Cartago);
            }
            if(provincia == 4){
                llenaCombo(Heredia);
            }
            if(provincia == 5){
                llenaCombo(Guanacaste);
            } 
            if(provincia == 6){
                llenaCombo(Puntarenas);
            } 
            if(provincia == 7){
                llenaCombo(Limon);
            } 
            
            function llenaCombo(valores){
                $.each(valores, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            }
            
            $('select').material_select();
        });
        
        var subsanjose = {
                         "1": "Carmen",
                         "2": "Merced",
                         "3": "Hospital",
                         "4": "Catedral",
                         "5": "Zapote",
                         "6": "San Francisco de Dos Rios",
                         "7": "Uruca",
                         "3": "Mata Redonda",
                         "4": "Pavas",
                         "5": "Hatillo",
                         "6": "San Sebastian"
                        }
        
        var escazu = {
                         "1": "Escazu",
                         "2": "San Antonio",
                         "3": "San Rafael"
                        }
        var desamparados = {
                         "1": "Desamparados",
                         "2": "San Miguel",
                         "3": "San Juan de Dios",
                         "4": "San Rafael Arriba",
                         "5": "San Antonio",
                         "6": "Frailes",
                         "7": "Patarra",
                         "8": "San Cristobal",
                         "9": "Rosario",
                         "10": "Damas",
                         "11": "San Rafael Abajo",
                         "12": "Gravilia",
                         "13": "Los Guido"
                        }
        var puriscal = {
                         "1": "Santiago",
                         "2": "Mercedes Sur",
                         "3": "Barbacoas",
                         "4": "Grifo Alto",
                         "5": "San Rafael",
                         "6": "Candelaria",
                         "7": "Desamparaditos",
                         "8": "San Antonio",
                         "9": "Chires"
                        }
        var tarrazu = {
                         "1": "San Marcos",
                         "2": "San Lorenzo",
                         "3": "San Carlos"
                        }
        var aserri = {
                         "1": "Aserri",
                         "2": "Tarbaca",
                         "3": "Vuelta de Jorco",
                         "4": "San Gabriel",
                         "5": "Legua",
                         "6": "Monterrey",
                         "7": "Salitrillos"
                        }
        var mora = {
                         "1": "Colon",
                         "2": "Guayabo",
                         "3": "Tabarcia",
                         "4": "Piedras Negras",
                         "5": "Picagres"
                        }
        var Goicoechea = {
                         "1": "Guadalupe",
                         "2": "San Francisco",
                         "3": "Calle Blancos",
                         "4": "Mata de Platano",
                         "5": "Ipís",
                         "6": "Rancho Redondo",
                         "7": "Purral"
                        }
        var santaana = {
                         "1": "Santa Ana",
                         "2": "Salitral",
                         "3": "Pozos",
                         "4": "Uruca",
                         "5": "Piedades",
                         "6": "Brasil",
                         "7": "Purral"
                        }
        var alajuelita = {
                         "1": "Alajuelita",
                         "2": "San Josecito",
                         "3": "San Antonio",
                         "4": "Concepcion",
                         "5": "San Felipe"
                        }
        var vazquez = {
                         "1": "San Isidro",
                         "2": "San Rafael",
                         "3": "Dulce Nombre de Jesus",
                         "4": "Patalillo",
                         "5": "Cascajal"
                        }
        var acosta = {
                         "1": "San Ignacio de Acosta",
                         "2": "Guaitil",
                         "3": "Palmichal",
                         "4": "Cangrejal",
                         "5": "Sabanillas"
                        }
        var tibas = {
                         "1": "San Juan",
                         "2": "Cinco Esquinas",
                         "3": "Anselmo Llorente",
                         "4": "Leon XIII",
                         "5": "Colima"
                        }
        var moravia = {
                         "1": "San Jeronimo",
                         "2": "San Vicente",
                         "3": "Trinidad"
                        }
        var montesdeoca = {
                         "1": "San Pedro",
                         "2": "Sabanilla",
                         "3": "Mercedes",
                         "4": "San Rafael"
                        }
        var turrubares = {
                         "1": "San Pablo",
                         "2": "San Pedro",
                         "3": "San Luis",
                         "4": "San Juan de Mata",
                         "5": "Carara"
                        }
        var dota = {
                         "1": "Santa Maria",
                         "2": "Jardin",
                         "3": "Copey"
                        }
        var curridabat = {
                         "1": "Curridabat",
                         "2": "Granadilla",
                         "3": "Sanchez",
                         "4": "Tirrases"
                        }
        var perez = {
                         "1": "San Isisdro del General",
                         "2": "General",
                         "3": "Daniel Flores",
                         "4": "Rivas",
                         "5": "San Pedro",
                         "6": "Platanares",
                         "7": "Pejibaye",
                         "8": "Cajon",
                         "9": "Baru",
                         "10": "Rio Nuevo",
                         "11": "Paramo"
                        }
        var leon = {
                         "1": "San Pablo",
                         "2": "San Andres",
                         "3": "Llano Bonito",
                         "4": "San Isidro",
                         "5": "Santa Cruz",
                         "6": "San Antonio"
                        }
        
        //Alajuela
        var subalajuela = {
                         "1": "Alajuela",
                         "2": "San Jose",
                         "3": "Carrizal",
                         "4": "San Antonio",
                         "5": "Guacima",
                         "6": "San Isidro",
                         "7": "Sanbanilla",
                         "3": "San Rafael",
                         "4": "Rio Segundo",
                         "5": "Desamparados",
                         "6": "Turrucares",
                         "7": "Tambor",
                         "8": "Garita",
                         "9": "Sarapiquí"
                        }
        
        var sanramon = {
                         "1": "San Ramon",
                         "2": "Santiago",
                         "3": "San Juan",
                         "4": "San Antonio",
                         "5": "Piedades Norte",
                         "6": "Piedades Sur",
                         "7": "San Rafael",
                         "3": "San Isidro",
                         "4": "Angeles",
                         "5": "Alfaro",
                         "6": "Volio",
                         "7": "Concepcion",
                         "8": "Zapotal",
                         "9": "Peñas Blancas"
                        }
        var grecia = {
                         "1": "Grecia",
                         "2": "San Isidro",
                         "3": "San Jose",
                         "4": "San Roque",
                         "5": "Tacares",
                         "6": "Rio Cuarto",
                         "7": "Puente de Piedra",
                         "8": "Bolivar"
                        }
        
        var sanmateo = {
                         "1": "San Mateo",
                         "2": "Jesus Maria",
                         "3": "Desmonte"
                        }
        
        var atenas = {
                         "1": "Atenas",
                         "2": "Jesus",
                         "3": "Mercedes",
                         "4": "San Isidro",
                         "5": "Concepcion",
                         "6": "San Jose",
                         "7": "Santa Eulalia",
                         "8": "Escobal"
                        }
        var naranjo = {
                         "1": "Naranjo",
                         "2": "San Miguel",
                         "3": "San Jose",
                         "4": "Cirri Sur",
                         "5": "San Jeronimo",
                         "6": "San Juan",
                         "7": "Rosario",
                         "8": "Palmitos"
                        }
        var palmares = {
                         "1": "Palmares",
                         "2": "Zaragoza",
                         "3": "Buenos Aires",
                         "4": "Santiago",
                         "5": "Candelaria",
                         "4": "Esquipulas",
                         "5": "Granja"
                        }
        var poas = {
                         "1": "San Pedro",
                         "2": "San Juan",
                         "3": "San Rafael",
                         "4": "Carrillos",
                         "5": "Sabana Redonda"
                        }
        var orotina = {
                         "1": "Orotina",
                         "2": "Masmate",
                         "3": "Hacienda Vieja",
                         "4": "Coyolar",
                         "5": "Ceiba"
                        }
        var sancarlos = {
                         "1": "Quesada",
                         "2": "Florencia",
                         "3": "Buena Vista",
                         "4": "Aguas Zarcas",
                         "5": "Venecia",
                         "6": "Pital",
                         "7": "Fortuna",
                         "8": "Tigra",
                         "9": "Palmera",
                         "10": "Venado",
                         "11": "Cutris",
                         "12": "Pocosol",
                         "13": "Monterrey"
                        }
        var alfaroruiz = {
                         "1": "Zarcero",
                         "2": "Laguna",
                         "3": "Tapezco",
                         "4": "Guadalupe",
                         "5": "Palmira",
                         "4": "Zapote",
                         "5": "Brisas"
                        }
        var valverdevega = {
                         "1": "Sarchi Norte",
                         "2": "Sarchi Sur",
                         "3": "Toro Amarillo",
                         "4": "San Pedro",
                         "5": "Rodriguez"
                        }
        var upala = {
                         "1": "Upala",
                         "2": "Aguas Claras",
                         "3": "San Jose",
                         "4": "Bijagua",
                         "5": "Delicias",
                         "6": "Dos Rios",
                         "7": "Yoliyllal"
                        }
        var loschiles = {
                         "1": "Los Chiles",
                         "2": "Caño Negro",
                         "3": "El Amparo",
                         "4": "San Jorge"
                        }
        var guatuso = {
                         "1": "San Rafael",
                         "2": "Buena Vista",
                         "3": "Cote",
                         "4": "Katira"
                        }
        
        //Cartago
        var subcartago = {
                         "1": "Oriental",
                         "2": "Occidental",
                         "3": "Carmen",
                         "4": "San Nicolas",
                         "5": "Aguacaliente",
                         "6": "Guadalupe",
                         "7": "Corralillo",
                         "3": "Tierra Blanca",
                         "4": "Dulce Nombre",
                         "5": "Llano Grande",
                         "6": "Quebradilla"
                        }
        
        var paraiso = {
                         "1": "Paraiso",
                         "2": "Santiago",
                         "3": "Orosi",
                         "4": "San Antonio",
                         "5": "Cachi",
                         "6": "Llanos de Santa Lucia"
                        }
        var launion = {
                         "1": "Tres Rios",
                         "2": "San Diego",
                         "3": "San Juan",
                         "4": "San Rafael",
                         "5": "Concepcion",
                         "6": "Dulce Nombre",
                         "7": "San Ramon",
                         "8": "Rio Azul"
                        }
        
        var jimenez = {
                         "1": "Juan Viñas",
                         "2": "Tucurrique",
                         "3": "Pejibaye"
                        }
        
        var turrialba = {
                         "1": "Turrialba",
                         "2": "La Suiza",
                         "3": "Peralta",
                         "4": "Santa Cruz",
                         "5": "Santa Teresita",
                         "6": "Pavones",
                         "7": "Tuis",
                         "8": "Tayutic",
                         "9": "Santa Rosa",
                         "10": "Tes Equis",
                         "11": "La Isabel",
                         "12": "Chirripo"
                        }
        var alavarado = {
                         "1": "Pacayas",
                         "2": "Cervantes",
                         "3": "Capellades"
                        }
        var oreamuno = {
                         "1": "San Rafael",
                         "2": "Cot",
                         "3": "Potrero Cerrado",
                         "4": "Santa Rosa",
                         "5": "Cipreses"
                        }
        var elguarco = {
                         "1": "Tejar",
                         "2": "San Isidro",
                         "3": "Tobosi",
                         "4": "Patio de Agua"
                        }
        
        //Heredia
        var subheredia = {
                         "1": "Heredia",
                         "2": "Mercedes",
                         "3": "San Francisco",
                         "4": "Ulloa",
                         "5": "Varablanca"
                        }
        
        var barva = {
                         "1": "Barva",
                         "2": "San Pedro",
                         "3": "San Pablo",
                         "4": "San Roque",
                         "5": "Santa Lucia",
                         "6": "San Jose de la Montaña"
                        }
        var santodomingo = {
                         "1": "Santo Domingo",
                         "2": "San Vicente",
                         "3": "San Miguel",
                         "4": "Paracito",
                         "5": "Santo Tomas",
                         "6": "Santa Rosa",
                         "7": "Tures",
                         "8": "Para"
                        }
        
        var santabarbara = {
                         "1": "Santa Barbara",
                         "2": "San Pedro",
                         "3": "San Juan",
                         "4": "Jesus",
                         "5": "Santo Domingo",
                         "6": "Puraba"
                        }
        
        var sanrafael = {
                         "1": "San Rafael",
                         "2": "San Josecito",
                         "3": "Santiago",
                         "4": "Angeles",
                         "5": "Concepcion"
                        }
        var sanisidro = {
                         "1": "San Isidro",
                         "2": "San Jose",
                         "3": "Concepcion",
                         "4": "San Francisco"
                        }
        var belen = {
                         "1": "San Antonio",
                         "2": "Ribera",
                         "3": "Asuncion"
                        }
        var flores = {
                         "1": "San Joaquin de Flores",
                         "2": "Llorente",
                         "3": "Barrantes"
                        }
        var sanpablo = {
                         "1": "San Pablo",
                         "2": "Rincon de Sabanilla"
                        }
        var sarapíqui = {
                         "1": "Puerto Viejo",
                         "2": "La Virgen",
                         "3": "Horquetas",
                         "4": "Llanuras del Gaspar",
                         "5": "Cureña"
                        }
        
        //Guanacaste
        var liberia = {
                         "1": "Liberia",
                         "2": "Cañas Dulces",
                         "3": "Nacascolo",
                         "4": "Matorga",
                         "5": "Curubande"
                        }
        
        var nicoya = {
                         "1": "Nicoya",
                         "2": "Mansion",
                         "3": "San Antonio",
                         "4": "Quebrada Honda",
                         "5": "Samara",
                         "6": "Nosara",
                         "7": "Belen de Nosarita"
                        }
        var santacruz = {
                         "1": "Santa Cruz",
                         "2": "Bolson",
                         "3": "Veintisiete de Abril",
                         "4": "Tempare",
                         "5": "Cartagena",
                         "6": "Cuajiniquil",
                         "7": "Diria",
                         "8": "Cabo Velas",
                         "9": "Tamarindo"
                        }
        
        var bagaces = {
                         "1": "Bagaces",
                         "2": "Fortuna",
                         "3": "Mogote",
                         "4": "Rio Naranjo"
                        }
        
        var carrillo = {
                         "1": "Filadelfia",
                         "2": "Palmira",
                         "3": "Sardinal",
                         "4": "Belen"
                        }
        var canas = {
                         "1": "Cañas",
                         "2": "Palmira",
                         "3": "San Miguel",
                         "4": "Bebedero",
                         "5": "Porosal"
                        }
        var abangares = {
                         "1": "Juntas",
                         "2": "Sierra",
                         "3": "San Juan",
                         "4": "Colorado"
                        }
        var tilaran = {
                         "1": "Tilaran",
                         "2": "Quebrada Grande",
                         "3": "Tronadora",
                         "4": "Santa Rosa",
                         "5": "Libano",
                         "6": "Tierras Morenas",
                         "7": "Arenal"
                        }
        var nandayure = {
                         "1": "Carmona",
                         "2": "Santa Rita",
                         "3": "Zapotal",
                         "4": "San Pablo",
                         "5": "Porvenir",
                         "6": "Bejuco"
                        }
        var lacruz = {
                         "1": "La Cruz",
                         "2": "Santa Cecilia",
                         "3": "Garita",
                         "4": "Santa Elena"
                        }
        
        var hojancha = {
                         "1": "Hojancha",
                         "2": "Monte Romo",
                         "3": "Puerto Carrillo",
                         "4": "Huacas"
                        }
        
        
        //Puntarenas
        var garabito = {
                         "1": "Jaco",
                         "2": "Tarcoles"
                        }
        
        var subpuntarenas = {
                         "1": "Puntarenas",
                         "2": "Pitahaya",
                         "3": "Chomes",
                         "4": "Lepanto",
                         "5": "Paquera",
                         "6": "Manzanillo",
                         "7": "Guacimal",
                         "8": "Barranca",
                         "9": "Monte Verde",
                         "10": "Isla del Coco",
                         "11": "Cobano",
                         "12": "Chacarita",
                         "13": "Chira",
                         "11": "Acapulco",
                         "12": "El Roble",
                         "13": "Arancibia"
                        }
        var esparza = {
                         "1": "Espiritu Santo",
                         "2": "San Juan Grande",
                         "3": "Macacona",
                         "4": "San Rafael",
                         "5": "San Jeronimo",
                         "6": "Cuajiniquil",
                         "7": "Diria",
                         "8": "Cabo Velas",
                         "9": "Tamarindo"
                        }
        
        var buenosaires = {
                         "1": "Bagaces",
                         "2": "Fortuna",
                         "3": "Mogote",
                         "4": "Rio Naranjo"
                        }
        
        var carrillo = {
                         "1": "Filadelfia",
                         "2": "Palmira",
                         "3": "Sardinal",
                         "4": "Belen"
                        }
        var canas = {
                         "1": "Cañas",
                         "2": "Palmira",
                         "3": "San Miguel",
                         "4": "Bebedero",
                         "5": "Porosal"
                        }
        var abangares = {
                         "1": "Juntas",
                         "2": "Sierra",
                         "3": "San Juan",
                         "4": "Colorado"
                        }
        var tilaran = {
                         "1": "Tilaran",
                         "2": "Quebrada Grande",
                         "3": "Tronadora",
                         "4": "Santa Rosa",
                         "5": "Libano",
                         "6": "Tierras Morenas",
                         "7": "Arenal"
                        }
        var nandayure = {
                         "1": "Carmona",
                         "2": "Santa Rita",
                         "3": "Zapotal",
                         "4": "San Pablo",
                         "5": "Porvenir",
                         "6": "Bejuco"
                        }
        var lacruz = {
                         "1": "La Cruz",
                         "2": "Santa Cecilia",
                         "3": "Garita",
                         "4": "Santa Elena"
                        }
        
        var hojancha = {
                         "1": "Hojancha",
                         "2": "Monte Romo",
                         "3": "Puerto Carrillo",
                         "4": "Huacas"
                        }
        
        
        $('#select_canton').change( function() {
            var canton = $('#select_canton').find(":selected").val();
            var $el = $("#select_distrito");
            $('#select_distrito option:gt(0)').remove(); // remove all options, but not the first 
            
            //San Jose
            if(canton == 1){                
                llenaCombo(subsanjose);
            } 
            if(canton == 2){
                llenaCombo(escazu);
            } 
            if(canton == 3){
                llenaCombo(desamparados);
            } 
            if(canton == 4){                
                llenaCombo(puriscal);
            } 
            if(canton == 5){
                llenaCombo(tarrazu);
            } 
            if(canton == 6){
                llenaCombo(aserri);
            } 
            if(canton == 7){
                llenaCombo(mora);
            } 
            if(canton == 8){
                llenaCombo(Goicoechea);
            } 
            if(canton == 9){
                llenaCombo(santaana);
            } 
            if(canton == 10){
                llenaCombo(alajuelita);
            }  
            if(canton == 11){
                llenaCombo(vazquez);
            }   
            if(canton == 12){
                llenaCombo(acosta);
            }   
            if(canton == 13){
                llenaCombo(tibas);
            }   
            if(canton == 14){
                llenaCombo(moravia);
            }    
            if(canton == 15){
                llenaCombo(montesdeoca);
            }     
            if(canton == 16){
                llenaCombo(turrubares);
            }   
            if(canton == 17){
                llenaCombo(dota);
            }   
            if(canton == 18){
                llenaCombo(curridabat);
            }    
            if(canton == 19){
                llenaCombo(perez);
            }     
            if(canton == 20){
                llenaCombo(leon);
            } 
            
            //Alajuela
            if(canton == 21){                
                llenaCombo(subalajuela);
            } 
            if(canton == 22){
                llenaCombo(sanramon);
            } 
            if(canton == 23){
                llenaCombo(grecia);
            } 
            if(canton == 24){                
                llenaCombo(sanmateo);
            } 
            if(canton == 25){
                llenaCombo(atenas);
            } 
            if(canton == 26){
                llenaCombo(naranjo);
            } 
            if(canton == 27){
                llenaCombo(palmares);
            } 
            if(canton == 28){
                llenaCombo(poas);
            } 
            if(canton == 29){
                llenaCombo(orotina);
            } 
            if(canton == 30){
                llenaCombo(sancarlos);
            }  
            if(canton == 31){
                llenaCombo(alfaroruiz);
            }   
            if(canton == 32){
                llenaCombo(valverdevega);
            }   
            if(canton == 33){
                llenaCombo(upala);
            }   
            if(canton == 34){
                llenaCombo(loschiles);
            }    
            if(canton == 35){
                llenaCombo(guatuso);
            }
            
            //Heredia
            if(canton == 21){                
                llenaCombo(subheredia);
            } 
            if(canton == 22){
                llenaCombo(barva);
            } 
            if(canton == 23){
                llenaCombo(santodomingo);
            } 
            if(canton == 24){                
                llenaCombo(santabarbara);
            } 
            if(canton == 25){
                llenaCombo(sanrafael);
            } 
            if(canton == 26){
                llenaCombo(sanisidro);
            } 
            if(canton == 27){
                llenaCombo(belen);
            } 
            if(canton == 28){
                llenaCombo(flores);
            } 
            if(canton == 29){
                llenaCombo(sanpablo);
            } 
            if(canton == 30){
                llenaCombo(sarapíqui);
            }
            
            //Guanacaste
            if(canton == 32){                
                llenaCombo(liberia);
            } 
            if(canton == 33){
                llenaCombo(nicoya);
            } 
            if(canton == 34){
                llenaCombo(santacruz);
            } 
            if(canton == 35){                
                llenaCombo(bagaces);
            } 
            if(canton == 36){
                llenaCombo(carrillo);
            } 
            if(canton == 37){
                llenaCombo(canas);
            } 
            if(canton == 38){
                llenaCombo(abangares);
            } 
            if(canton == 39){
                llenaCombo(tilaran);
            } 
            if(canton == 40){
                llenaCombo(nandayure);
            } 
            if(canton == 41){
                llenaCombo(lacruz);
            }
            if(canton == 41){
                llenaCombo(hojancha);
            }
            
            
            function llenaCombo(valores){
                $.each(valores, function(value,key) {
                    $el.append($("<option></option>")
                               .attr("value", value).text(key));
                });
            }
            
            $('select').material_select();
        });
         
    });
    
    
})(jQuery); // End of jQuery name space