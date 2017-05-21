@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Gps</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('gps') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="control-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>


            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar gps
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE GPS---------->
<div class="col-md-12">
    @if (count($gps)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de gps
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Modelo</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($gps as $gp)
                    <tr>
                        <td class="table-text"><div>{{$gp->modelo}}</div></td>
                        <td class="table-text"><div>{{$gp->nombre}}</div></td>
                        <td class="table-text"><div>{{$gp->imagen}}</div></td>


                        <td>

                            <button type="submit" class="btn btn-success" onClick="location.href='gpss/{{$gp->id}}'">
                                <i class="fa fa-pencil"></i> Editar
                            </button>
                        </td>



                        <td>
                            <form action="{{ url('gps') }}/{{$gp->id}}" method="POST">
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