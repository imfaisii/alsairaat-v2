<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $user;

    public function rules()
    {
        return [
            'user.email' => 'required|exists:users,email',
            'user.password' => 'required'
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt($this->user))
            return redirect()->route('dashboard');

        $this->addError('credentials', "Invalid credentials , please try again.");
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
