@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container">

        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4>Gestionar Asistencias</h4>
                </div>
                <div class="table-responsive">

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Id Asistencia</th>
                                <th>Id emp</th>
                                <th>Nombre</th>
                                <th>Entrada</th>
                                <th>Salida</th>
                                <th>Fecha</th>
                                <th>Lat</th>
                                <th>Lon</th>
                                <th>Ver Ubicación de Asistencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $items)
                                <tr>
                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $items->id_asi }}</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $items->id_emp }}</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $items->nombre }} {{ $items->ape }}</p>
                                    </td>

                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $items->hora_ent }}</p>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $items->hora_sal }}</p>
                                    </td>


                                    <td class="col-auto">
                                        <p class=" mb-0">{{ $items->fecha }}</p>
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
        </div>

        <script></script>
    @endsection
