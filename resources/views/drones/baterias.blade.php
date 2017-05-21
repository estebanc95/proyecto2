@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Baterias</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('bateria') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control">
            </div>

            <div class="form-group">
                <label for="voltaje" class="control-label">Voltaje</label>
                <input type="text" name="voltaje" class="form-control">
            </div>

            <div class="form-group">
                <label for="duracion" class="control-label">Duracion</label>
                <input type="text" name="duracion" class="form-control">
            </div>

            <div class="form-group">
                <label for="tipo" class="control-label">Tipo</label>
                <input type="text" name="tipo" class="form-control">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar bateria
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE MARCOS---------->
<div class="col-md-12">
    @if (count($baterias)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de baterias
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Modelo</th>
                    <th>Voltaje</th>
                    <th>Duracion</th>
                    <th>Tipo</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($baterias as $bateria)
                    <tr>
                        <td class="table-text"><div>{{$bateria->modelo}}</div></td>
                        <td class="table-text"><div>{{$bateria->voltaje}}</div></td>
                        <td class="table-text"><div>{{$bateria->duracion}}</div></td>
                        <td class="table-text"><div>{{$bateria->tipo}}</div></td>
                        <td class="table-text"><div>{{$bateria->imagen}}</div></td>


                        <td>

                            <button type="submit" class="btn btn-success" onClick="location.href='baterias/{{$bateria->id}}'">
                                <i class="fa fa-pencil"></i> Editar
                            </button>
                        </td>



                        <td>
                            <form action="{{ url('bateria') }}/{{$bateria->id}}" method="POST">
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