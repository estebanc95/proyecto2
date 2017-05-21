@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Baterias</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('bateria') }}/{{$baterias->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$baterias->modelo}}">
            </div>

            <div class="form-group">
                <label for="voltaje" class="control-label">Voltaje</label>
                <input type="text" name="voltaje" class="form-control" value="{{$baterias->voltaje}}">
            </div>

            <div class="form-group">
                <label for="duracion" class="control-label">Duracion</label>
                <input type="text" name="duracion" class="form-control" value="{{$baterias->duracion}}">
            </div>

            <div class="form-group">
                <label for="tipo" class="control-label">Tipo</label>
                <input type="text" name="tipo" class="form-control" value="{{$baterias->tipo}}">
            </div>


            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" value="{{$baterias->imagen}}">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Editar bateria
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection