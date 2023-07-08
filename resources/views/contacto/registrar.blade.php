<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover"
                            style="background-image: url(img/c2.jpg); min-height:300px;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3" action="{{ route('contacto.create') }}" method="POST">
                                @csrf
                                <div>
                                    <h1>Contáctanos</h1>
                                    <p>Nos pondremos en contacto lo antes posible con usted</p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Jon" id="nombre"
                                        name="nombre" required aria-describedby="emailHelp"
                                        value="{{ old('nombre') }}">
                                    @error('nombre')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" placeholder="Perez" id="apellido"
                                        name="apellido" aria-describedby="emailHelp" value="{{ old('apellido') }}">
                                    @error('apellido')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Johndoe@example.com"
                                        id="email" name="email" aria-describedby="emailHelp"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="exampleInputEmail1" class="form-label">Mensaje</label>
                                    <textarea name="mensaje" placeholder="Mensaje" class="form-control" id="" rows="4"
                                        value="{{ old('mensaje') }}"></textarea>
                                    @error('mensaje')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand">Enviar mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
