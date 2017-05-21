@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Camaras</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('camara') }}/{{$camaras->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$camaras->modelo}}">
            </div>

            <div class="form-group">
                <label for="marca" class="control-label">Marca</label>
                <input type="text" name="marca" class="form-control" value="{{$camaras->marca}}">
            </div>

            <div class="form-group">
                <label for="megapixeles" class="control-label">Megapixeles</label>
                <input type="text" name="megapixeles" class="form-control" value="{{$camaras->megapixeles}}">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" value="{{$camaras->imagen}}">
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