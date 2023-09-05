<div class="modal fade" id="modalEditar{{ $items->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form action="{{ route('asignarrol', $items->id) }}" method="POST">
                        <!--se requiere este para ralaval para que funciones-->
                        @csrf
                        <div class="mb-3 ocultar">
                            <label class="form-label">id emp</label>
                            <input type="text" class="form-control" name="usuario" value="{{ $items->id }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control" value="{{ $items->nombre }} {{ $items->ape }}"
                                readonly>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="admin" value="1">
                            <label class="form-check-label" for="exampleCheck1">admin</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="empleado" value="2">
                            <label class="form-check-label" for="exampleCheck1">empleado</label>
                        </div>
                        {{-- @foreach ($roles as $rol)
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]"
                                    value="{{ $rol->id }}">
                                <label class="form-check-label" for="exampleCheck1">{{ $rol->name }}</label>
                            </div>
                        @endforeach --}}

                        <button type="submit" class="btn btn-primary">Asignar rol</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
