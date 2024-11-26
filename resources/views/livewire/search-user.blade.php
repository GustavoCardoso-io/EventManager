<div class="relative overflow-x-auto">

    <div class="py-5">
        <x-form.label title='Nome Usuário:'></x-form.label>
        <x-form.input propertie='userNomeSearch' type='text'></x-form.input>
    </div>

    <x-table.table>
        <x-table.thead>

            <x-table.thead.lfth>
                <x-table.thead.th.button field='id' :sortField='$sortField' description='#'></x-table.thead.th.button>
            </x-table.thead.lfth>
            <x-table.thead.mdth>
                <x-table.thead.th.button field='name' :sortField='$sortField' description='Nome'></x-table.thead.th.button>
            </x-table.thead.mdth>

            <x-table.thead.mdth>
                <x-table.thead.th.button field='email' :sortField='$sortField' description='Email'></x-table.thead.th.button>
            </x-table.thead.mdth>

            <x-table.thead.rgth>
                <x-table.thead.th.button field='role' :sortField='$sortField'
                    description='Função'></x-table.thead.th.button>
            </x-table.thead.rgth>
        </x-table.thead>
        <tbody>
            @foreach ($users as $user)
                <x-table.tbody.tr key='{{$user->id}}'>
                    {{-- <tr wire:key = "{{ $user->id }}" --}}
                        {{-- class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> --}}
                        <x-table.tbody.tr.th value='{{ $loop->index }}'></x-table.tbody.tr.th>
                        {{-- <th scope="row" class="px-6 py-3">{{ $loop->index }}</th> --}}
                        <x-table.tbody.tr.th value='{{ $user->name }}'></x-table.tbody.tr.th>
                        <x-table.tbody.tr.th value='{{ $user->email }}'></x-table.tbody.tr.th>
                        <x-table.tbody.tr.th value='{{ $user->role }}'></x-table.tbody.tr.th>
                </x-table.tbody.tr>
            @endforeach
        </tbody>
    </x-table.table>

    <!-- Renderiza os links de paginação -->
    <div class="mt-4">
        {{ $users->links() }}
    </div>

</div>
