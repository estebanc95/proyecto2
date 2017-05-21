@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Gps</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('gps') }}/{{$gps->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$gps->modelo}}">
            </div>

            <div class="form-group">
                <label for="nombre" class="control-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$gps->nombre}}">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" value="{{$gps->imagen}}">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Editar gps
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection