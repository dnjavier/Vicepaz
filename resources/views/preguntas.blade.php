@extends('masters._master1')

@section('body')

    <!-- CONTENT -->
    <div class="section">
        <div class="row">
            <p>Esta es una seccion con las preguntas mas frecuentes que las personas realizan. Para conocer mas sobre cada una de las preguntas, por favor haga clic sobre cada una de estas.</p>
        </div>

        <ul class="collapsible popout" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">keyboard_arrow_down</i>¿Cuales son los documentos que debo presentar en una disolucion de vinculo?</div>
                <div class="collapsible-body">
                    <p>Se deben de presentar los siguientes documentos:
                        <ol>
                            <li>Documento de identidad <strong>vigente</strong></li>
                            <li>2 fotocopias de la cedula por ambos lados</li>
                            <li>Constancia original de matrimonio y una copia</li>
                            <li>Constancia original de nacimientos de hijos en común y una copia de cada uno</li>
                            <li>Certificación original de bienes <strong>muebles</strong> y una copia (Y si hay bienes traer la certificación literal y una copia) de cada parte</li>
                            <li>Certificación original de bienes <strong>inmuebles</strong> y una copia (Y si hay bienes traer la certificación literal y una copia) de cada parte</li>
                        </ol>
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">keyboard_arrow_down</i>
                    ¿Cuales son los requisitos para una disolucion de vinculo?</div>
                <div class="collapsible-body"><p>No tener más de dos bienes en común, muebles o inmuebles.</p></div>
            </li>
        </ul>

    </div>
    <!-- END CONTENT -->
        
@endsection()