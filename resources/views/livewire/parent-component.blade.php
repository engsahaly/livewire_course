<div>
    {{ $parentTitle }}

    <hr>

    @foreach ($myChildren as $key => $child)
        @livewire('child-component', ['childName' => $child], key($child))
        <livewire:child-component childName="{{ $child }}" wire:key="{{ $child }}">
    @endforeach
</div>
