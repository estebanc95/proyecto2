@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Precargados</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('precargado') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="id_motor" class="control-label">Motor</label>
                <input type="text" name="id_motor" class="form-control">
            </div>

            <div class="form-group">
                <label for="id_marco" class="control-label">Marco</label>
                <input type="text" name="id_marco" class="form-control">
            </div>

            <div class="form-group">
                <label for="id_control" class="control-label">Control</label>
                <input type="text" name="id_control" class="form-control">
            </div>

            <div class="form-group">
                <label for="id_bateria" class="control-label">Bateria</label>
                <input type="text" name="id_bateria" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="id_camara" class="control-label">Camara</label>
                <input type="text" name="id_camara" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="id_gps" class="control-label">GPS</label>
                <input type="text" name="id_gps" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar precargado
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE PRECARGADOS---------->
<div class="col-md-12">
    @if (count($precargados)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de precargados
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Motor</th>
                    <th>Marco</th>
                    <th>Control</th>
                    <th>Bateria</th>
                    <th>Camara</th>
                    <th>Gps</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($precargados as $precargado)
                    <tr>
                        <td class="table-text"><div>{{$precargado->id_motor}}</div></td>
                        <td class="table-text"><div>{{$precargado->id_marco}}</div></td>
                        <td class="table-text"><div>{{$precargado->id_control}}</div></td>
                        <td class="table-text"><div>{{$precargado->id_bateria}}</div></td>
                        <td class="table-text"><div>{{$precargado->id_camara}}</div></td>
                        <td class="table-text"><div>{{$precargado->id_gps}}</div></td>


                        <td>

                            <button type="submit" class="btn btn-success" onClick="location.href='precargados/{{$precargado->id}}'">
                                <i class="fa fa-pencil"></i> Editar
                            </button>
                        </td>



                        <td>
                            <form action="{{ url('precargado') }}/{{$precargado->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</div>

@endsection