<div class="modal fade" id="modalEditar{{ $items->id_cos_pro }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form action="{{ route('producto.update', $items->id_cos_pro) }}" method="post">
                        <!--se requiere este para ralaval para que funciones-->
                        @csrf
                        @method('PUT')
                        <h1 class="modal-title fs-5">Modificar Producto</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="textidpro" required readonly
                                value="{{ $items->nombre }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">precio </label>
                            <input type="text" class="form-control" name="textcantidad" required readonly
                                value="{{ $items->precio }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cantidad a modificar </label>
                            <input type="text" class="form-control" name="textcantidad2" required
                                value="{{ $items->cantidad }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div>
                            <a href="{{ route('producto') }}" class="btn btn-info"><span
                                    class="fas fa-indo-alt"></span>Regresar</a>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
