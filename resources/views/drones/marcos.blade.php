@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Marcos</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('marco') }}" method="POST">
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
                <label for="color" class="control-label">Color</label>
                <input type="text" name="color" class="form-control">
            </div>

            <div class="form-group">
                <label for="material" class="control-label">Material</label>
                <input type="text" name="material" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="numeroHelices" class="control-label">Numero helices</label>
                <input type="text" name="numeroHelices" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar marco
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE MARCOS---------->
<div class="col-md-12">
    @if (count($marcos)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de marcos
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Color</th>
                    <th>Material</th>
                    <th>Numero helices</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($marcos as $marco)
                    <tr>
                        <td class="table-text"><div>{{$marco->modelo}}</div></td>
                        <td class="table-text"><div>{{$marco->marca}}</div></td>
                        <td class="table-text"><div>{{$marco->color}}</div></td>
                        <td class="table-text"><div>{{$marco->material}}</div></td>
                        <td class="table-text"><div>{{$marco->numeroHelices}}</div></td>
                        <td class="table-text"><div>{{$marco->imagen}}</div></td>


                        <td>

                            <button type="submit" class="btn btn-success" onClick="location.href='marcos/{{$marco->id}}'">
                                <i class="fa fa-pencil"></i> Editar
                            </button>
                        </td>



                        <td>
                            <form action="{{ url('marco') }}/{{$marco->id}}" method="POST">
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