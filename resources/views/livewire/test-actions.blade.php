<div style="width:50%; margin:auto;">
    <h1 style="text-align: center;">{{ $active }}</h1>

    <div style="text-align: center;">
        <button style="border: 1px solid blue; padding: 0px 5px;" wire:click="$toggle('active')">+</button>

        <button style="border: 1px solid blue; padding: 0px 5px;" wire:click="decrement">-</button>
    </div>
</div>
