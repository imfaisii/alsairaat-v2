<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;
    protected $listeners = ['refreshDatatable' => '$refresh', 'deleteUser'];

    public function deleteUser(User $user)
    {
        $user->delete()
            ? $this->emit('toast', 'success', 'User Account', 'The account was deleted successfully.')
            : $this->emit('toast', 'error', 'User Account', 'Failed to delete accont, please try again.');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Role", "role")
                ->format(
                    fn ($value, $row, Column $column) => ucwords($value)
                )
                ->html()
                ->sortable(),
            Column::make("Status", "status")
                ->format(
                    function ($value, $row, Column $column) {
                        if ($value == 'active')
                            return '<span class="badge bg-success">' . $value . '</span>';
                        else
                            return '<span class="badge bg-danger">' . $value . '</span>';
                    }
                )
                ->html(),
            Column::make('Action', 'id')
                ->view('livewire-tables.rows.general.delete'),
            Column::make("Created at", "created_at")
                ->format(
                    fn ($value, $row, Column $column) => $value->diffForHumans()
                )
                ->html()
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->format(
                    fn ($value, $row, Column $column) => $value->diffForHumans()
                )
                ->html()
                ->sortable(),
        ];
    }

    public function builder(): Builder
    {
        return User::query()->where('id', '!=', auth()->id());
    }
}
