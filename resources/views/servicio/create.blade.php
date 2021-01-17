@extends ('layout')
@section ('contenido')
<div class="row">
    <h3>Nuevo Servicio</h3>

</div>
<hr>
<form action="{{url('/servicio')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required value="" class="form-control"
                    placeholder="Nombre del servicio">

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" required value="" class="form-control"
                    placeholder="Precio del servicio">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" required value="" class="form-control"
                    placeholder="Descripcion del servicio">
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
</form>

@endsection
