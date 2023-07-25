<select id="campo1">
    <option value="">Seleccione una opción</option>
    <option value="opcion1">Opción 1</option>
    <option value="opcion2">Opción 2</option>
    <!-- Agrega más opciones según tus necesidades -->
</select>

<select id="campo2">
    <!-- Aquí se cargarán las opciones dependientes -->
</select>

<script>
    $('#campo1').on('change', function() {
        var valor = $(this).val();
        if (valor) {
            $.ajax({
                url: '/obtener-opciones/' + valor,
                type: 'GET',
                success: function(response) {
                    // Vaciar el segundo campo select
                    $('#campo2').empty();

                    // Agregar las opciones al segundo campo select
                    $.each(response, function(key, value) {
                        $('#campo2').append($('<option>').text(value).attr('value', key));
                    });
                }
            });
        } else {
            // Vaciar el segundo campo select si no se selecciona ninguna opción en el primero
            $('#campo2').empty();
        }
    });
</script>
