<div class="mt-4">

    <div class="col-4 mb-2 mt-2">
        <label for="">Procurar: </label>
        <input type="text" wire:model.live='userNomeSearch'>
    </div>

    <table class=" mt-2 table table-striped">
        <thead>
            <tr>
                <th scope="col">
                    <button wire:click="sortBy('id')"> # @if ($sortField === 'id')
                            @if ($sortDirection === 'asc')
                                ↑
                            @else
                                ↓
                            @endif
                        @endif
                    </button>
                </th>
                <th scope="col">
                    <button wire:click="sortBy('name')">NOME @if ($sortField === 'name')
                            @if ($sortDirection === 'asc')
                                ↑
                            @else
                                ↓
                            @endif
                        @endif
                    </button>
                </th>
                <th scope="col">EMAIL</th>
                <th scope="col">
                    <button wire:click="sortBy('role')">ROLE @if ($sortField === 'role')
                            @if ($sortDirection === 'asc')
                                ↑
                            @else
                                ↓
                            @endif
                        @endif
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <th scope="row">{{ $user->name }}</th>
                    <th scope="row">{{ $user->email }}</th>
                    <th scope="row">{{ $user->role }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
