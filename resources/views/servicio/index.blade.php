@extends('layout')
@section('contenido')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Servicios</h3>
            <a href="{{url('servicioNuevo')}}"><button class="btn btn-primary">Nuevo Servicio</button></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table_responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>ID</th>
                        <th>CLIENTE</th>
                        <th>SERVICIO</th>
                        <th>DESCRIPCION</th>
                        <th>DIRECCION</th>
                        <th>ESTADI</th>
                    </thead>
                    <!--foreach -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <!--BOTONES DE OPCIONES-->
                        </td>
                    </tr>

                    <!--endforeach-->

                </table>
            </div>
        </div>
    </div>

@endsection
