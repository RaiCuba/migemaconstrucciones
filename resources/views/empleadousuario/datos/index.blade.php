@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container-fluid">
        <table class="table table-success table-striped">
            <h3>Datos personales</h3>
            <thead class="thead-light">
                <tr>
                    <th class="">nombre</th>
                    <th class="">apellido</th>
                    <th>ci</th>
                    <th>telefono</th>
                    <th>Email</th>
                    <th>fecha de nacimiento</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($empleado as $emple)
                    <tr>
                        <td>{{ $emple->nombre }}</td>
                        <td>{{ $emple->ape }}</td>
                        <td>{{ $emple->ci }}</td>
                        <td>{{ $emple->tel }}</td>
                        <td>{{ $emple->correo }}</td>
                        <td>{{ $emple->fecha_nac }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>

                </tr>
            </tfoot>
        </table>
    </div>
    <div class="container-fluid">
        <table class="table table-success table-striped">
            <h3>Tipo de empleado</h3>
            <thead class="thead-light">
                <tr>
                    <th class="">Tipo de empleado</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tipo as $tip)
                    <tr>
                        <td>{{ $tip->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container-fluid">
        <table class="table table-success table-striped">
            <h3>Horario de
                Trabajo</h3>
            <thead class="thead-light">
                <tr>
                    <th class="">H. am ent</th>
                    <th class="">H. am sal</th>
                    <th class="">H. pm ent</th>
                    <th class="">H. pm sal</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($hora as $hor)
                    <tr>
                        <td>{{ $hor->hora_ent_m }}</td>
                        <td>{{ $hor->hora_sal_m }}</td>
                        <td>{{ $hor->hora_ent_t }}</td>
                        <td>{{ $hor->hora_sal_t }}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="container-fluid">
        <table class="table table-success table-striped">
            <h3>Cargo</h3>
            <thead class="thead-light">
                <tr>
                    <th class="">Cargo</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($empcar as $car)
                    <tr>
                        <td>{{ $car->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
