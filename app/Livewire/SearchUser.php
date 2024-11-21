<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUser extends Component
{

    use WithPagination;
    public $userNomeSearch = '';
    public $sortField = 'name'; // Campo padrão para ordenar
    public $sortDirection = 'asc'; // Direção padrão


    #[On('user-created')]
    public function render()
    {
        return view('livewire.search-user', [
            'users' =>  User::where('name', 'like', '%' . $this->userNomeSearch . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10),
        ]);
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
    }
}
