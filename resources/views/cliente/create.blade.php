@extends ('layout')
@section ('contenido')
<div class="row">
    <h3>Nuevo Cliente</h3>
</div>
<form action="{{url('/cliente')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="dpi">DPI</label>
                <input type="number" id="dpu" name="dpi" required value="" class="form-control"
                    placeholder="Numero único de identificacion">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nit">Nit</label>
                <input type="number" id="nit" name="nit" required value="" class="form-control"
                    placeholder="Nit de cliente">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_cliente">Nombres</label>
                <input type="text" id="nombre_cliente" name="nombre_cliente" required value="" class="form-control"
                    placeholder="Nombres del cliente">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="apellido_cliente">Apellidos</label>
                <input type="text" id="apellido_cliente" name="apellido_cliente" required value="" class="form-control"
                    placeholder="Apellidos del cliente">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" required value="" class="form-control" placeholder="Número">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="propiedad">Propiedad</label>
                <input type="text" id="propiedad" name="propiedad" value="" class="form-control" placeholder="Direccion del cliente">
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
