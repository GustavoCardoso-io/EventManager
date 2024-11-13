<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class CreateUser extends Component
{
    public  $users = [];

    public $nome ;
    public $email ;
    public $senha ;
    public $role = 'user';




    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {

        return view('livewire.create-user');
    }

    public function save(){
        $user  =  User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => $this->senha,
            'role' => $this->role
        ]);

        $this->dispatch('user-created');
    }

    #[On('user-created')]
    public function ListUsers(){
        $this->users = User::all();
    }

    public function SearchUser(){
        $this->users = User::where('name', 'like', '%' . $this->userNomeSearch . '%')->get();
    }

}
