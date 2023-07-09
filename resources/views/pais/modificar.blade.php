{{-- @extends('layouts.menupricipal')
@section('Contenido')
    <form action="{{ route('pais.update', $pais->id_pai) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id pais</label>
            <input type="text" class="form-control" id="textid" name="textid" value="{{ $pais->id_pai }}" readonly
                required>
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">País</label>
            <input type="text" class="form-control" id="pais" name="textpais" value="{{ $pais->nombre }}" required>
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div>
            <a href="{{ route('pais') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
            <button type="submit" class="btn btn-primary">guardar cambios de de pais</button>
        </div>

    </form>
@endsection --}}


<div class="modal fade" id="modalEditar{{ $items->id_pai }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form action="{{ route('pais.update', $items->id_pai) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Id pais</label>
                            <input type="text" class="form-control" id="textid" name="textid"
                                value="{{ $items->id_pai }}" readonly required>
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">País</label>
                            <input type="text" class="form-control" id="pais" name="textpais"
                                value="{{ $items->nombre }}" required>
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div>
                            <a href="{{ route('pais') }}" class="btn btn-info"><span
                                    class="fas fa-indo-alt"></span>Regresar</a>
                            <button type="submit" class="btn btn-primary">guardar cambios de de pais</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
