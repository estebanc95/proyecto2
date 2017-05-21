@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Marcos</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('marco') }}/{{$marcos->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$marcos->modelo}}">
            </div>

            <div class="form-group">
                <label for="marca" class="control-label">Marca</label>
                <input type="text" name="marca" class="form-control" value="{{$marcos->marca}}">
            </div>

            <div class="form-group">
                <label for="color" class="control-label">Color</label>
                <input type="text" name="color" class="form-control" value="{{$marcos->color}}">
            </div>
            
            <div class="form-group">
                <label for="material" class="control-label">Material</label>
                <input type="text" name="material" class="form-control" value="{{$marcos->material}}">
            </div>
            
            <div class="form-group">
                <label for="numeroHelices" class="control-label">Numero Helices</label>
                <input type="text" name="numeroHelices" class="form-control" value="{{$marcos->numeroHelices}}">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" value="{{$marcos->imagen}}">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Editar marco
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection