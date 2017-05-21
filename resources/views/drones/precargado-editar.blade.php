@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Precargado</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('precargado') }}/{{$precargados->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}

            <div class="form-group">
                <label for="id_motor" class="control-label">Motor</label>
                <input type="text" name="id_motor" class="form-control" value="{{$precargados->id_motor}}">
            </div>

            <div class="form-group">
                <label for="id_marco" class="control-label">Marco</label>
                <input type="text" name="id_marco" class="form-control" value="{{$precargados->id_marco}}">
            </div>

            <div class="form-group">
                <label for="id_control" class="control-label">Control</label>
                <input type="text" name="id_control" class="form-control" value="{{$precargados->id_control}}">
            </div>

            <div class="form-group">
                <label for="id_bateria" class="control-label">Bateria</label>
                <input type="text" name="id_bateria" class="form-control" value="{{$precargados->id_bateria}}">
            </div>
            
            <div class="form-group">
                <label for="id_camara" class="control-label">Camara</label>
                <input type="text" name="id_camara" class="form-control" value="{{$precargados->id_camara}}">
            </div>
            
            <div class="form-group">
                <label for="id_gps" class="control-label">Gps</label>
                <input type="text" name="id_gps" class="form-control" value="{{$precargados->id_gps}}">
            </div>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Editar precargado
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection