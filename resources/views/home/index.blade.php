@auth
    @extends('layouts.menupricipal')
    {{-- @section('content') --}}

    @section('Contenido')
        <div class="container">
            <div>
                <a href="{{ route('ver.grafico') }}">
                    <h5>Ver grafico </h5>
                </a>
            </div>
        </div>




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

            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-3 py-4-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stats-icon violet">
                                    <!--<i class="iconly-boldBookmark"></i>-->

                                    <i class="bi bi-bag-check-fill"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Compras</h6>
                                <h6 class="font-extrabold mb-0">Cant.: {{ $actemp }} </h6>
                                <h6 class="font-extrabold mb-0">Hoy.: {{ $hoy }}</h6>
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
                                <div class="stats-icon yello">
                                    <!--<i class="iconly-boldBookmark"></i>-->
                                    <i class="bi bi-file-bar-graph"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted font-semibold">Reportes</h6>
                                <h6 class="font-extrabold mb-0">Cant.: {{ $actemp }} </h6>
                            </div>
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ventas</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit">
                        </div>
                        <h1>{{ $chart->options['chart_title'] }}</h1>
                        {!! $chart->renderHtml() !!}

                    </div>



                    {{-- <div class="container"> --}}
                    {{-- contenedor para los gráficos --}}
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="container"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">

            <div class="col-12 col-xl-8">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actividades as $actividad)
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="{{ asset('images/fotos/' . $actividad->imagenn) }}"
                                                            alt="Imagen">
                                                        {{ $actividad->id_ima }}
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">
                                                        {{ $actividad->id_per }}
                                                        {{-- {{ $actividad->empleado->persona->nombre }}  --}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">
                                                    {{-- {{ $actividad->actividad->nombre }} --}}
                                                    {{ $actividad->name }}
                                                </p>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">
                                                    {{ $actividad->fecha }}
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
        </div>
    @endsection
    @section('scripts')
        {!! $chart->renderChartJsLibrary() !!}
        {!! $chart->renderJs() !!}
    @endsection

@endauth
