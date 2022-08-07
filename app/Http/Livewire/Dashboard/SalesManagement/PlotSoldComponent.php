<?php

namespace App\Http\Livewire\Dashboard\SalesManagement;

use App\Models\Plot;
use App\Models\PlotSale;
use Livewire\Component;

class PlotSoldComponent extends Component
{
    public $sale;
    protected $listeners = ['setPlot'];

    public function setPlot($plotId)
    {
        $this->sale = PlotSale::wherePlotId($plotId)->with('customer')->first();
    }

    public function render()
    {
        return view('livewire.dashboard.sales-management.plot-sold-component');
    }
}
