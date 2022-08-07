<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Society;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Gate;

class SocietiesTable extends DataTableComponent
{
    protected $model = Society::class, $listeners = ['refreshDatatable' => '$refresh', 'delete'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function delete(Society $society, $master = "Society")
    {
        $society->delete()
            ? $this->emit('toast', 'success', "$master", "The $master was deleted successfully.")
            : $this->emit('toast', 'error', "$master", "Failed to delete $master, please try again.");
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Address", "address")
                ->searchable(),
            Column::make("Added By", "user.name")
                ->sortable()
                ->searchable(),
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
        return Gate::allows('is-s') ? Society::query() : Society::query()->whereBelongsTo(auth()->user());
    }
}
