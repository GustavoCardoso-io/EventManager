<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    protected $listeners = ['logout'];

    //Faz o logout do sistema do usuario! Assim que recebe a emição do sinal atravez do clique no botao!
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    //Renderiza a view o componete de logout!
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
