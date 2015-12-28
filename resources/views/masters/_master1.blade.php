<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}" />
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
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">Javascript</a></li>
                    <li><a href="mobile.html">Mobile</a></li>
                </ul>
            </div>
            </div>
        </nav>
            @yield('body')
    </main>

    <!-- jQuery --> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="{{asset('assets/js/init.js')}}"></script>
</body>
</html>