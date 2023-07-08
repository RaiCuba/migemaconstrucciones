@if (isset($errors) && count($errors) > 0)
    <div class="alert alert-warning">
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>
@endif
@if (Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $mensage)
            <div class="alert-alert-success">
                <i class="fa fa-check"></i>
                {{ $mensaje }}
            </div>
        @endforeach
    @else
        <div class="alert-alert-success">
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
    @endif
@endif

@if (session('Correcto'))
    <div class="alert alert-success">{{ session('Correcto') }}</div>
@endif
@if (session('Error'))
    <div class="alert alert-danger">{{ session('Error') }}</div>
@endif
