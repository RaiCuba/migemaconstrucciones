<?php

namespace App\Http\Livewire;

use App\Models\CostoPro as costoproducto;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Livewire\Component;

class LivewireChart extends Component
{
    public function render()
    {
        return view('livewire.livewire-chart');
    }
}
