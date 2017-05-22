@extends ('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Mi modelo</h1>
    </div>
    <div class="panel-body">
        {{--@include('common.errors')--}}

        <form action="{{ url('almacenar') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="nombre" class="control-label">Nombre del drone</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Agregar drone
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection