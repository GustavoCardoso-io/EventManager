<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class CreateUser extends Component
{
    use WithPagination;

    public  $users = [];

    #[Validate('required|string|min:3|max:50')]
    public $nome = '';

    #[Validate('required|email|unique:users,email')]
    public $email = '';

    #[Validate('required|min:6|max:20')]
    public $senha = '';

    #[Validate('required|in:admin,user')]
    public $role = '';

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

         $this->validate();

        $user  =  User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => $this->senha,
            'role' => $this->role
        ]);

        $this->nome = '';
        $this->email = '';
        $this->senha = '';
        $this->role = '';

        $this->dispatch('user-created');
         session()->flash('success', 'Usuário criado com sucesso!');
    }



    #[On('user-created')]
    public function ListUsers()
    {
        $this->users = User::all();
    }
}
