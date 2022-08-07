<?php

namespace App\Http\Livewire\Dashboard\SalesManagement;

use App\Models\Plot;
use Livewire\Component;

class PlotSaleComponent extends Component
{
    public $sale, $plotId, $custId;

    protected $listeners = ['setChild'];

    public function setChild($plotId, $custId)
    {
        $this->plotId = $plotId;
        $this->custId = $custId;
    }

    public function rules()
    {
        return [
            'sale.price' => 'required|numeric',
            'sale.discount' => 'required|numeric|lte:sale.price',
            'sale.reference' => 'nullable|string',
        ];
    }

    public function storePlotSale()
    {
        $this->validate();
        $this->sale['customer_id'] = $this->custId;
        $this->sale['plot_id'] = $this->plotId;

        $master = "Plot Sale";
        $plot = Plot::findOrFail($this->plotId);

        auth()->user()->plotSales()->firstOrCreate($this->sale)
            ? $this->emit('toast', 'success', "$master Management", "The $master was created successfully.")
            : $this->emit('toast', 'error', "$master Management", "The $master was not created successfully, please try again.");

        $plot->update([
            'customer_id' => $this->custId
        ]);

        $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.dashboard.sales-management.plot-sale-component');
    }
}
