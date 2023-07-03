@auth
@extends('layouts.menupricipal')
{{-- @section('content') --}}

@section('Contenido')



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
                <div class="container">
                   
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      
        <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h4>Actividades</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/5.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/2.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Wow amazing design! Can you make another
                                            tutorial for
                                            this design?</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header">
                    <h4>Asistencias</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-lg">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/5.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Congratulations on your graduation!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/2.jpg">
                                            </div>
                                            <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                        </div>
                                    </td>
                                    <td class="col-auto">
                                        <p class=" mb-0">Wow amazing design! Can you make another
                                            tutorial for
                                            this design?</p>
                                    </td>
                                </tr>
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