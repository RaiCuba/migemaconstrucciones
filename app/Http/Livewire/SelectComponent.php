<?php

namespace App\Http\Livewire;

use App\Models\Ciudad;
use App\Models\Depertamento;
use App\Models\Pai;
use Livewire\Component;

class SelectComponent extends Component
{

    public $pais, $ciudad; //model del select
    public $paises = [], $ciudades = [];
    public function mount()
    {

        $this->paises = Pai::all();
        $this->ciudades = collect();
        dump(paises);
    }
    public function updatedPais($value)
    {
        print_r($value);
        print_r('entro de');
        $this->ciudades = Depertamento::where('id_pai', $value)->get();
        $this->ciudades = $this->ciudades->first()->id ?? null;
        dump($value);
    }
    public function render()
    {
        return view('livewire.select-component');
    }
}
