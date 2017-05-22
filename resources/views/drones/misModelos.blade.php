@extends ('layouts.app')

@section('content')
<div class="col-md-12">
    @if (count($modelos)>0)
    <div class="panel panel-default">
        <div class="panel-heading">
            Listado de mis modelos
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Nombre</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @foreach ($modelos as $modelo)
                    <tr>
                        <td class="table-text"><div>{{$modelo->nombre}}</div></td>
                        
                        <td>
                            <form action="{{ url('recuperar') }}/{{$modelo->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('POST')}}
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-trash"></i> Seleccionar
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