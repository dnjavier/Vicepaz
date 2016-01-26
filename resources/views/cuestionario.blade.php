@extends('masters._master1')

@section('body')

    <!-- CONTENT -->
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
                    <li>1. En alguna ocasion su esposo(a) se ha comportado con usted de forma violenta (física, psicológica, sexual o patrimonialmente)?
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

                    <li>3. En alguna ocasión ha tenido que solicitar medidas de protección, intervenciones familiares o policiales debido a los incidentes de violencia?
                        <!-- Check -->
                        <div class="answer col s12">
                            <div class="col s3 m2 l1">
                                <p>
                                    <input name="group3" type="radio" id="test5"/>
                                    <label for="test5">Si</label>
                                </p>
                                <p>
                                    <input name="group3" type="radio" id="test6" />
                                    <label for="test6">No</label>
                                </p>
                            </div>

                            <div class="col s9 m10 l11">
                                <div class="hide" id="div2-question3">
                                    <div class="input-field col s7 m5 l4">
                                        <select>
                                            <option value="" disabled selected>Seleccionar</option>
                                            <option value="1">Mas de 6 meses</option>
                                            <option value="2">Mas de 1 año</option>
                                            <option value="3">Mas de 5 años</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>                           


                    <li>4. Actualmente, existen medidas de protección a favor de alguno de los dos?
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

                    <li>5. Amenaza su esposo(a) con actuar con la violencia?
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

                    <li>6. Se siente forzada(o) por él o ella para realizar este divorcio por mutuo acuerdo?
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
                <a class="waves-effect waves-light btn" href="{{route('formulario')}}">SIGUIENTE</a>
            </center>
        </div>                
    </div> 
    <!-- END CONTENT -->
        
@endsection()