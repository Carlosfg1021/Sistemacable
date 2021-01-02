@extends ('layout')
@section ('contenido')
	<div class="row">
        <h3>Nueva Reparacion</h3>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input type="text" name="descripcion" required value="" class="form-control" placeholder="Descripción del servicio a realizar">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="id_cliente">Cliente</label>
            	<input type="number" name="id_cliente" required value="" class="form-control" placeholder="Nombre del cliente">
            </div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="id_usuario">Usuario</label>
            	<input type="number" name="id_usuario" required value="" class="form-control" placeholder="Nombre del usuario">
            </div>
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">

            	<input type="text" style="visibility:hidden" name="id_usuario" class="form-control" value="">
            </div>
		</div>
	</div>
	<br>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
	</div>

@endsection
