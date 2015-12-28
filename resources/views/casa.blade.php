@extends('masters._master1')

@section('body')
        <!-- CONTENT -->
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
                    <a class="waves-effect waves-light btn btn-nav" href="#">Información</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="#">Preguntas</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav  center-align" href="mapa.html">Ubicacion</a>
                </div>
                <div class="col s6 m3 l3 center-align">
                    <a class="waves-effect waves-light btn btn-nav" href="{{route('cuestionario')}}">Mediar</a>
                </div>
            </div>
            
            <div class="section">
                <div class="row">
                    <p>La Dirección Nacional de Resolución Alterna de Conflictos (DINARAC) es una de las dependencias pertenecientes al Ministerio de Justicia y Paz, adscritas al Viceministerio de Paz y su misión es la de promover en la sociedad costarricense una cultura para la paz, mediante el desarrollo de los métodos alternos para la resolución de los conflictos, inspirados en la ideología de una educación para la paz, contenida en la Ley N. 7727, sobre Resolución Alterna de Conflictos (RAC) y Promoción de la Paz Social.</p>
                    
                    <div class="row">
                        <div class="col s6">
                            <h5 class="center-align">Comunidad</h5>
                            <p>Al vivir en sociedad, y aunque no nos percatemos de ello, todos estamos interconectados, somos dependientes unos de otros.</p>
                        </div>
                        
                        <div class="col s6">
                            <h5 class="center-align">Cooperación</h5>
                            <p>Cuando todos trabajamos por una sola causa, se darán muchas ideas creativas que harán más sencilla la labor. Además, construiremos unión que es un puente para superar situaciones de divisón.</p>
                        </div>
                        
                        <div class="col s6">
                            <h5 class="center-align">No Violencia</h5>
                            <p>El respeto a las personas y al entorno natural que nos rodean permite que nos desarrollemos aun más en la empatía y la comprensión. Cuando utilizamos el diálogo, logramos soluciones creativas con la no violencia podemos encontrar vías óptimas para solucionar problemas colectivos e individuales.</p>
                        </div>
                        
                        <div class="col s6">
                            <h5 class="center-align">Testimonio</h5>
                            <p>Debemos ser testigos de esta búsqueda personal de paz, practicándola diariamente, mediante nuestro trabajo, ya que de esta manera, logramos promover el ideal de paz en las situaciones cotidianas.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            

        </div>    
    

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
@endsection()
