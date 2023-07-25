@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container-fluid">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>id emp</th>
                    <th>id act</th>
                    <th>empleado</th>
                    <th>actividad</th>
                    <th>lugar de act</th>
                    <th>descripcion</th>
                    <th>estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($actividad as $act)
                    <tr>
                        <td>{{ $act->id_emp }}</td>
                        <td>{{ $act->id_act }}</td>
                        <td>{{ $act->nombre }} {{ $act->ape }}</td>
                        <td>{{ $act->nombrea }}</td>
                        <td>{{ $act->lugar }}</td>
                        <td>{{ $act->descrip }}</td>
                        <td>{{ $act->estado }}</td>
                        <td>
                            <form action="{{ route('realizar.actividadad', $act->id_act) }}" method="POST">
                                @csrf
                                <button type="sudmit" class="btn btn-secondary">Realizar</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('terminar.actividadad', $act->id_act) }}" method="POST">
                                @csrf
                                <button type="sudmit" class="btn btn-secondary">Terminada</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Mis actividades</th>
                </tr>
            </tfoot>
        </table>

    </div>
@endsection
