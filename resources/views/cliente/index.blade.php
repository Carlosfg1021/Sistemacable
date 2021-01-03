@extends('layout')
@section('contenido')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Clientes</h3>
        <hr>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <a href="{{url('cliente/create')}}"><button class="btn btn-primary">Nuevo Cliente</button></a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            @include('cliente.search')
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table_responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>ID</th>
                    <th>DPI</th>
                    <th>NIT</th>
                    <th>NOMBRE</th>
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
                    <td>{{ $cli->nombre_cliente }} {{ $cli->apellido_cliente }}</td>
                    <td>{{ $cli->telefono }}</td>
                    <td>{{ $cli->propiedad }}</td>
                    <td>{{ $cli->estado }}</td>
                    <td>
                        <a href="{{ url('/cliente/'.$cli->id_cliente)}}"><button
                                class="btn bg-purple">Ver</button></a>
                        <a href="{{ url('/cliente/'.$cli->id_cliente.'/edit')}}"><button
                                class="btn bg-olive">Editar</button></a>
                        <form action="{{ url('/cliente/' . $cli->id_cliente) }}" method="post"
                            enctype="multipart/form-data" style="display: inline;">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro?');">Eliminar</button>
                        </form>
                    </td>
                </tr>

                @endforeach

            </table>
        </div>
        {{ $clientes->render() }}
    </div>
</div>

@endsection
