<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- [favicon] begin -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}" /> -->
    <!-- [favicon] end -->    
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
                    <li><a href="#">INICIO</a></li>
                    <li><a href="#">DINARAC</a></li>
                    <li><a href="#">DIGEPAZ</a></li>
                </ul>
            </div>
            </div>
        </nav>
        
        <div class="container">

            <div class="divider"></div>
            <div class="section">
                <div class="row valign-wrapper">
                    <div class="col s3"><img class="responsive-img" src="{{asset('assets/images/vicepaz-logo.png')}}" title="Viceministerio de Paz" alt="Viceministerio de Paz"/>
                    </div>
                    <div class="col s9"><span class="flow-text">|&nbsp; &nbsp; &nbsp;Casas de Justicia</span></div>
                </div>
            </div>
            
            <div class="row">
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="{{route('casa')}}">Información</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="{{route('preguntas')}}">Preguntas</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav  center-align" href="{{route('mapa')}}">Ubicacion</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="{{route('clasificacion')}}">Mediar</a>
                </div>
            </div>
            
            @yield('body')

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Iniciar Sesión</h4>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Usuario</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="icon_telephone" type="password" class="validate">
                                    <label for="icon_telephone">Contraseña</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Entrar</a>
                </div>
            </div>
            
        </div>
    </main>

    <!-- jQuery --> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('assets/js/materialize.js')}}"></script>
    <script src="{{asset('assets/js/init.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/jquery.maskedinput.js')}}"></script>
</body>
<footer class="page-footer" style="background-color: #193654;">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Este es el pie de pagina</h5>
                <p class="grey-text text-lighten-4">Legislacion Vigente, ILANUD, Espectaculos Publicos, Observatorio de la Violencia</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Otros</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Redes de convivencia</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Documentacion</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Comision control y calif (CCCEP)</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Servicios espectaculos</a></li>                    
                    <li><a class="grey-text text-lighten-3" href="#!">Servicios DIGEPAZ</a></li>                    
                    <li><a class="grey-text text-lighten-3 modal-trigger" href="#modal1">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="background-color: #152F49;">
        <div class="container">
            Copyright © 2016. All rights reserved
            <a class="grey-text text-lighten-4 right" href="#">Ministerio de Justicia y Paz</a>
        </div>
    </div>
</footer>
</html>