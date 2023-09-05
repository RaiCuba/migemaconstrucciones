@extends('layouts.menunavbar')
@section('clientes')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="./images/imgcliente/arena.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Arena lavado</h5>
                        <p class="card-text">Descubre la perfección en cada grano con nuestra arena lavada para la
                            construcción en Migema. Nuestra arena lavada ha sido cuidadosamente procesada para garantizar la
                            máxima pureza y calidad, eliminando cualquier impureza o partícula indeseada. Su granulometría
                            uniforme la convierte en la elección ideal para una variedad de aplicaciones, desde mezclas de
                            concreto de alta resistencia hasta lechos de nivelación precisos. Confía en nuestra arena lavada
                            para brindar estabilidad y durabilidad a tus proyectos, asegurando resultados excepcionales en
                            cada paso de la construcción</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/imgcliente/gravilla.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gravilla</h5>
                        <p class="card-text"> te presentamos nuestra gravilla de construcción, una elección superior para
                            añadir resistencia y estabilidad a tus proyectos. Nuestra gravilla ha sido seleccionada con
                            meticulosidad y suavizada por la naturaleza a lo largo de los años, lo que la convierte en un
                            material confiable para diversas aplicaciones. Ya sea que estés creando una base sólida para
                            carreteras o un paisaje atractivo, nuestra gravilla garantiza una distribución uniforme y un
                            rendimiento duradero. Confía en la calidad y la versatilidad de nuestra gravilla para llevar a
                            cabo tus proyectos de construcción con éxito.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/imgcliente/piedra.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Piedra</h5>
                        <p class="card-text">Piedra para construcción que es la base de la fortaleza y durabilidad en tus
                            proyectos. Nuestras piedras han sido seleccionadas meticulosamente para cumplir con los
                            estándares más exigentes, brindando solidez a tus edificaciones. Ya sea para la creación de
                            estructuras impresionantes o cimientos sólidos, nuestra piedra garantiza resistencia a largo
                            plazo y un aspecto estético excepcional. Confía en la calidad inigualable de nuestra piedra para
                            erigir un futuro sólido y perdurable.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./images/imgcliente/limo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Limo</h5>
                        <p class="card-text">Tierra o limo para agricultura que mejora el suelo y tener mayor rendimiento en
                            tus cultivos </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('cliente.footer')
@endsection
