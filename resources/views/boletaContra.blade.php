@extends('masters._master1')

@section('body')
        <!-- CONTENT -->   
        <div class="section">
            <!-- Introduccion sobre Mediacion -->
            <div class="row valign-wrapper">
                <p>Esto es una introduccion para el proceso de la mediacion</p>
            </div>
        </div>

        <div class="section">
            <div class="row">
                <h5>Formulario de iniciación</h5>
                <br>
                <form action="#">                    
                    <!-- Contraparte -->
                    <p>Datos de contraparte</p>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input placeholder="Francisco Antonio" id="first_name" type="text" class="validate">
                            <label for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input placeholder="Muñoz" id="first_name" type="text" class="validate">
                            <label for="first_name">Primer Apellido</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input placeholder="Araya" id="first_name" type="text" class="validate">
                            <label for="first_name">Segundo Apellido</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m4 l4">
                            <select>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">San Jose</option>
                                <option value="2">Heredia</option>
                                <option value="3">Cartago</option>
                                <option value="3">Alajuela</option>
                                <option value="3">Puntarenas</option>
                                <option value="3">Guanacaste</option>
                                <option value="3">Limon</option>
                            </select>
                            <label>Provincia</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <select>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Mas de 6 meses</option>
                                <option value="2">Mas de 1 año</option>
                                <option value="3">Mas de 5 años</option>
                            </select>
                            <label>Canton</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <select>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Mas de 6 meses</option>
                                <option value="2">Mas de 1 año</option>
                                <option value="3">Mas de 5 años</option>
                            </select>
                            <label>Distrito</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m3 l3">
                            <input placeholder="2222-2222" id="first_name" type="text" class="validate">
                            <label for="first_name">Telefono</label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <input placeholder="1-2345-6789" id="first_name" type="text" class="validate">
                            <label for="first_name">Cedula</label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Costa Rica</option>
                                <option value="2">Nicaragua</option>
                                <option value="3">Panama</option>
                            </select>
                            <label>Nacionalidad</label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">18-35</option>
                                <option value="2">36-50</option>
                                <option value="3">51-65</option>
                                <option value="3">+66</option>
                            </select>
                            <label>Edad</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m3 l3">
                            <select>
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Costa Rica</option>
                                <option value="2">Nicaragua</option>
                                <option value="3">Panama</option>
                            </select>
                            <label>Ocupacion</label>
                        </div>
                    </div>

                    <!-- Observaciones -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Observaciones</label>
                        </div>
                    </div>
                </form>

                <center>                    
                    <a class="waves-effect waves-light btn" href="{{route('mapa')}}">SIGUIENTE</a>
                </center>


            </div>                
        </div>
        <!-- END CONTENT -->
        
@endsection()