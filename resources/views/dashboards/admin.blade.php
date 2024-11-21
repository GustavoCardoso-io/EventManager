<x-layouts.app>
    <div class="grid grid-cols-4 gap-2 px-6">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('usercreate') }}">
                <img class="rounded-t-lg" src="https://avatar.iran.liara.run/public" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('usercreate') }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cadastro de
                        Usuarios!</h5>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('usercreate') }}">
                <img class="rounded-t-lg"
                    src="https://clipart-library.com/newhp/upcoming-events-png-226737-events-png-1679830-free-cliparts-events-png-920_868.png"
                    alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('usercreate') }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Adicionar Evento!
                    </h5>
                </a>
            </div>
        </div>
    </div>

</x-layouts.app>
