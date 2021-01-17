@extends ('layout')
@section ('contenido')
<div class="row">
    <h3>Editar Servicio</h3>
</div>
<form action="{{ url('/servicio/' . $servicio->id_serv) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombro</label>
                <input type="text" id="nombre" name="nombre" required value="{{ $servicio->nombre }}" class="form-control"
                    placeholder="Nombre de servicio">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" required value="{{ $servicio->precio }}" class="form-control"
                    placeholder="Precio del servicio">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" id="descripcion" name="descripcion" required value="{{ $servicio->descripcion }}" class="form-control"
                    placeholder="Descripcion (opcional)">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                    @switch($servicio->estado)
                    @case(1)
                    <option value="1" selected>Activo</option>
                    <option value="0">Inactivo</option>
                    @break
                    @case(0)
                    <option value="1">Activo</option>
                    <option value="0" selected>Inactivo</option>
                    @break
                    @default
                    @endswitch
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <!--<input type="text" style="visibility:hidden" name="id_usuario" class="form-control" value="">-->
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
