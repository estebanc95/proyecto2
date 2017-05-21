@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Camaras</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('camara') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control">
            </div>

            <div class="form-group">
                <label for="marca" class="control-label">Marca</label>
                <input type="text" name="marca" class="form-control">
            </div>

            <div class="form-group">
                <label for="megapixeles" class="control-label">Megapixeles</label>
                <input type="text" name="megapixeles" class="form-control">
            </div>

            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar camara
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE MOTORES---------->
<div class="col-md-12">
    @if (count($camaras)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de camaras
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Megapixeles</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($camaras as $camara)
                    <tr>
                        <td class="table-text"><div>{{$camara->modelo}}</div></td>
                        <td class="table-text"><div>{{$camara->marca}}</div></td>
                        <td class="table-text"><div>{{$camara->megapixeles}}</div></td>
                        <td class="table-text"><div>{{$camara->imagen}}</div></td>


                        <td>

                            <button type="submit" class="btn btn-success" onClick="location.href='camaras/{{$camara->id}}'">
                                <i class="fa fa-pencil"></i> Editar
                            </button>
                        </td>



                        <td>
                            <form action="{{ url('camara') }}/{{$camara->id}}" method="POST">
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