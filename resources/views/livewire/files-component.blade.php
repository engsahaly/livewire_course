<form class="w-50 m-auto mt-5" wire:submit.prevent='submit'>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Uplaod your file</label>
        <input type="file" class="form-control" wire:model="photo">
        @error('photo')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="spinner-border text-primary" role="status" wire:loading wire:target='photo'>
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div class="mb-3">
        @if ($photo)
            Image preview:
            <img src="{{ $photo->temporaryUrl() }}" width="200">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
