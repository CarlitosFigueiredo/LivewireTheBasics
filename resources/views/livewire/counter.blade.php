<div>

    Count: {{ $count }}

    <button wire:click="increment">
        +
    </button>

    <button wire:click="decrement">
        -
    </button>

    {{-- Increment, quando o mouse passa por cima --}}
    <button wire:mouseenter="increment">
        ++
    </button>
</div>
