<?php

namespace App\Http\Livewire\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UsersTable extends DataTableComponent
{
    protected $model = User::class, $listeners = ['refreshDatatable' => '$refresh', 'delete'];

    public function delete(User $user, $master = "User Account")
    {
        $user->delete()
            ? $this->emit('toast', 'success', "$master", "The $master was deleted successfully.")
            : $this->emit('toast', 'error', "$master", "Failed to delete $master, please try again.");
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Role", "role")
                ->format(
                    fn ($value, $row, Column $column) => ucwords($value)
                )
                ->html()
                ->searchable()
                ->sortable(),
            Column::make("Status", "status")
                ->format(
                    function ($value, $row, Column $column) {
                        if ($value == 'active')
                            return '<span class="badge badge-glow bg-success">' . ucwords($value) . '</span>';
                        else
                            return '<span class="badge badge-glow bg-danger">' . ucwords($value) . '</span>';
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

    public function builder(): Builder
    {
        return User::query()->where('id', '!=', auth()->id());
    }
}
