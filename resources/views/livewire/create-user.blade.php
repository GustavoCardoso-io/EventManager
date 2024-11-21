<div
    class="w-9/12 max-w-screen-2xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

    <form class="space-y-6" wire:submit='save'>
        <h1 class=" text-center text-2xl font-medium text-gray-900 dark:text-white"> Cadastro de Usuários</h1>
        <div class="grid gap-4  sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 justify-items-center">
            <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nome">Nome:</label>
                <input
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    wire:model.live='nome' type="text">
            </div>
            <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white " for="email">Email:
                </label>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    wire:model.live='email' type="text">
            </div>
            <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="password">Senha:
                </label>
                <input
                    class=" w-full bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500   dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    wire:model.live='senha' type="text">
            </div>
            <div></div>
            <div></div>
            <button
                class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                type="submit">Salvar
            </button>
        </div>
    </form>

    <div class="py-20">
        <livewire:search-user>
    </div>


</div>
