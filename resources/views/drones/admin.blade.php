@extends ('layouts.app')
    
@section('content')

<div id="contenedorPrincipal" class="container-fluid">
    <div class="row">
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
            <div class="seleccionarComponente text-center">
                <h1>Seleccione que componente desea modificar</h1>
            </div>
        </div>
    </div>
    <div id="listarOpciones" class="elementosListados"> 

    </div>
</div> 
@endsection

@section('scripts')

<script src="/jsCreados/administrador/listarOpcionesCambio.js"></script>

@endsection
