@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Motores</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('motor') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="modelo" class="control-label">Modelo</label>
                <input type="text" name="modelo" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="revoluciones" class="control-label">Revoluciones</label>
                <input type="text" name="revoluciones" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="voltaje" class="control-label">Voltaje</label>
                <input type="text" name="voltaje" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="imagen" class="control-label">Imagen</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar motor
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!--------LISTA DE MOTORES---------->
<div class="col-md-12">
    @if (count($motores)>0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado de motores
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Modelo</th>
                        <th>Revoluciones</th>
                        <th>Voltaje</th>
                        <th>Imagen</th>
                        <th>Accion</th>
                    </thead>
                    <tbody>
                        @foreach ($motores as $motor)
                            <tr>
                                <td class="table-text"><div>{{$motor->modelo}}</div></td>
                                <td class="table-text"><div>{{$motor->revoluciones}}</div></td>
                                <td class="table-text"><div>{{$motor->voltaje}}</div></td>
                                <td class="table-text"><div>{{$motor->imagen}}</div></td>
                                
                                
                                <td>
                                    
                                        <button type="submit" class="btn btn-success" onClick="location.href='motores/{{$motor->id}}'">
                                            <i class="fa fa-pencil"></i> Editar
                                        </button>
                                </td>
                                
                                
                                
                                <td>
                                    <form action="{{ url('motor') }}/{{$motor->id}}" method="POST">
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