@extends ('layout')
@section ('contenido')
<div class="row">
    <h3>Editar Cliente</h3>
</div>
<form action="{{ url('/cliente/' . $cliente->id_cliente) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="dpi">DPI</label>
                <input type="number" id="dpi" name="dpi" required value="{{ $cliente->dpi }}" class="form-control"
                    placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                <select name="estado" id="estado" class="form-control">
                    @switch($cliente->estado)
                    @case(1)
                    <option value="1" selected>De alta</option>
                    <option value="0">De baja</option>
                    @break
                    @case(0)
                    <option value="1">De alta</option>
                    <option value="0" selected>De baja</option>
                    @break
                    @default
                    @endswitch
                </select>
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
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>
</form>
@endsection
