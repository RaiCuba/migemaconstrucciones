@auth
    @extends('layouts.menupricipal')
    {{-- @section('content') --}}

    @section('Contenido')
        {{-- <div class="container">
            <div>
                <a href="{{ route('ver.grafico') }}">
                    <h5>Ver grafico </h5>
                </a>
            </div>
        </div>
        <div class="container">
            <div>
                <a href="{{ route('ver.opcion') }}">
                    <h5>Ver op </h5>
                </a>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon purple">
                                    <!--<i class="iconly-boldShow"></i>-->
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Ventas</h6>
                                <h6 class="font-extrabold mb-0">Cantidad: {{ $cantidad }}</h6>
                                <h6 class="font-extrabold mb-0">Hoy: {{ $hoy }} </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon blue">
                                    <!--<i class="iconly-boldProfile"></i>-->
                                    <i class="bi bi-x-diamond-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Productos</h6>
                                <h6 class="font-extrabold mb-0">Nro.: {{ $cantidadproducto }}</h6>
                                <h6 class="font-extrabold mb-0">Hoy: {{ $hoy }} </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon green">
                                    <!--<i class="iconly-boldAdd-User"></i>-->
                                    <i class="bi bi-person-check"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Asistencia</h6>
                                <h6 class="font-extrabold mb-0">Cant. Trabajando: {{ $asis }}</h6>
                                <h6 class="font-extrabold mb-0">Asistencias de: {{ $hoy }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon red">
                                    <!--<i class="iconly-boldBookmark"></i>-->
                                    <i class="bi bi-person-lines-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Actividades</h6>
                                <h6 class="font-extrabold mb-0">Cant.: {{ $actemp }} </h6>
                                <h6 class="font-extrabold mb-0">Hoy.: {{ $hoy }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @role('admin')
                <div>
                    <p>solo para admin </p>
                </div>
            @endrole

            @role('empleado')
                <div>
                    <p>solo para empleados </p>
                </div>
            @endrole
            @role('regente')
                <div>
                    <p>solo para gerente </p>
                </div>
                <div>
                    <p>solo para gerente2 </p>
                </div>
            @endrole

            <h4>Stock de productos</h4>
            @include('home.grafico')

            <div class="row p-5">

                <div class="col-8 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Actividades Asignadas a Empleados del día</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Empleado</th>
                                            <th>Tipo de actividad</th>
                                            <th>fecha</th>
                                            <th>Lugar</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($actividades as $actividad)
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        {{-- <div class="avatar avatar-md">
                                                            <img src="{{ asset('images/fotos/' . $actividad->empleado->persona->imagenn) }}"
                                                                alt="Imagen">
                                                            {{ $actividad->imagenn }}
                                                        </div> --}}

                                                        <p class="font-bold ms-3 mb-0">
                                                            {{ $actividad->nombre }}
                                                            {{ $actividad->ape }}
                                                            {{-- {{ $actividad->empleado->persona->nombre }}  --}}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{-- {{ $actividad->actividad->nombre }} --}}
                                                        {{ $actividad->nombrea }}
                                                    </p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $actividad->fecha }}
                                                    </p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $actividad->lugar }}
                                                    </p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $actividad->estado }}
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card  col-xl-4">
                    <div class="card-body">
                        <h5 class="card-title">Asistencias de Hoy: {{ $hoy }}</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Empleado</th>
                                    <th>hora de entrada</th>
                                    <th>hora de salida</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asistencias as $asistencia)
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                {{ $asistencia->empleado->persona->nombre }}
                                                {{ $asistencia->empleado->persona->ape }}
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <div class="d-flex align-items-center">
                                                {{ $asistencia->entrada_salida->hora_ent }}
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <div class="d-flex align-items-center">
                                                {{ $asistencia->entrada_salida->hora_sal }}
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('asistencia') }}"><i class="bi bi-eye-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
        @section('scripts')
            {!! $chart->renderChartJsLibrary() !!}
            {!! $chart->renderJs() !!}
        @endsection
        @section('scripts')
            <script>
                $(function() {
                    //get the pie chart canvas
                    var cData = JSON.parse(`<?php echo $chart_data; ?>`);
                    var ctx = $("#pie-chart");

                    //pie chart data
                    var data = {
                        labels: cData.label,
                        datasets: [{
                            label: "Productos Disponibles",
                            data: cData.data,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 3
                        }]
                    };

                    //options
                    var options = {
                        responsive: true,
                        title: {
                            display: true,
                            position: "top",
                            text: "Last Week Registered Users -  Day Wise Count",
                            fontSize: 18,
                            fontColor: "#111"
                        },
                        legend: {
                            display: true,
                            position: "bottom",
                            labels: {
                                fontColor: "#333",
                                fontSize: 16
                            }
                        }
                    };

                    //create Pie Chart class object
                    // var chart1 = new Chart(ctx, {
                    //     type: "bar",
                    //     data: data,
                    //     options: options
                    // });

                    const stackedBar = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        },
                    });



                });
            </script>
        @endsection

    @endauth
