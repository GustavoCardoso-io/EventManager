<div
    class="w-full max-w-screen-2xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">

    <form class="space-y-6" wire:submit='save'>
        <h1 class=" text-center text-2xl font-medium text-gray-900 dark:text-white"> Cadastro de Usuários</h1>
        <div class="grid gap-4  sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 justify-items-center">
            <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nome">Nome:</label>
                <input
                    class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    wire:model.live='user.nome' type="text">
            </div>
            <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white " for="email">Email:
                </label>
                <input
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    wire:model.live='user.email' type="text">
            </div>
            <div class="w-full">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="password">Senha:
                </label>
                <input
                    class=" w-full bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500   dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    wire:model.live='user.senha' type="text">
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

<nav aria-label="Page navigation example">
    <ul class="flex items-center -space-x-px h-8 text-sm">
      <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          <span class="sr-only">Previous</span>
          <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
        </a>
      </li>

      <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          <span class="sr-only">Next</span>
          <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </a>
      </li>
    </ul>
  </nav>

</div>
