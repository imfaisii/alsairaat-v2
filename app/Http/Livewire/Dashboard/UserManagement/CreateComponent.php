<?php

namespace App\Http\Livewire\Dashboard\UserManagement;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateComponent extends Component
{
    public $user;

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


    public function storeUser()
    {
        $this->validate();
        $this->user['password'] = Hash::make($this->user['password']);

        User::firstOrCreate($this->user)
            ? $this->emit('toast', 'success', 'User Account', 'The account was created successfully and the password was shared on email address.')
            : $this->emit('toast', 'error', 'User Account', 'Failed to create accont, please try again.');

        $this->emit('refreshDatatable');
    }
    public function render()
    {
        return view('livewire.dashboard.user-management.create-component');
    }
}
