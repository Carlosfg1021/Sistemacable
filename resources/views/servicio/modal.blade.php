<div class="modal fade modal-slide-in-rigth" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-delete-{{$servicio->id_serv}}">
    <form action="{{ url('/servicio/' . $servicio->id_serv) }}" method="post" enctype="multipart/form-data"
        style="display: inline;">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-titlle">
                        @if($servicio->estado == 0)
                        Activar servicio
                        @elseif($servicio->estado == 1)
                        Desactivar Servicios
                        @endif
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        @if($servicio->estado == 0)
                        ¿Está seguro que desea activar el servicio?
                        @elseif($servicio->estado == 1)
                        ¿Está seguro que desea desactivar el servicio?
                        @endif
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gray" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
</div>
