<div class="container">
    <h3>Change Profile Picture</h3>
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
        <div class="mb-3 col-md-6">
            <label for="avater" class="form-label fw-500 visually-hidden">Profile Picture</label>
            <input type="file" wire:model="avater"
                class="form-control p-2 p-md-3 rounded-0 @error('avater') is-invalid @enderror" id="avater" />
            @error('avater')
                <div id="avaterHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-danger rounded-0">Change Profile Picture</button>
        </div>
    </form>
</div>
