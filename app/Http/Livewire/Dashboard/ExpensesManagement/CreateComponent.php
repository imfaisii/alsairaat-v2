<?php

namespace App\Http\Livewire\Dashboard\ExpensesManagement;

use App\Models\Expense;
use App\Models\ExpenseType;
use App\Models\Society;
use Livewire\Component;
use Socket;

class CreateComponent extends Component
{
    public $expense;

    public function rules()
    {
        return [
            'expense.amount' => 'required|numeric',
            'expense.society_id' => 'required|exists:societies,id',
            'expense.expense_type_id' => 'required|exists:expense_types,id',
        ];
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function store()
    {
        $this->validate();
        $totalPlots = Society::find($this->expense['society_id'])->plots()->count();

        // creating the expense
        $expense = auth()->user()->expenses()->create(array_merge(['total_plots' => $totalPlots], $this->expense));

        // saving each plot expense
        Society::find($this->expense['society_id'])->plots()->get()->each(function ($plot) use ($expense, $totalPlots) {
            $plot->plotExpenses()->create([
                'expense_id' => $expense->id,
                'amount' => $expense->amount / $totalPlots,
                'plot_id' => $plot->id
            ]);
        });

        // notifying front end
        $this->emit('toast', 'success', "Expense Management", "Expenses were added in plots.");
        $this->emit('refreshDatatable');
    }
    public function render()
    {
        return view('livewire.dashboard.expenses-management.create-component', [
            'societies' => Society::whereBelongsTo(auth()->user())->get(),
            'expenseTypes' => ExpenseType::all()
        ]);
    }
}
