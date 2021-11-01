<div class="container">
    <h3>Change Password</h3>
    <div class="mb-2">
        @if (session()->has('page-message'))
            <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                {{ session('page-message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <form wire:submit.prevent="save" class="row">
        @csrf
        <div class="mb-3">
            <label for="password" class="form-label fw-500">New Password</label>
            <input type="password" wire:model="password"
                class="form-control p-2 p-md-3 rounded-0 @error('password') is-invalid @enderror" id="password" />
            @error('password')
                <div id="passwordHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label fw-500">Password Confirmation</label>
            <input type="password" wire:model="password_confirmation"
                class="form-control p-2 p-md-3 rounded-0 @error('password_confirmation') is-invalid @enderror" id="password_confirmation" />
            @error('password_confirmation')
                <div id="password_confirmationHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-danger rounded-0">Change Password</button>
        </div>
    </form>
</div>
<br>
<br>