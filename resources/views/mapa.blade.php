<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- [favicon] end -->

    <!-- jQuery --> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        function initialize() {
            var mapProp = {
                center: new google.maps.LatLng(9.928271299999999,-84.07207119999998),
                zoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
</head>

<body>
    <main>
    
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>

        <!-- BARRA DE NAVEGACION -->
        <nav>
            <div class="nav-wrapper" style="background-color: #152F49;">
            <div class="container">
            
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="#">INICIO</a></li>
                    <li><a href="#">DINARAC</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#" data-activates="dropdown1">DIGEPAZ<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                </ul>

                <!-- MENU MOVIL -->
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>
                    <li><a href="mobile.html">Mobile</a></li>
                </ul>
            </div>
            </div>
        </nav>

        <!-- CONTENT -->
        <div class="container">

            <div class="divider"></div>
            <div class="section">
                <div class="row valign-wrapper">
                    <div class="col s3"><img class="responsive-img" src="images/vicepaz-logo.png" title="Viceministerio de Paz" alt="Viceministerio de Paz"/>
                    </div>
                    <div class="col s9"><span class="flow-text">|&nbsp; &nbsp; &nbsp;Casas de Justicia</span></div>
                </div>
            </div>
            
            <div class="row">
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="#">Información</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="#">Preguntas</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav  center-align" href="mapa.html">Ubicacion</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="cuestionario.html">Mediar</a>
                </div>
            </div>
            
            <div class="row no-space" style="background-color:#193654;">            
                <div class="col s10 l4 map-top valign-center">
                    <p class="valign white-text">
                        <select>
                            <option value="1" selected>Desamparados</option>
                            <option value="2">San Pedro</option>
                            <option value="3">Heredia</option>
                            <option value="4">Tibas</option>
                        </select>
                        <label class="map-font">Provincia</label>
                    </p>
                </div>
                <div class="col s2 l8 map-top valign-wrapper">
                    <a href="sass.html" class="valign"><i class="material-icons map-font">search</i></a>
                </div>
                    
            </div>
            
            <!-- MAPA -->
            
            <div class="container1 row amber lighten-1">
                
                <!-- Tarjeta de informacion -->
                <div class="col s12 m5 l4 tag1">
                    <div class="card hoverable small">
                        <div class="card-image">
                            <img src="images/vicepaz-oficina.jpg">
                            <span class="card-title">Desamparados</span>
                        </div>
                        <div class="card-content">
                            <p>Esta es la direccion de la casa de justicias de Desamparados.</p>
                        </div>
                    </div>
                </div>
                
                <!-- muestra mapa -->
                <div id="googleMap" style="width:100%;height:380px;"></div>
            </div>           
                
                
        </div>   
    </main>    
</body>

<footer class="page-footer" style="background-color: #193654;">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Otros</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Redes de convivencia</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Documentacion</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Comision control y calif (CCCEP)</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Servicios espectaculos</a></li>                    
                    <li><a class="grey-text text-lighten-3" href="#!">Servicios DIGEPAZ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="background-color: #152F49;">
        <div class="container">
            2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#">Ministerio de Justicia y Paz</a>
        </div>
    </div>
</footer>
</html>