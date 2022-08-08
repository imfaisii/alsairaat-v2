<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Expense;

class ExpensesTable extends DataTableComponent
{
    protected $model = Expense::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Amount", "amount")
                ->searchable()
                ->sortable(),
            Column::make("Total Plots", "total_plots")
                ->searchable()
                ->sortable(),
            Column::make("Expense Type", "expenseType.name")
                ->searchable()
                ->sortable(),
            Column::make("Society", "society.name")
                ->searchable()
                ->sortable(),
            Column::make("Added By", "user.name")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->format(
                    fn ($value, $row, Column $column) => $value->diffForHumans()
                )
                ->sortable(),
            Column::make('Action', 'id')
                ->view('livewire-tables.rows.general.delete'),
        ];
    }
}
