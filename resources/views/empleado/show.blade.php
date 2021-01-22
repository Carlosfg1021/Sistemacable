@extends ('layout')
@section ('contenido')
<div class="row">
        <h3>Detalles del Empleado</h3>
</div>
<hr>
	<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="id_usuario">ID</label>
                <input type="number" id="id_usuario" name="id_usuario" required value="{{ $empleado->id_usuario }}" class="form-control"
                    placeholder="Numero único de identificacion">
            </div>
        </div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre_empleado">Nombres</label>
            	<input type="text" name="nombre_empleado" required value="{{ $empleado->nombre_empleado }}" class="form-control" placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="apellido_empleado">Apellidos</label>
            	<input type="text" name="apellido_empleado" required value="{{ $empleado->apellido_empleado }}" class="form-control" placeholder="Direccion del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="dpi">DPI</label>
            	<input type="text" name="dpi" required value="{{ $empleado->dpi }}" class="form-control" placeholder="Nombres del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Direccion</label>
            	<input type="text" name="direccion" required value="{{ $empleado->direccion }}" class="form-control" placeholder="Apellidos del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="text" name="telefono" required value="{{ $empleado->telefono }}" class="form-control" placeholder="Número del empleado">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="usuario">Usuario</label>
            	<select required value="{{ $empleado->usuario }}" class="form-control" name="usuario">
				<option value="{{ $empleado->usuario }}">Administrador</option>
                <option value="{{ $empleado->usuario }}">Cobrador</option>
                <option value="{{ $empleado->usuario }}">Tecnico</option>
            </select>
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="contrasena">Contraseña</label>
            	<input type="password" name="contrasena" required value="{{ $empleado->contrasena }}" value="" class="form-control" placeholder="Contraseña del empleado">
            </div>
        </div>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <a href="{{ url('/empleado')}}"><button class="btn btn-info">Regresar</button></a>
            </div>
	</div>

	</form>
@endsection