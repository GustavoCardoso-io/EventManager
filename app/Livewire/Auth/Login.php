<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            // Redireciona conforme o tipo de usuário
            return redirect()->route("{$user->role}.dashboard");
        }

        session()->flash('error', 'Credenciais inválidas.');
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
