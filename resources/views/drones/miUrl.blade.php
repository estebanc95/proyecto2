@extends ('layouts.app')

@section('content')

<div id="contenedorPrincipal" class="container-fluid">
    <div class="row">
        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
            <div class="seleccionarComponente text-center">
                <h1>La URL obtenida es: </h1>
            </div>
        </div>
    </div>
    <div class="alert alert-success text-center">
     <h2>{{$valor}}</h2>
    </div>
    <div class=" text-center">
     <strong><h3>Agrege ya sea localhost o su IP por detras para usar su dron en cualquier lado</h3></strong>
    </div>
</div>
@endsection
