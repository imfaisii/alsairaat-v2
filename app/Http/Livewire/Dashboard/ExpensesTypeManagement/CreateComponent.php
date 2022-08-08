<?php

namespace App\Http\Livewire\Dashboard\ExpensesTypeManagement;

use App\Models\ExpenseType;
use Livewire\Component;

class CreateComponent extends Component
{
    public $expense, $master;

    public function mount($master = "Expense Type")
    {
        $this->master = $master;
    }

    public function rules()
    {
        return [
            'expense.name' => 'required|unique:expense_types,name',
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
        
        ExpenseType::firstOrCreate($this->expense)
            ? $this->emit('toast', 'success', "$master Management", "The $master was created successfully.")
            : $this->emit('toast', 'error', "$master Management", "The $master was not created successfully, please try again.");

        $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.dashboard.expenses-type-management.create-component');
    }
}
