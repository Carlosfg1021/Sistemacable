@extends ('layout')
@section ('contenido')
<div class="row">
    <h3>Detalles del Cliente</h3>
</div>
<hr>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label for="id_cliente">ID</label>
                <input type="number" id="id_cliente" name="id_cliente" required value="{{ $cliente->id_cliente }}" class="form-control"
                    placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label for="dpi">DPI</label>
                <input type="number" id="dpi" name="dpi" required value="{{ $cliente->dpi }}" class="form-control"
                    placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label for="nit">Nit</label>
                <input type="number" id="nit" name="nit" required value="{{ $cliente->nit }}" class="form-control"
                    placeholder="Nit de cliente">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_cliente">Nombres</label>
                <input type="text" id="nombre_cliente" name="nombre_cliente" required value="{{ $cliente->nombre_cliente }}" class="form-control"
                    placeholder="Nombres del cliente">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="apellido_cliente">Apellidos</label>
                <input type="text" id="apellido_cliente" name="apellido_cliente" required value="{{ $cliente->apellido_cliente }}" class="form-control"
                    placeholder="Apellidos del cliente">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" required value="{{ $cliente->telefono }}" class="form-control" placeholder="Número">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" name="estado" required value="{{ $cliente->estado }}" class="form-control" placeholder="Número">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="propiedad">Propiedad</label>
                <input type="text" id="propiedad" name="propiedad" value="{{ $cliente->propiedad }}" class="form-control" placeholder="Direccion del cliente">
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
        <a href="{{ url('/cliente')}}"><button class="btn btn-info">Regresar</button></a>
        </div>
    </div>
</form>
@endsection
