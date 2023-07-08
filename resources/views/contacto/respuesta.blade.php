<!-- Mostrar la información del contacto -->
<p>Email: {{ $cont->email }}</p>
<p>Mensaje: {{ $cont->mesaje }}</p>

<!-- Formulario para enviar la respuesta -->

<form action="{{ route('contact.reply', ['id' => $contact->id]) }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="message">Mensaje</label>
        <textarea name="message" id="message" required></textarea>
    </div>

    <button type="submit">Enviar respuesta</button>
</form>
