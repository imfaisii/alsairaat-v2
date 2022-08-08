<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\AssignedSociety;

class SocietiesRestrictionsTable extends DataTableComponent
{
    protected $model = AssignedSociety::class, $listeners = ['refreshDatatable' => '$refresh', 'delete'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function delete(AssignedSociety $assignment, $master = "Assignment")
    {
        $assignment->delete()
            ? $this->emit('toast', 'success', "Society Management", "The $master was deleted successfully.")
            : $this->emit('toast', 'error', "Society Management", "Failed to delete $master, please try again.");
    }

    public function columns(): array
    {
        return [
            Column::make("Society", "society.name")
                ->sortable(),
            Column::make("Assigned to", "user.name")
                ->sortable(),
            Column::make("Assigned by", "assigner.name")
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
