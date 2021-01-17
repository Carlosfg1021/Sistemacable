@extends('layout')
@section('contenido')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Servicios</h3>
        <a href="{{url('servicio/create')}}"><button class="btn btn-primary">Nuevo Servicio</button></a>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table_responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>ID</th>
                    <th>SERVICIO</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                    <th>ESTADO</th>
                    <th>OPCIONES</th>
                </thead>
                @foreach ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->id_serv }}</td>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>Q {{ $servicio->precio }}</td>
                    @if($servicio->estado == 0)
                    <td class="text-danger">Inactivo</td>
                    @elseif($servicio->estado == 1)
                    <td class="text-primary">Activo</td>
                    @endif
                    <td>
                        <a href="{{ url('/servicio/'.$servicio->id_serv)}}"><button
                                class="btn bg-purple">Ver</button></a>
                        <a href="{{ url('/servicio/'.$servicio->id_serv.'/edit')}}"><button
                                class="btn bg-olive">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$servicio->id_serv}}" data-toggle="modal">
                            <button class="btn btn-danger">
                                @if($servicio->estado == 0)
                                Activar
                                @elseif($servicio->estado == 1)
                                Desactivar
                                @endif
                            </button>
                        </a>
                    </td>
                </tr>
                @include('servicio.modal')
                @endforeach

            </table>
        </div>
    </div>
</div>

@endsection
