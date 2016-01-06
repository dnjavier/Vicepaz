<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard/materialize.css">
    <link rel="stylesheet" href="css/dashboard/style.css">
    
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- [favicon] end -->

    <!-- jQuery --> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</head>

<body style="background-color: #F5F5F5;">
    <main>

        <!-- BARRA DE NAVEGACION -->
        <nav style="background-color: #F5F5F5;">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo" style="color: #7a7a7a;">Casos</a>
                <!-- nav bar -->
                <ul class="right">
                    <li><a href="collapsible.html" style="color: #7a7a7a;">Boton 1</a></li>
                    <li><a href="mobile.html" style="color: #7a7a7a;">Boton 2</a></li>
                </ul>

                <!-- side bar -->
                <ul id="slide-out" class="side-nav fixed" style="background-color: #37474F !important;">
                    <div class="header-sidebar">
                        <div class="">
                            <div class="center-align">
                                <img class="img-sidebar" src="images/vicepaz-logo.png" title="Viceministerio de Paz" alt="Viceministerio de Paz"/>  
                            </div>
                        </div>
                        <div class="center-align">
                            <span style="color: #ECEFF1">Javier Delgado</span>
                        </div>
                    </div>
                    <li><a href="#!" style="color: rgba(255, 255, 255, 0.56);"><i class="material-icons left">home</i>Inicio</a></li>
                    <li><a href="#!" style="color: rgba(255, 255, 255, 0.56);"><i class="material-icons left">inbox</i>Mensajes</a></li>
                    <li><a href="#!" style="color: rgba(255, 255, 255, 0.56);"><i class="material-icons left">forum</i>Casos</a></li>
                    <li><a href="#!" style="color: rgba(255, 255, 255, 0.56);"><i class="material-icons left">flag</i>Actualizaciones</a></li>
                    <li><a href="#!" style="color: rgba(255, 255, 255, 0.56);"><i class="material-icons left">people</i>Mediadores</a></li>
                    <li><a href="#!" style="color: rgba(255, 255, 255, 0.56);"><i class="material-icons left">help_outline</i>Salir</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="color: #7a7a7a;">menu</i></a>
            </div>
        </nav>
        <!-- END BARRA DE NAVEGACION -->

        <div class="container">

            <!-- CONTENT -->
            <br>
            <div class="row">
                <div class="input-field col s4">
                    <select>
                        <option value="" selected>Todos</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Filtrar por:</label>
                </div>

                <div class="input-field col s4">
                    <select>
                        <option value="" selected>Todos</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Valor:</label>
                </div>

                <!-- boton para filtrar busqueda -->
                <div class="col s3 valign-wrapper">
                    <i class="medium material-icons valign">search</i>
                </div>
            </div>

            <!-- TABLA -->
            <div class="row">
                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="price">Cedula</th>
                            <th data-field="name">Nombre</th>
                            <th data-field="price">Telefono</th>
                            <th data-field="price">Estado</th>
                            <th data-field="price">Casa de Justicia</th>
                            <th data-field="price">Clasificacion</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1-1584-0428</td>
                            <td>Javier Delgado</td>
                            <td>8850-5706</td>
                            <td>Pendiente</td>
                            <td>Desamparados</td>
                            <td>Divorcio</td>
                            <td>
                                <div style="position: relative;">
                                    <div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; right: 0px; top: -20px;">
                                        <a class="btn-floating"><i class="material-icons">add</i></a>
                                        <ul>
                                            <li><a class="btn-floating red"><i class="material-icons">clear</i></a></li>
                                            <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
                                            <li><a class="btn-floating blue"><i class="material-icons">zoom_in</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1-1584-0428</td>
                            <td>Pablo Perez</td>
                            <td>8756-2563</td>
                            <td>Terminada</td>
                            <td>Heredia</td>
                            <td>Laboral</td>
                            <td>
                                <div style="position: relative;">
                                    <div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; right: 0px; top: -20px;">
                                        <a class="btn-floating"><i class="material-icons">add</i></a>
                                        <ul>
                                            <li><a class="btn-floating red"><i class="material-icons">clear</i></a></li>
                                            <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
                                            <li><a class="btn-floating blue"><i class="material-icons">zoom_in</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1-1584-0428</td>
                            <td>Pedro Araya</td>
                            <td>8348-9568</td>
                            <td>En proceso</td>
                            <td>Desamparados</td>
                            <td>Consumidor</td>
                            <td>
                                <div style="position: relative;">
                                    <div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; right: 0px; top: -20px;">
                                        <a class="btn-floating"><i class="material-icons">add</i></a>
                                        <ul>
                                            <li><a class="btn-floating red"><i class="material-icons">clear</i></a></li>
                                            <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
                                            <li><a class="btn-floating blue"><i class="material-icons">zoom_in</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1-1584-0428</td>
                            <td>Javier Delgado</td>
                            <td>8850-5706</td>
                            <td>Pendiente</td>
                            <td>Desamparados</td>
                            <td>Divorcio</td>
                            <td>
                                <div style="position: relative;">
                                    <div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; right: 0px; top: -20px;">
                                        <a class="btn-floating"><i class="material-icons">add</i></a>
                                        <ul>
                                            <li><a class="btn-floating red"><i class="material-icons">clear</i></a></li>
                                            <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
                                            <li><a class="btn-floating blue"><i class="material-icons">zoom_in</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1-1584-0428</td>
                            <td>Pablo Perez</td>
                            <td>8756-2563</td>
                            <td>Terminada</td>
                            <td>Heredia</td>
                            <td>Laboral</td>
                            <td>
                                <div style="position: relative;">
                                    <div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; right: 0px; top: -20px;">
                                        <a class="btn-floating"><i class="material-icons">add</i></a>
                                        <ul>
                                            <li><a class="btn-floating red"><i class="material-icons">clear</i></a></li>
                                            <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
                                            <li><a class="btn-floating blue"><i class="material-icons">zoom_in</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1-1584-0428</td>
                            <td>Pedro Araya</td>
                            <td>8348-9568</td>
                            <td>En proceso</td>
                            <td>Desamparados</td>
                            <td>Consumidor</td>
                            <td>
                                <div style="position: relative;">
                                    <div class="fixed-action-btn horizontal click-to-toggle" style="position: absolute; right: 0px; top: -20px;">
                                        <a class="btn-floating"><i class="material-icons">add</i></a>
                                        <ul>
                                            <li><a class="btn-floating red"><i class="material-icons">clear</i></a></li>
                                            <li><a class="btn-floating yellow darken-1"><i class="material-icons">create</i></a></li>
                                            <li><a class="btn-floating blue"><i class="material-icons">zoom_in</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>                        
                    </tbody>
                </table>
            </div>
            <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
            
            <!-- END CONTENT -->
            

        </div>    
    </main>    
</body>
</html>