@extends ('layout')
@section ('contenido')
	<div class="row">
        <h3>Caja</h3>
	</div>
	<br>

	<div class="row">
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
			<label class="control-label" for="date">Fecha</label>
            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
            </div>
		</div>  
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="servicio">Saldo Actual</label>
            	<input type="number" name="saldo_actual" readonly="readonly" required value="" class="form-control" placeholder="">
            </div>
        </div>  
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<label for="servicio">Saldo Final</label>
            	<input type="number" name="saldo_final" readonly="readonly" required value="" class="form-control" placeholder="">
            </div>
        </div>  
</div>  
<br>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-success" type="submit">Apertura</button>
            	<button class="btn btn-warning" type="reset">Cierre</button>
            </div>
	</div>
@endsection