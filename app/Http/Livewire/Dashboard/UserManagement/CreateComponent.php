<?php

namespace App\Http\Livewire\Dashboard\UserManagement;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateComponent extends Component
{
    public $user, $master;

    public function mount($master = "User Account")
    {
        $this->master = $master;
    }

    public function rules()
    {
        return [
            'user.name' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'user.email' => 'required|unique:users,email',
            'user.password' => 'required',
            'user.role' => 'required|in:super-admin,admin'
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
        $this->user['password'] = Hash::make($this->user['password']);

        User::firstOrCreate($this->user)
            ? $this->emit('toast', 'success', "$master Management", "The $master was created successfully and the password was shared on email address.")
            : $this->emit('toast', 'error', "$master Management", "The $master was not created successfully, please try again.");


        $this->emit('refreshDatatable');
    }
    public function render()
    {
        return view('livewire.dashboard.user-management.create-component');
    }
}
