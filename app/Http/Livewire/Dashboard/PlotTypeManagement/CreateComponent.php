<?php

namespace App\Http\Livewire\Dashboard\PlotTypeManagement;

use App\Models\PlotType;
use Livewire\Component;

class CreateComponent extends Component
{
    public $plot, $master;

    public function mount($master = "Plot Type")
    {
        $this->master = $master;
    }

    public function rules()
    {
        return [
            'plot.name' => 'required|unique:plot_types,name',
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();
        $master = $this->master;

        PlotType::firstOrCreate($this->plot)
            ? $this->emit('toast', 'success', "$master Management", "The $master was created successfully.")
            : $this->emit('toast', 'error', "$master Management", "The $master was not created successfully, please try again.");

        $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.dashboard.plot-type-management.create-component');
    }
}
