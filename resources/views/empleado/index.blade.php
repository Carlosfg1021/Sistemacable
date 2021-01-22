@extends('layout')
@section('contenido')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Empleados</h3>
        <hr>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <a href="{{url('nuevoEmpleado')}}"><button class="btn btn-primary">Nuevo Empleado</button></a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            @include('empleado.search')
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
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>DPI</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th>ESTADO</th>
                        <th>OPCIONES</th>
                    </thead>
                    @foreach ($empleados as $cli)
                <tr>
                    <td>{{ $cli->id_usuario }}</td>
                    <td>{{ $cli->nombre_empleado }}</td>
                    <td>{{ $cli->apellido_empleado }}</td>
                    <td>{{ $cli->dpi}} </td>
                    <td>{{ $cli->telefono }}</td>
                    <td>{{ $cli->direccion }}</td>
                    @if($cli->estado == 0)
                    <td class="text-danger">De baja</td>
                    @elseif($cli->estado == 1)
                    <td class="text-primary">De alta</td>
                    @endif
                    <td>
                        <a href="{{ url('/empleado/'.$cli->id_usuario)}}"><button class="btn bg-purple">Ver</button></a>
                        <a href="{{ url('/empleado/'.$cli->id_usuario.'/edit')}}"><button
                                class="btn bg-olive">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cli->id_usuario}}" data-toggle="modal">
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

                @include('empleado.modal')
                @endforeach

                </table>
            </div>
            {{ $empleados->render() }}
        </div>
    </div>

@endsection