@extends('layout')
@section('contenido')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Empleados</h3>
            <a href="{{url('empleadoNuevo')}}"><button class="btn btn-primary">Nuevo Empleado</button></a>
        </div>
    </div>
    <hr>
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
                        <th>USUARIO</th>
                        <th>CONTRASEÑA</th>
                        <th>ESTADO</th>
                        <th>OPCIONES</th>
                    </thead>
                    <!--foreach -->
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
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