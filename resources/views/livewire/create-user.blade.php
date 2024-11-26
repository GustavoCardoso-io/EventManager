<div
    class="w-9/12 max-w-screen-2xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    <x-form.form action='save' title='Cadastro de Usuário'>
        <div class="relative z-0 w-full mb-5 group">
            <x-form.label title='Nome:'></x-form.label>
            <x-form.input propertie='nome'></x-form.input>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form.label title='Email:'></x-form.label>
            <x-form.input propertie='email'></x-form.input>
        </div>

        <div class="grid md:grid-cols-2 md:gap-6">

            <div class="relative z-0 w-full mb-5 group">
                <x-form.label title='Senha:'></x-form.label>
                <x-form.input propertie='senha'></x-form.input>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <x-form.label title='Escolha Permissão:'></x-form.label>
                <x-form.select propertie='role'>
                    <x-form.select.option value='' title='Selecione'></x-form.select.option>
                    <x-form.select.option value='admin' title='Administrador'></x-form.select.option>
                    <x-form.select.option value='user' title='Usuário'></x-form.select.option>
                </x-form.select>
            </div>
        </div>
        <div class="relative flex justify-end z-0 w-full mb-5 group">
            <x-form.button.save> </x-form.button.save>
        </div>
    </x-form.form>
    <!-- Mensagem de sucesso -->
    @if (session()->has('success'))
        <div class="mt-4 text-sm text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <div class="relative z-0 w-full mb-5 group">
        <livewire:search-user>
    </div>


</div>
