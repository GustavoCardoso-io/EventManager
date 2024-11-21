<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class CreateUser extends Component
{
    use WithPagination;

    public  $users = [];

    public $nome;
    public $email;
    public $senha;
    public $role = 'user';

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {

        return view('livewire.create-user');
    }

    public function save()
    {
        dd($this->name);
        $user  =  User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => $this->senha,
            'role' => $this->role
        ]);

        $this->nome = '';
        $this->email = '';
        $this->senha = '';

        $this->dispatch('user-created');
    }



    #[On('user-created')]
    public function ListUsers()
    {
        $this->users = User::all();
    }
}
