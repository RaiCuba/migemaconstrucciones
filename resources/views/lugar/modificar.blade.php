<div class="modal fade" id="modalEditar{{ $items->id_lug }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form class="p-lg-3 col-12 row g-3" action="{{ route('lugar.update') }}" method="post">
                        @csrf
                        @method('PUT')
                        <h1 class=" d-flex justify-content-center p-3">Modificar Lugar</h1>
                        <div class="col-lg-12">
                            <input type="hidden" class="form-control" name="id" value="{{ $items->id_lug }}">
                            <div id="emailHelp" class="form-text"></div>

                        </div>
                        <div class="col-lg-12">
                            <label for="exampleInputEmail1" class="form-label">almacen de producto</label>
                            <input type="text" class="form-control" name="textlugar1" required
                                value="{{ $items->almacen }}">
                            <div id="emailHelp" class="form-text"></div>
                            @error('textlugar1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-lg-12">
                            <label for="exampleInputEmail1" class="form-label">Descripcion del lugar</label>
                            <input type="text" class="form-control" name="textdescrip1" required
                                value="{{ $items->descrip }}">
                            <div id="emailHelp" class="form-text"></div>
                            @error('textdescrip1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <label for="exampleInputEmail1" class="form-label">Direccion de lugar</label>
                            <input type="text" class="form-control" name="textdireccion1" required
                                value="{{ $items->direccion }}">
                            <div id="emailHelp" class="form-text"></div>
                            @error('textdireccion1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-4 d-flex justify-content-center">
                            <a href="{{ route('lugar') }}" class="btn btn-info">Regresar</a><span
                                class="d-inline p-3"></span>
                            <button type="submit" class="btn btn-secondary">guardar cambios del
                                lugar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
