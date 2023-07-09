<div class="modal fade" id="modalEditar{{ $items->id_hor_asi }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-ml">
        <div class="modal-content">
            <div class="modal-body p-12">
                <div class="container-fluid">
                    <form action="{{ route('horaasig.update', $items->id_hor_asi) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
                            <input type="time" class="form-control" name="texthoraent" required
                                value="{{ $items->hora_ent_m }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
                            <input type="time" class="form-control" name="texthorasal" required
                                value="{{ $items->hora_sal_m }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hora de entrado</label>
                            <input type="time" class="form-control" name="texthoraentt" required
                                value="{{ $items->hora_ent_t }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hora de salida</label>
                            <input type="time" class="form-control" name="texthorasalt" required
                                value="{{ $items->hora_sal_t }}">
                            <div id="emailHelp" class="form-text"></div>
                        </div>


                        <div>
                            <a href="{{ route('horaasig') }}" class="btn btn-info"><span
                                    class="fas fa-indo-alt"></span>Regresar</a>
                            <button type="submit" class="btn btn-primary">guardar cambios de horario de
                                empleados</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
