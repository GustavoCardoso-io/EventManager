<nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://img.freepik.com/vetores-premium/colecao-de-logotipo-de-letra-alfabetica-e_647881-448.jpg"
                class="h-8" alt="Event Manager" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Event Manager</span>
        </a>
        <form action="" '>
            <button type="button" wire:click="$dispatch('logout')"
                class="inline-flex items-center justify-center p-2 w-10 h-5 text-sm text-gray-500 rounded-lg hover:bg-gray-100   dark:text-gray-400 dark:hover:bg-gray-700">
                <span class="sr-only"></span>
                Logout
            </button>
        </form>

    </div>
</nav>
