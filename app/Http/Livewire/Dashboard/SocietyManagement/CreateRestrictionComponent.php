<?php

namespace App\Http\Livewire\Dashboard\SocietyManagement;

use App\Models\AssignedSociety;
use App\Models\Society;
use App\Models\User;
use Livewire\Component;

class CreateRestrictionComponent extends Component
{
    public $allocation;

    protected $listeners = ['unAssignSociety'];

    public function hydrate()
    {
        $this->emit('select2');
    }

    public function rules()
    {
        return [
            'allocation.society_id' => 'required|exists:societies,id',
            'allocation.user_id' => 'required|exists:users,id',
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();

        auth()->user()->assigner()->firstOrCreate($this->allocation)
            ? $this->emit('toast', 'success', 'Society Management', 'Society was assigned successfully. 😉')
            : $this->emit('toast', 'error', 'Society Management', 'Failed to assign company.😢');

        $this->reset('allocation');
        $this->emit('refreshDatatable');
    }

    public function unAssignCompany($id)
    {
        AssignedSociety::findOrFail($id)->delete()
            ? $this->emit('toast', 'success', 'Society Management', 'Society was un-assigned successfully. 😉')
            : $this->emit('toast', 'error', 'Society Management', 'Failed to un-assign society.😢');
    }

    public function render()
    {
        return view('livewire.dashboard.society-management.create-restriction-component', [
            'societies' => Society::all(),
            'users' => User::where('role', '!=', 'super-admin')->get(),
        ]);
    }
}
