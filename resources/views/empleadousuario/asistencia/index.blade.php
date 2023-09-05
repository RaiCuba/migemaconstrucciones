@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container-fluid">
        <table class="table table-success table-striped">
            <thead class="thead-light">
                <tr>
                    <th class="ocultar">id emp</th>
                    <th class="ocultar">id asis</th>
                    <th>empleado</th>
                    <th>hora entrada</th>
                    <th>hora salidad</th>
                    <th>fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asistencias as $asis)
                    <tr>
                        <td class="ocultar">{{ $asis->id_emp }}</td>
                        <td class="ocultar">{{ $asis->id_asi }}</td>
                        <td>{{ $asis->nombre }} {{ $asis->ape }}</td>
                        <td>{{ $asis->hora_ent }}</td>
                        <td>{{ $asis->hora_sal }}</td>
                        <td>{{ $asis->fecha->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Mis asistencias</th>
                </tr>
            </tfoot>
        </table>

    </div>
@endsection
