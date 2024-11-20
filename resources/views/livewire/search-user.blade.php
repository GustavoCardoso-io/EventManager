<div class="relative overflow-x-auto">

    <div class="py-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Procurar: </label>
        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" wire:model.live='userNomeSearch'>
    </div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    <button wire:click="sortBy('id')"> # @if ($sortField === 'id')
                            @if ($sortDirection === 'asc')
                                ↑
                            @else
                                ↓
                            @endif
                        @endif
                    </button>
                </th>
                <th scope="col" class="px-6 py-3">
                    <button wire:click="sortBy('name')">NOME @if ($sortField === 'name')
                            @if ($sortDirection === 'asc')
                                ↑
                            @else
                                ↓
                            @endif
                        @endif
                    </button>
                </th>
                <th scope="col" class="px-6 py-3" >EMAIL</th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
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
            <tr wire:key = "{{$user->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-3">{{ $user->id }}</th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->name }}</th>
                    <th scope="row" class="px-6 py-3">{{ $user->email }}</th>
                    <th scope="row" class="px-6 py-3">{{ $user->role }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
