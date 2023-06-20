
@extends('layouts.menupricipal')
@section('Contenido')
<form action="{{ route('calcular') }}" method="POST">
    @csrf
    <label for="operacion">Operación:</label>
    <select name="operacion" id="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <br>
    <label for="numero1">Número 1:</label>
    <input type="text" name="numero1" id="numero1">
    <br>
    <label for="numero2">Número 2:</label>
    <input type="text" name="numero2" id="numero2">
    <br>
    <label for="resultado">Resultado:</label>
    <input type="text" name="resultado" id="resultado" readonly value="{{ $resultado }}">
    <br>
    <input type="submit" value="Calcular">
</form>

<h3>Calcular a partir de un text </h3> 
<label for="valor">Valor 1:</label>
<input type="text" name="valor" id="valor">
<br>
<label for="parametro1">Parámetro 1:</label>
<input type="text" name="parametro1" id="parametro1">
<br>
<label for="resultado">Resultado:</label>
<input type="text" name="resultado" id="resultado" readonly>


<form action="{{ route('getproductos') }}" method="GET">
<tr>
<select id="campoSelect">
    @foreach ($productos as $pro)
    <option value="{{ $pro->id_cos_pro }}">{{ $pro->costo_pro->nombre }}</option>
    @endforeach
    <option value="">Seleccione una opción</option>
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
</select>
</tr>
<br>
<input type="text" id="campoTexto" readonly>
</form>
<script>
    // Obtener el elemento del campo de selección y del campo de entrada
    const campoSelect = document.getElementById('campoSelect');
    const campoTexto = document.getElementById('campoTexto');

    // Escuchar el evento "change" en el campo de selección
    campoSelect.addEventListener('change', function() {
        // Obtener el valor seleccionado
        const opcionSeleccionada = campoSelect.value;

        // Realizar la validación y cargar el valor en el campo de entrada
        if (opcionSeleccionada === "{{ $pro->id_cos_pro }}") {
            campoTexto.value = 'Valor para opción 1';
        } else if (opcionSeleccionada === 'opcion2') {
            campoTexto.value = 'Valor para opción 2';
        } else {
            campoTexto.value = '';
        }
    });
</script>





<script>
    // Obtener los elementos del DOM
    const valorInput = document.getElementById('valor');
    const parametro1Input = document.getElementById('parametro1');
    const resultadoInput = document.getElementById('resultado');

    // Escuchar el evento "input" en el campo valor
    valorInput.addEventListener('input', function() {
        // Obtener los valores de los campos de entrada
        const valor = parseFloat(valorInput.value);
        const parametro1 = parseFloat(parametro1Input.value);

        // Realizar el cálculo basado en los valores ingresados
        const resultado = valor * parametro1;

        // Actualizar el campo de resultado con el valor calculado
        resultadoInput.value = resultado;
    });
</script>

@endsection