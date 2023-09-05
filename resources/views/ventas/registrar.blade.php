@extends('layouts.menupricipal')
@section('Contenido')
    <div class="container">




        <form action="{{ route('ventas.create') }}" method="post" class="row g-3">
            <!--se requiere este para ralaval para que funciones-->
            @csrf

            <h1 class="modal-title fs-5" id="modalRegistrarpais">Registrar Ventas</h1>


            {{-- <div class="col-md-4">
                <label for="exampleInputEmail1" class="form-label">Lugar de venta3</label>
                <select name="parametro1" id="parametro1" class="form-control" onchange="cargar(this)">
                    <option value="">seleccione almacen3</option>
                    @foreach ($paises as $opcio)
                        <option value="{{ $opcio->id_pai }}">{{ $opcio->nombre }}</option>
                    @endforeach
                </select>
            </div> --}}

            {{-- <div class="col-md-4">
                <label for="opcion" class="form-label">Producto:sel</label>
                <select name="depa" id="depa" class="form-control">

                    <option value="">seleccione un producto</option>

                </select>
            </div> --}}

            <div class="col-md-4">
                <label for="exampleInputEmail1" class="form-label">Lugar de venta::</label>
                <select name="parametro1" id="parametro1" class="form-control" onchange="cargar(this)">
                    <option value="">seleccione almacen3</option>
                    @foreach ($lugares as $opcio)
                        <option value="{{ $opcio->id_lug }}">{{ $opcio->almacen }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="opcion" class="form-label">Producto de venta::</label>
                <select name="miSelect" id="miSelect" class="form-control">

                    <option value="">seleccione un producto</option>
                    {{-- @foreach ($productos as $opcion)
                        <option value="{{ $opcion->id_pro }}">{{ $opcion->costo_pro->nombre }} / id_pro:
                            {{ $opcion->id_pro }}
                            /
                            precio: {{ $opcion->costo_pro->precio }}</option>
                    @endforeach --}}
                </select>
            </div>
            <div class="col-mb-4">
                <input type="text" class="form-control" id="id" name="id" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="col-mb-4">
                <label for="exampleInputEmail1" class="form-label">Precio por m3</label>
                <input type="text" class="form-control" id="precio" name="precio" required readonly>
                <div id="emailHelp" class="form-text"></div>
            </div>

            <div class="col-mb-4">

                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" readonly>


                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="valor" name="valor" required>
                <div id="emailHelp" class="form-text"></div>
            </div>

            <div class="col-mb-4">
                <label for="exampleInputEmail1" class="form-label">total</label>
                <input type="text" class="form-control" id="resultado" name="resultado" required readonly>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="col-mb-4">
                <label for="exampleInputEmail1" class="form-label">Descripción</label>

                <input type="text" class="form-control" id="descripcion" name="descripcion" required readonly>


                <div id="emailHelp" class="form-text"></div>
            </div>
            <div>
                <a href="{{ route('ventas') }}" class="btn btn-info"><span class="fas fa-indo-alt"></span>Regresar</a>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>

    {{-- <select id="miSelect">
        <option value="">Seleccione una opción</option>
        @foreach ($productos as $opcion)
            <option value="{{ $opcion->id_pro }}">{{ $opcion->costo_pro->nombre }} / id_pro: {{ $opcion->id_pro }} /
                precio: {{ $opcion->costo_pro->precio }}</option>
        @endforeach
    </select> --}}
    <script>
        function cargar(select1) {
            let ids = select1.value;
            fetch(`lugar/${ids}/producto`)
                .then(function(response) {
                    return response.json();
                })
                .then(function(jsonDatos) {
                    cargarproductos(jsonDatos);
                })
        }

        function cargarproductos(jsonProductos) {
            let selectprod = document.getElementById('miSelect');
            clearSelect(selectprod);
            jsonProductos.forEach(function(pro) {
                let optionTag = document.createElement('option');
                optionTag.value = pro.id_cos_pro;
                optionTag.innerHTML = pro.nombre;
                selectprod.append(optionTag);
            })
        }

        function clearSelect(sel) {
            while (sel.options.length > 1) {
                sel.remove(1);
            }
        }
    </script>

    <script>
        function cargardatos(select) {
            let ids = select.value;
            fetch(`lugar/${ids}/producto`)
                .then(function(response) {
                    return response.json();
                })
                .then(function(jsonDatos) {
                    console.log(jsonDatos);
                    //cargarproductos(jsonDatos);
                })
        }

        // function cargarproductos(jsonProductos) {
        // let selectprod = document.getElementById('miSelect');
        // clearSelect(selectprod);
        // jsonProductos.forEach(function(pro) {
        // let optionTag = document.createElement('option');
        // optionTag.value = pro.id_cos_pro;
        // optionTag.innerHTML = pro.nombre;
        // selectprod.append(optionTag);
        // })
        // }

        // function clearSelect(sel) {
        // while (sel.options.length > 1) {
        // sel.remove(1);
        // }
        // }
    </script>


    <script>
        document.getElementById('miSelect').addEventListener('change', function() {

            const valor1 = document.getElementById('id');
            const valor2 = document.getElementById('precio');
            const resultado = document.getElementById('resultado');
            const descrip = document.getElementById('descripcion');
            const stock = document.getElementById('stock');

            var selectValue = this.value;

            @foreach ($productos as $opcion)
                if (selectValue === '{{ $opcion->id_cos_pro }}') {
                    valor1.value = '{{ $opcion->id_pro }}';
                    valor2.value = '{{ $opcion->costo_pro->precio }}';
                    descrip.value = '{{ $opcion->descrip }}';
                    stock.value = '{{ $opcion->cantidad }}';
                }
            @endforeach

        });
    </script>



    <script>
        // Obtener los elementos del DOM
        const valorInput = document.getElementById('valor');
        const parametro1Input = document.getElementById('precio');
        const resultadoInput = document.getElementById('resultado');

        // Escuchar el evento "input" en el campo valor
        valorInput.addEventListener('input', function() {
            // Obtener los valores de los campos de entrada
            const valor1 = parseFloat(valorInput.value);
            const parametro1 = parseFloat(parametro1Input.value);

            // Realizar el cálculo basado en los valores ingresados
            const resultado = valor1 * parametro1;

            // Actualizar el campo de resultado con el valor calculado
            resultadoInput.value = resultado;
        });
    </script>


    <script>
        const id1 = document.getElementById('id');
        const descripcion = document.getElementById('descripcion');
        $(document).ready(function() {
            $('#parametro1').on('change', function() {
                var paisId = $(this).val();
                $.ajax({
                    url: 'getDatos1',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        pais_id: paisId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#id').empty();
                        $.each(response, function(key, pro) {
                            id1.value = pro.id_pro;
                        });
                        $('#descripcion').empty();
                        $.each(response, function(key, pro) {
                            descripcion.value = pro.descrip;
                        });
                    }
                });


            });
        });
    </script>
@endsection
