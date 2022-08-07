<?php

namespace App\Http\Livewire\Dashboard\PlotManagement;

use App\Models\PlotType;
use App\Models\Society;
use Livewire\Component;

class CreateComponent extends Component
{

    public $plot, $master;

    public function mount($master = "Plot")
    {
        $this->master = $master;
    }

    public function rules()
    {
        return [
            'plot.number' => 'required|numeric',
            'plot.size' => 'required|string',
            'plot.street' => 'nullable|string',
            'plot.plot_type_id' => 'required|exists:plot_types,id',
            'plot.society_id' => 'required|exists:societies,id',
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

        auth()->user()->plots()->firstOrCreate([
            'number' => $this->plot['number'],
            'society_id'  => $this->plot['society_id']
        ], $this->plot)
            ? $this->emit('toast', 'success', "$master Management", "The $master was created successfully.")
            : $this->emit('toast', 'error', "$master Management", "The $master was not created successfully, please try again.");

        $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.dashboard.plot-management.create-component', [
            'societes' => Society::whereBelongsTo(auth()->user())->get(),
            'plotTypes' => PlotType::all(),
        ]);
    }
}
