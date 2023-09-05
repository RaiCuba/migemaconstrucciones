@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h4>Gestionar Asistencias</h4>
            </div>
            <div class="table-responsive">

                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th class="ocultar">Id Asistencia</th>
                            <th class="ocultar">Id emp</th>
                            <th>Nombre</th>
                            <th>Entrada</th>
                            <th>Salida</th>
                            <th>Fecha</th>
                            <th>Lat</th>
                            <th>Lon</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $items)
                            <tr>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_asi }}</p>
                                </td>
                                <td class="col-auto ocultar">
                                    <p class=" mb-0">{{ $items->id_emp }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->Empleado->persona->nombre }}
                                        {{ $items->Empleado->persona->ape }}</p>
                                </td>

                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->Entrada_salida->hora_ent->format('H:i') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->Entrada_salida->hora_sal->format('H:i') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->fecha->format('d/m/Y') }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->latitud }}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{ $items->longitud }}</p>
                                </td>

                                <div>
                                    <td><a href="{{ route('verasistenciamap', $items->id_asi) }}"><button type="sudmit"
                                                class="btn btn-secondary">Google Map</button> </a> </td>


                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div>
                        {{-- {{ $datos->links() }} --}}
                    </div>
                </div>

            </div>

        </div>

        <script></script>
    @endsection
