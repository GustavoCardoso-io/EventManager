<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-sm p-4 bg-white border rounded shadow">
        <h2 class="text-xl font-bold text-center mb-4">Login</h2>
        @if (session('error'))
            <div class="mb-4 text-red-500">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" wire:model="email" class="w-full border rounded p-2" />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Senha</label>
                <input type="password" id="password" wire:model="password" class="w-full border rounded p-2" />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Entrar</button>
        </form>
    </div>
</div>
