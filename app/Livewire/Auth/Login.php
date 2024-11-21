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

    //Faz a validação do usuario com o banco para saber que tipo de usuario é retorna para a sua devida view!
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

    //Rendereiza a view login!
    public function render()
    {
        return view('livewire.auth.login');
    }
}
