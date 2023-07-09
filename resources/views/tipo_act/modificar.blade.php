<div class="modal fade" id="modalEditar{{ $items->id_tip_act }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form action="{{ route('tipoact.update', $items->id_tip_act) }}" method="post">
                        <!--se requiere este para ralaval para que funciones-->
                        @csrf
                        @method('PUT')
                        <h1 class="modal-title fs-5" id="modalRegistrarpais">Modificar Tipo de Actividad</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">id de eactividad</label>
                            <input type="text" class="form-control" id="textid" name="textid" required
                                value="{{ $items->id_tip_act }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipo de Actividad</label>
                            <input type="text" class="form-control" id="texttipoact" name="texttipoact" required
                                value="{{ $items->nombre }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tipo de empleado</label>
                            <input type="text" class="form-control" id="textdescrip" name="textdescrip" required
                                value="{{ $items->descrip }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>


                        <div>
                            <a href="{{ route('tipoact') }}" class="btn btn-info"><span
                                    class="fas fa-indo-alt"></span>Regresar</a>
                            <button type="submit" class="btn btn-primary">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
