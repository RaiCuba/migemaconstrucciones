<div class="modal fade" id="modalEditar{{ $items->id_cat }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form action="{{ route('categoria.update', $items->id_cat) }}" method="post">
                        @csrf
                        @method('PUT')

                        <h1 class="modal-title fs-5">Modificar Categoria</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">categoria de producto</label>
                            <input type="text" class="form-control" name="textnombre" required
                                value="{{ $items->nombre }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Descripcion del cargo</label>
                            <input type="text" class="form-control" name="textdescrip" required
                                value="{{ $items->descrip }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div>
                            <a href="{{ route('categoria') }}" class="btn btn-info"><span
                                    class="fas fa-indo-alt"></span>Regresar</a>
                            <button type="submit" class="btn btn-primary">guardar cambios de Categoria</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
