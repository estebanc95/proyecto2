@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Controles</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('control') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control">
            </div>

            <div class="form-group">
                <label for="plataforma" class="control-label">Plataforma</label>
                <input type="text" name="plataforma" class="form-control">
            </div>

            <div class="form-group">
                <label for="frecuencia" class="control-label">Frecuencia</label>
                <input type="text" name="frecuencia" class="form-control">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar control
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE CONTROLES---------->
<div class="col-md-12">
    @if (count($controles)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de controles
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Modelo</th>
                    <th>Plataforma</th>
                    <th>Frecuencia</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($controles as $control)
                    <tr>
                        <td class="table-text"><div>{{$control->modelo}}</div></td>
                        <td class="table-text"><div>{{$control->plataforma}}</div></td>
                        <td class="table-text"><div>{{$control->frecuencia}}</div></td>
                        <td class="table-text"><div>{{$control->imagen}}</div></td>


                        <td>

                            <button type="submit" class="btn btn-success" onClick="location.href='controles/{{$control->id}}'">
                                <i class="fa fa-pencil"></i> Editar
                            </button>
                        </td>



                        <td>
                            <form action="{{ url('control') }}/{{$control->id}}" method="POST">
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