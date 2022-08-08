<?php

namespace App\Http\Livewire\Dashboard\SocietyManagement;

use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class CreateComponent extends Component
{
    public $society, $master;

    public function mount($master = "Society")
    {
        $this->master = $master;
    }

    public function rules()
    {
        return [
            'society.name' => 'required|unique:societies,name',
            'society.address' => 'required|unique:societies,address',
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

        auth()->user()->societies()->firstOrCreate($this->society)
            ? $this->emit('toast', 'success', "$master Management", "The $master was created successfully.")
            : $this->emit('toast', 'error', "$master Management", "The $master was not created successfully, please try again.");

        if (Gate::denies('is-s'))
            $this->emit('toast', 'warning', "Restriction Management", "You will see the society once the super admin assigns you the society.");

        $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.dashboard.society-management.create-component');
    }
}
