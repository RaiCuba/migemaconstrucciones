<div>
    <div class="col-md-6">
        hola componente
        <label>pais</label>
        <select class="form-control" wire_model="pais">
            <option value="">Sleccione un pais</option>
            @foreach ($paises as $pais)
                <option value="{{ $pais->id_pai }}">{{ $pais->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 mt-2">
        <label>pais</label>
        <select class="form-control" wire:model="ciudad">
            @if ($ciudades->count() == 0)
                <option value="">Sleccione una ciudad</option>
            @endif

            @foreach ($ciudades as $ciuda)
                <option value="{{ $ciuda->id_dep }}">{{ $ciuda->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>
