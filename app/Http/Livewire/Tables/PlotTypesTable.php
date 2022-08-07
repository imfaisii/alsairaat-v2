<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PlotType;

class PlotTypesTable extends DataTableComponent
{
    protected $model = PlotType::class, $listeners = ['refreshDatatable' => '$refresh', 'delete'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function delete(PlotType $plotType, $master = "Plot Type")
    {
        $plotType->delete()
            ? $this->emit('toast', 'success', "$master", "The $master was deleted successfully.")
            : $this->emit('toast', 'error', "$master", "Failed to delete $master, please try again.");
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Status", "id")
                ->format(
                    function ($value, $row, Column $column) {
                        return '<span class="badge badge-glow bg-success">Active</span>';
                    }
                )
                ->html(),
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
