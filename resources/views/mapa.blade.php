@extends('masters._master1')

@section('body')            
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

    <div class="row hide">
        <div class="card-panel hoverable">
            <div class="card-content">
                <h5 class="center-align">Finalización del proceso de mediación</h5>
                <p>Muchas gracias por utilizar los servicios de las casas de justicia. Pronto una persona encargada se pondrá en contacto con usted para continuar la mediación. La casa de justicia a la que debe asistir para atender su mediación es la siguiente:</p>
            </div>
        </div>
    </div>
    
    <!-- map nav bar -->
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

    <!-- cuadro del mapa -->
    <div class="container1 row">

        <!-- Tarjeta de informacion -->
        <div class="col s12 m5 l4 tag1">
            <div class="card hoverable small">
                <div class="card-image">
                    <img src="{{asset('assets/images/vicepaz-oficina.jpg')}}">
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
<!-- END CONTENT -->
        
@endsection()