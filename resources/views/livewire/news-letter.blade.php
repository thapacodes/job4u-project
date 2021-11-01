<section class="container pb-5">
    <div class="card rounded-0 p-4">
        <div class="card-body">
            <div class="mb-3">
                @if (session()->has('newsletter-message'))
                    <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                        {{ session('newsletter-message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="row">
                <h3 class="fw-700">Sign up for the Job4u Weekly Digest</h3>
                <p class="mb-4">Get the latest <strong>Job4u</strong> news, articles, tools, events, and more
                    delivered to your Inbox
                </p>
                <form wire:submit.prevent="save">
                    <div class="form-floating mb-3">
                        <input type="text" wire:model="name"
                            class="form-control rounded-0 @error('name') is-invalid @enderror" id="floatingName"
                            placeholder="name@example.com" value="{{ $name }}">
                        <label for="floatingName">Name</label>
                        @error('name')
                            <div class="text-danger fs-15">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" wire:model="email"
                            class="form-control rounded-0 @error('email') is-invalid @enderror" id="floatingEmail"
                            placeholder="name@example.com" value="{{ $email }}">
                        <label for="floatingEmail">Email address</label>
                        @error('email')
                            <div class="text-danger fs-15">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" wire:model="address"
                            class="form-control rounded-0 @error('address') is-invalid @enderror" id="floatingAddress"
                            placeholder="name@example.com" value="{{ $address }}">
                        <label for="floatingAddress">Address</label>
                        @error('address')
                            <div class="text-danger fs-15">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <h4>Weekly Digest</h4>
                        <div class="form-check">
                            <input class="form-check-input rounded-0 @error('employer') is-invalid @enderror"
                                type="checkbox" wire:model="employer" id="flexCheckEmployer">
                            <label class="form-check-label" for="flexCheckEmployer">
                                I am Employer
                            </label>
                            @error('employer')
                                <div class="text-danger fs-15">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input rounded-0 @error('job_seeker') is-invalid @enderror"
                                type="checkbox" wire:model="job_seeker" id="flexCheckJobSeeker">
                            <label class="form-check-label" for="flexCheckJobSeeker">
                                I am Job Seeker
                            </label>
                            @error('job_seeker')
                                <div class="text-danger fs-15">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-danger" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
