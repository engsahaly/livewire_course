<div class="w-50 m-auto mt-5">
    <button wire:click='submit'>
        Submit
        {{-- <div class="spinner-border spinner-border-sm text-danger" role="status" wire:loading.delay.longest>
            <span class="visually-hidden">Loading...</span>
        </div> --}}
    </button>

    {{-- <button class='btn-danger' wire:click='submit2' wire:loading.class.remove='btn-danger'>Submit2</button> --}}

    <input type="button" wire:click='submit2' value="Submit2" wire:loading.attr='disabled'>

    <div class="spinner-border spinner-border-sm text-danger" role="status" wire:loading wire:target='submit'>
        <span class="visually-hidden">Loading...</span>
    </div>


    {{-- <small class="text-primary" wire:loading>
        Loading ...
    </small> --}}
</div>
