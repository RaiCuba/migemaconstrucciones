@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container-fluid">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>id emp</th>
                    <th>id asis</th>
                    <th>empleado</th>
                    <th>hora entrada</th>
                    <th>hora salidad</th>
                    <th>fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asistencias as $asis)
                    <tr>
                        <td>{{ $asis->id_emp }}</td>
                        <td>{{ $asis->id_asi }}</td>
                        <td>{{ $asis->nombre }} {{ $asis->ape }}</td>
                        <td>{{ $asis->hora_ent }}</td>
                        <td>{{ $asis->hora_sal }}</td>
                        <td>{{ $asis->fecha }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                </tr>
            </tfoot>
        </table>

    </div>
@endsection
