@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Controles</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('control') }}/{{$controles->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$controles->modelo}}">
            </div>

            <div class="form-group">
                <label for="plataforma" class="control-label">Plataforma</label>
                <input type="text" name="plataforma" class="form-control" value="{{$controles->plataforma}}">
            </div>

            <div class="form-group">
                <label for="frecuencia" class="control-label">Frecuencia</label>
                <input type="text" name="frecuencia" class="form-control" value="{{$controles->frecuencia}}">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" value="{{$controles->imagen}}">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Editar camara
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection