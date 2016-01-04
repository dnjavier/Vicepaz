@extends('masters._master1')

@section('body')
        <!-- CONTENT -->            
        <div class="section">
            <div class="row">
                <p>Muchas gracias por utilizar los servicios en linea para mediaciones. Esta es una introduccion. Por favor realize la siguiente clasificacion del conflicto a mediar:</p>                    
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <select id="select_naturaleza">
                        <option value="" disabled selected>Seleccionar una opcion</option>
                        <option value="1">Vecinales-Comunales</option>
                        <option value="2">Familia</option>
                        <option value="3">Prestamos-Deudas</option>
                        <option value="4">Consumidor</option>
                        <option value="5">Laboral</option>
                    </select>
                    <label>Naturaleza</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <select id="select_categoria" name="categoria">
                        <option value="0" disabled selected>Seleccionar una opcion</option>
                    </select>
                    <label>Categoria</label>
                </div> 
            </div>

            <center>                    
                <a class="waves-effect waves-light btn" href="{{route('cuestionario')}}">SIGUIENTE</a>
            </center>
        </div>
        <!-- END CONTENT -->  
@endsection()
