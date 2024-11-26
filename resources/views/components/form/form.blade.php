@props([
    'action' => '',
    'title' => '',
])

<form class="max-w-6xl mx-auto" wire:submit= "{{ $action }}">
    <h1 class="text-center text-2xl font-medium text-gray-900 dark:text-white"> {{ $title }}</h1>
        {{ $slot }}
</form>
