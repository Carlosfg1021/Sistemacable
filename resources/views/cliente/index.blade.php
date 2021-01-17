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
                    @if($cli->estado == 0)
                    <td class="text-danger">De baja</td>
                    @elseif($cli->estado == 1)
                    <td class="text-primary">De alta</td>
                    @endif
                    <td>
                        <a href="{{ url('/cliente/'.$cli->id_cliente)}}"><button class="btn bg-purple">Ver</button></a>
                        <a href="{{ url('/cliente/'.$cli->id_cliente.'/edit')}}"><button
                                class="btn bg-olive">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cli->id_cliente}}" data-toggle="modal">
                            <button class="btn btn-danger">
                                @if($cli->estado == 0)
                                Dar de Alta
                                @elseif($cli->estado == 1)
                                Dar de baja
                                @endif
                            </button>
                        </a>
                    </td>
                </tr>
                @include('cliente.modal')
                @endforeach

            </table>
        </div>
        {{ $clientes->render() }}
    </div>
</div>

@endsection
