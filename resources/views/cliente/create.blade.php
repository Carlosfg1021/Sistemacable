@extends ('layout')
@section ('contenido')
	<div class="row">
        <h3>Nuevo Cliente</h3>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="dpi">DPI</label>
            	<input type="number" name="dpi" required value="" class="form-control" placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombres">Nit</label>
            	<input type="number" name="nit" required value="" class="form-control" placeholder="Nombres del cliente">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="nombres">Nombres</label>
            	<input type="text" name="nombres" required value="" class="form-control" placeholder="Nombres del cliente">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="apellidos">Apellidos</label>
            	<input type="text" name="apellidos" required value="" class="form-control" placeholder="Apellidos del cliente">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="text" name="telefono" required value="" class="form-control" placeholder="Número">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="correo">Correo</label>
            	<input type="text" name="correo" value="" class="form-control" placeholder="Correo electronico">
            </div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Propiedad</label>
            	<input type="text" name="propiedad" value="" class="form-control" placeholder="Direccion del cliente">
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
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
	</div>

@endsection
