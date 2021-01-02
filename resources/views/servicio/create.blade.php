@extends ('layout')
@section ('contenido')
<div class="row">
        <h3>Nuevo Servicio</h3>
	</div>

    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="cliente">Cliente</label>
            	<input type="number" name="cliente" required value="" class="form-control" placeholder="Nombre del cliente">
            </div>
        </div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="servicio">Servicio</label>
            	<input type="number" name="servicio" required value="" class="form-control" placeholder="Tipo de servicio">
            </div>
        </div>    
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input type="number" name="descripcion" required value="" class="form-control" placeholder="Detalle de la descripción">
            </div>
        </div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Dirección</label>
            	<input type="number" name="dpi" required value="" class="form-control" placeholder="Direccion del servicio">
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
