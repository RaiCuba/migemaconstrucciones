<div class="modal fade text-left" id="danger{{ $items->id_tip_emp }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel120" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white" id="myModalLabel120">
                    Eliminar
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x">Del</i>
                </button>
            </div>
            <div class="modal-body">
                ¿Está seguro de eliminar el registro?
                <h4 class="text-center">{{ $items->nombre }}</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cerrar</span>
                </button>
                <div>
                    <a href="{{ route('tipoemp.delete', $items->id_tip_emp) }}">
                        <button type="submit" class="btn btn-danger ml-1">Eliminar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
