<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Plot;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Gate;

class PlotsTable extends DataTableComponent
{
    protected $model = Plot::class, $listeners = ['refreshDatatable' => '$refresh', 'delete'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function delete(Plot $plot, $master = "Plot")
    {
        $plot->delete()
            ? $this->emit('toast', 'success', "$master", "The $master was deleted successfully.")
            : $this->emit('toast', 'error', "$master", "Failed to delete $master, please try again.");
    }

    public function columns(): array
    {
        return [
            Column::make("Number", "number")
                ->searchable()
                ->sortable(),
            Column::make("Society", "society.name")
                ->searchable(),
            Column::make("Type", "plotType.name")
                ->searchable()
                ->sortable(),
            Column::make("Status", "status")
                ->format(
                    function ($value, $row, Column $column) {
                        if ($value == 'available')
                            return '<span class="badge badge-glow bg-success">' . ucwords($value) . '</span>';
                        else
                            return '<span class="badge badge-glow bg-warning">' . ucwords($value) . '</span>';
                    }
                )
                ->html()
                ->searchable()
                ->sortable(),
            Column::make("Sold to", "customer.name")
                ->format(
                    fn ($value, $row, Column $column) => $value ?? 'Not sold'
                ),
            Column::make("Created at", "created_at")
                ->format(
                    fn ($value, $row, Column $column) => $value->diffForHumans()
                )
                ->sortable(),
            Column::make('Action', 'id')
                ->view('livewire-tables.rows.general.delete'),
        ];
    }

    public function builder(): Builder
    {
        return Gate::allows('is-s') ? Plot::query() : Plot::query()->whereBelongsTo(auth()->user());
    }
}
