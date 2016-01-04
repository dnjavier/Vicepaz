<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- [favicon] end -->

    <!-- jQuery --> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
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
                    <div class="col s9"><span class="flow-text">|&nbsp; &nbsp; &nbsp;Mediación</span></div>
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
                    <a class="waves-effect waves-light btn btn-nav  center-align" href="#">Experiencias</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="cuestionario.html">Mediar</a>
                </div>
            </div>
            
            
            <!-- Introduccion sobre Mediacion -->
            <div class="section">
                <div class="row valign-wrapper">
                    <p>Esto es una introduccion para el proceso de la mediacion</p>
                </div>
            </div>
            
            <!-- Cuestionario de filtro -->
            <div class="section">
                <div class="row">
                    <h5>Cuestionario</h5>
                    <form action="#">
                        <ul>
                            <li>1. En alguna ocasion su esposo se ha comportado con usted de forma violenta (fisica, psicologica, sexual o patrimonialmente)?
                                <!-- Check -->
                                <div class="answer">
                                    <p>
                                        <input name="group1" type="radio" id="test1" />
                                        <label for="test1">Si</label>
                                    </p>
                                    <p>
                                        <input name="group1" type="radio" id="test2" />
                                        <label for="test2">No</label>
                                    </p>
                                </div>
                            </li>

                            <li>2. Ha sentido usted temor o inseguridad en presencia de su esposo(a) alguna vez?
                                <!-- Check -->
                                <div class="answer">
                                    <p>
                                        <input name="group2" type="radio" id="test3" />
                                        <label for="test3">Si</label>
                                    </p>
                                    <p>
                                        <input name="group2" type="radio" id="test4" />
                                        <label for="test4">No</label>
                                    </p>
                                </div>
                            </li>

                            <li>3. En alguna ocasión ha tenido que solicitar medidas de protección, intervenciones familiares o piliciales debido a los incidentes de violencia?
                                <!-- Check -->
                                <div class="answer">
                                    <p>
                                        <input name="group3" type="radio" id="test5" />
                                        <label for="test5">Si</label>
                                    </p>
                                    <p>
                                        <input name="group3" type="radio" id="test6" />
                                        <label for="test6">No</label>
                                    </p>
                                </div>
                            </li>

                            <!-- Se debe optimizar para que no le aparezca al usuario hasta que haya dicho que si -->
                            <li>4. Si los hubo, hace cuanto tiempo atrás sucedió?
                                <div class="row answer">
                                    <div class="input-field col s7 m5 l4">
                                        <select>
                                            <option value="" disabled selected>Seleccionar</option>
                                            <option value="1">Mas de 6 meses</option>
                                            <option value="2">Mas de 1 año</option>
                                            <option value="3">Mas de 5 años</option>
                                        </select>
                                    </div>
                                </div>
                            </li>

                            <li>5. Actualmente, existen medidas de protección a favor de alguno de los dos?
                                <!-- Check -->
                                <div class="answer">
                                    <p>
                                        <input name="group4" type="radio" id="test7" />
                                        <label for="test7">Si</label>
                                    </p>
                                    <p>
                                        <input name="group4" type="radio" id="test8" />
                                        <label for="test8">No</label>
                                    </p>
                                </div>
                            </li>

                            <li>6. Amenaza su esposo(a) con continuar con la violencia?
                                <!-- Check -->
                                <div class="answer">
                                    <p>
                                        <input name="group5" type="radio" id="test9" />
                                        <label for="test9">Si</label>
                                    </p>
                                    <p>
                                        <input name="group5" type="radio" id="test10" />
                                        <label for="test10">No</label>
                                    </p>
                                </div>
                            </li>

                            <li>7. Se siente forzada(o) por él o ella para realizar este divorcio por mutuo acuerdo?
                                <!-- Check -->
                                <div class="answer">
                                    <p>
                                        <input name="group6" type="radio" id="test11" />
                                        <label for="test11">Si</label>
                                    </p>
                                    <p>
                                        <input name="group6" type="radio" id="test12" />
                                        <label for="test12">No</label>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </form>
                    <center>                    
                        <a class="waves-effect waves-light btn" href="#">SIGUIENTE</a>
                    </center>
                </div>                
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
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
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