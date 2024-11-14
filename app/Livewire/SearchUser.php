<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class SearchUser extends Component
{

    public $users = [];
    public $userNomeSearch = '';

    public $sortField = 'name'; // Campo padrão para ordenar
    public $sortDirection = 'asc'; // Direção padrão


    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.search-user');
    }

    #[On('user-created')]
    public function updatedUserNomeSearch()
    {
        $this->users = User::where('name', 'like', '%' . $this->userNomeSearch . '%')
        ->orderBy($this->sortField, $this->sortDirection)
        ->get();
    }

        // Alterna a direção da ordenação
        public function sortBy($field)
        {
            if ($this->sortField === $field) {
                $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                $this->sortField = $field;
                $this->sortDirection = 'asc';
            }
            $this->updatedUserNomeSearch(); // Atualiza a busca com a nova ordenação
        }
}
