<div class="modal fade modal-slide-in-rigth" aria-hidden="true" role="dialog" tabindex="-1"
    id="modal-delete-{{$cli->id_usuario}}">
    <form action="{{ url('/empleado/' . $cli->id_usuario) }}" method="post" enctype="multipart/form-data"
        style="display: inline;">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-titlle">
                        Estado de Empleado
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        @if($cli->estado == 0)
                        ¿Está seguro que desea dar de alta al cliente?
                        @elseif($cli->estado == 1)
                        ¿Está seguro que desea dar de baja al cliente?
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
