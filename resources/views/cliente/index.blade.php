@extends('layout')
@section('contenido')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Clientes</h3>
            <a href="{{url('cliente_create')}}"><button class="btn btn-primary">Nuevo Cliente</button></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table_responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>DPI</th>
                        <th>NIT</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>TELEFONO</th>
                        <th>PROPIEDAD</th>
                        <th>ESTADO</th>
                        <th>OPCIONES</th>
                    </thead>
                    @foreach ($clientes as $cli)
                    <tr>
                        <td>{{ $cli->id_cliente }}</td>
                        <td>{{ $cli->dpi }}</td>
                        <td>{{ $cli->nit }}</td>
                        <td>{{ $cli->nombre_cliente }}</td>
                        <td>{{ $cli->apellido_cliente }}</td>
                        <td>{{ $cli->telefono }}</td>
                        <td>{{ $cli->propiedad }}</td>
                        <td>{{ $cli->estado }}</td>
                        <td>
                            <a href="{{ url('/cliente/'.$cli->id_cliente.'/edit')}}"><button class="btn btn-info">Editar</button></a>
                            <a href=""><button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>

                    @endforeach

                </table>
            </div>
            {{ $clientes->render() }}
        </div>
    </div>

@endsection
