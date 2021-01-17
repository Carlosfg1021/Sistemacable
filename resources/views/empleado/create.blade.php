@extends ('layout')
@section ('contenido')
<div class="row">
        <h3>Nuevo Empleado</h3>
</div>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="dpi">Nombres</label>
            	<input type="number" name="dpi" required value="" class="form-control" placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombres">Apellidos</label>
            	<input type="number" name="direccion" required value="" class="form-control" placeholder="Direccion del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombres">DPI</label>
            	<input type="text" name="nombres" required value="" class="form-control" placeholder="Nombres del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="apellidos">Direccion</label>
            	<input type="text" name="apellidos" required value="" class="form-control" placeholder="Apellidos del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="text" name="telefono" required value="" class="form-control" placeholder="Número del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="correo">Usuario</label>
            	<select class="form-control" name="usuario">
				<option>Administrador</option>
                <option>Cobrador</option>
                <option>Tecnico</option>
            </select>
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Contraseña</label>
            	<input type="password" name="propiedad" value="" class="form-control" placeholder="Contraseña del empleado">
            </div>
        </div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">

            	<input type="text" style="visibility:hidden" name="id_usuario" class="form-control" value="">
            </div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            <br>
            <br>
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
	</div>




@endsection