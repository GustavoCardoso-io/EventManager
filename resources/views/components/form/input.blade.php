@props(['propertie'])

<input
    class="block py-2.5 px-0 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
    wire:model.lazy='{{ $propertie }}' type="text">
@error($propertie)
    <span class="text-sm text-red-500">{{ $message }}</span>
@enderror
