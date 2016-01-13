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
                <form id="formulario" action="{{route('crearboleta')}}" method="POST">
                    <!--AFECTADO-->
                    <div id="afectado" class="">
                        
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <input placeholder="Francisco Antonio" name="nombre" id="txtnombre" type="text" class="validate">
                                    <label id="lblnombre" for="nombre">Nombre</label>
                                </div>
                                <div class="input-field col s6 m3 l3">
                                    <input placeholder="Muñoz" name="apellido1" id="txtapellido1" type="text" class="validate">
                                    <label id=lblapellido1 for="apellido1">Primer Apellido</label>
                                </div>
                                <div class="input-field col s6 m3 l3">
                                    <input placeholder="Araya" name="apellido2" id="txtapellido2" type="text" class="validate">
                                    <label id="lblapellido2" for="apellido2">Segundo Apellido</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <select name="provincia" id="cmbprovincia">
                                        <option value="" disabled selected>Seleccionar</option>
                                        <option value="1">San Jose</option>
                                        <option value="2">Alajuela</option>
                                        <option value="3">Cartago</option>
                                        <option value="4">Heredia</option>
                                        <option value="5">Guanacaste</option>
                                        <option value="6">Puntarenas</option>
                                        <option value="7">Limón</option>
                                    </select>
                                    <label id="lblprovincia">Provincia</label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <select name="canton" id="cmbcanton">
                                        <option value="" disabled selected>Seleccionar</option>
                                    </select>
                                    <label id="lblcanton">Cantón</label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <select name="distrito" id="cmbdistrito">
                                        <option value="" disabled selected>Seleccionar</option>
                                    </select>
                                    <label id="lbldistrito">Distrito</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m3 l3">
                                    <input placeholder="2222-2222" name="telefono" id="txttelefono" type="text" class="validate">
                                    <label id="lbltelefono" for="telefono">Telefono</label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input placeholder="1-2345-6789" name="cedula" id="txtcedula" type="text" class="validate">
                                    <label id="lblcedula" for="cedula">Cedula</label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <select name="nacionalidad" id="cmbnacionalidad">
                                        <option value="" disabled selected>Seleccionar</option>
                                        <option value="1">Costa Rica</option>
                                        <option value="2">Nicaragua</option>
                                        <option value="3">Panama</option>
                                    </select>
                                    <label id="lblnacionalidad">Nacionalidad</label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <select name="edad" id="cmbedad">
                                        <option value="" disabled selected>Seleccionar</option>
                                        <option value="1">18-35</option>
                                        <option value="2">36-50</option>
                                        <option value="3">51-65</option>
                                        <option value="3">+66</option>
                                    </select>
                                    <label id="lbledad">Edad</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m3 l3">
                                    <select name="ocupacion" id="cmbocupacion">
                                        <option value="" disabled selected>Seleccionar</option>
                                        <option value="1">Mecánico</option>
                                        <option value="2">Técnico</option>
                                        <option value="3">Oficinista</option>
                                    </select>
                                    <label id="lblocupacion">Ocupación</label>
                                </div>
                            </div>
                        
                </div>

                <div id="contraparte" class="inactive">

                    <!-- CONTRAPARTE -->
                    <p>Datos de contraparte</p>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <input placeholder="Francisco Antonio" name="cpnombre" id="first_name" type="text" class="validate">
                            <label id="lblcpnombre" for="cpnombre">Nombre</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input placeholder="Muñoz" name="cpapellido1" id="first_name" type="text" class="validate">
                            <label id="lblcpapellido1" for="cpapellido1">Primer Apellido</label>
                        </div>
                        <div class="input-field col s6 m3 l3">
                            <input placeholder="Araya" name="cpapellido2" id="first_name" type="text" class="validate">
                            <label id="lblcpapellido2" for="cpapellido2">Segundo Apellido</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m4 l4">
                            <select name="cpprovincia">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">San Jose</option>
                                <option value="2">Heredia</option>
                                <option value="3">Cartago</option>
                                <option value="3">Alajuela</option>
                                <option value="3">Puntarenas</option>
                                <option value="3">Guanacaste</option>
                                <option value="3">Limon</option>
                            </select>
                            <label id="lblcpprovincia">Provincia</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <select name="cpcanton">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Mas de 6 meses</option>
                                <option value="2">Mas de 1 año</option>
                                <option value="3">Mas de 5 años</option>
                            </select>
                            <label id="lblcpcanton">Canton</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <select name="cpdistrito">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Mas de 6 meses</option>
                                <option value="2">Mas de 1 año</option>
                                <option value="3">Mas de 5 años</option>
                            </select>
                            <label id="lblcpdistrito">Distrito</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m3 l3">
                            <input placeholder="2222-2222" name="cptelefono" id="first_name" type="text" class="validate">
                            <label id="lblcptelefono" for="cptelefono">Telefono</label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <input placeholder="1-2345-6789" name="cpcedula" id="first_name" type="text" class="validate">
                            <label id="lblcpcedula" for="cpcedula">Cedula</label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select name="cpnacionalidad">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Costa Rica</option>
                                <option value="2">Nicaragua</option>
                                <option value="3">Panama</option>
                            </select>
                            <label id="lblcpnacionalidad">Nacionalidad</label>
                        </div>
                        <div class="input-field col s12 m3 l3">
                            <select name="cpedad">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">18-35</option>
                                <option value="2">36-50</option>
                                <option value="3">51-65</option>
                                <option value="3">+66</option>
                            </select>
                            <label id="lblcpedad">Edad</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m3 l3">
                            <select name="cpocupacion">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="1">Costa Rica</option>
                                <option value="2">Nicaragua</option>
                                <option value="3">Panama</option>
                            </select>
                            <label id="lblcpocupacion">Ocupacion</label>
                        </div>
                    </div>

                    <!-- Observaciones -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="cpobservaciones" id="textarea1" class="materialize-textarea"></textarea>
                            <label id="lblcpobservaciones" for="cpobservaciones">Observaciones</label>
                        </div>
                    </div>

                </div>
                 <center>      
                    <a class="waves-effect waves-light btn inactive" onClick="previous()" id="btnAnterior">ANTERIOR</a>              
                    <input type="button" class="waves-effect waves-light btn" onClick="next()" id="btnSiguiente" value="Siguiente"/>
                </center>
                </form>
               


            </div>                
        </div>
        <!-- END CONTENT -->
        
@endsection()