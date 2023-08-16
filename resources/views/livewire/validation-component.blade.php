<form class="w-50 m-auto mt-5" wire:submit.prevent='submit'>
    @error('custom_error')
        <span class="text-primary">{{ $message }}</span>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" wire:model.defer='email'>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" wire:model.defer='password'>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" wire:model.defer='remember'>
        <label class="form-check-label" for="exampleCheck1">Remember</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
