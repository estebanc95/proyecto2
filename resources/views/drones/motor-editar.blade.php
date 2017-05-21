@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Motores</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('motor') }}/{{$motores->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$motores->modelo}}">
            </div>

            <div class="form-group">
                <label for="revoluciones" class="control-label">Revoluciones</label>
                <input type="text" name="revoluciones" class="form-control" value="{{$motores->revoluciones}}">
            </div>

            <div class="form-group">
                <label for="voltaje" class="control-label">Voltaje</label>
                <input type="text" name="voltaje" class="form-control" value="{{$motores->voltaje}}">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control" value="{{$motores->imagen}}">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Editar motor
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection