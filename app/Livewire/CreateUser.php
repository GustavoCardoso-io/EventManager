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

    // Validações de propriedades para poder cadastrar o usuario!

    #[Validate('required|string|min:3|max:50')]
    public $nome = '';

    #[Validate('required|email|unique:users,email')]
    public $email = '';

    #[Validate('required|min:6|max:20')]
    public $senha = '';

    #[Validate('required|in:admin,user')]
    public $role = '';


    //Faz o prenchimento do users para poder ser exibido na view!
    public function mount()
    {
        $this->users = User::all();
    }

    //renderiza a view create user!
    public function render()
    {

        return view('livewire.create-user');
    }

    //Função para salvar o usuario no banco de dados!
    public function save()
    {

        //Valida as informações passadas pelo usuario!
        $this->validate();

        //Cria o usuario no banco de dados!
        $user  =  User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => $this->senha,
            'role' => $this->role
        ]);

        //Reseta as informações nas propriedades!
        $this->nome = '';
        $this->email = '';
        $this->senha = '';
        $this->role = '';

        //Emiti um sinal que o usuario foi criado para ser usado onde lista os usuarios!
        $this->dispatch('user-created');
        //Envia uma mensagem pela session para informa sobre o criamento do usuario!
        session()->flash('success', 'Usuário criado com sucesso!');
    }


    //Lista todos os usuarios criados!
    #[On('user-created')]
    public function ListUsers()
    {
        $this->users = User::all();
    }
}
