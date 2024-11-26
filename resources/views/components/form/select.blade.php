@props(['propertie'])

<select id="selectOption" wire:model.lazy="{{$propertie}}"
class="block py-2.5 px-0 w-full  rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
    {{$slot}}
</select>
@error($propertie)
<span class="text-sm text-red-500">{{ $message }}</span>
@enderror
