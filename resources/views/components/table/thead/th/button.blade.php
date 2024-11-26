@props(['field','sortField','description'])
<button wire:click="sortBy('{{ $field }}')"> {{$description}} @if ($sortField === '{{ $field }}')
        @if ($sortDirection === 'asc')
            ↑
        @else
            ↓
        @endif
    @endif
</button>
