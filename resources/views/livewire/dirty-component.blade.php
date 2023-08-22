<div class="w-50 m-auto mt-5">
    <input type="text" class="form-control" wire:model.lazy='email' wire:dirty.class='text-danger'>
    <span class="text-danger" wire:dirty wire:target='email'>You are typing on dirty state element ... </span>
</div>
