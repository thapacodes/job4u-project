<section>
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body px-5">
                <div class="mb-3">
                    @if (session()->has('page-message'))
                        <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                            {{ session('page-message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <form wire:submit.prevent="save" class="row">
                    @csrf
                    <div class="mb-3 col-lg-5">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" wire:model="name" name="name" class="form-control rounded-0 p-2 p-md-3 @error('name') is-invalid @enderror"
                            id="email" aria-describedby="nameHelp" />
                        @error('name')
                            <div id="nameHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
        
                    <div class="mb-3 col-lg-7">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" wire:model="email" name="email" class="form-control rounded-0 p-2 p-md-3 @error('email') is-invalid @enderror"
                            id="email" aria-describedby="emailHelp" />
                        @error('email')
                            <div id="emailHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
        
                    <div class="mb-3 col-12">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" wire:model="subject" name="subject" class="form-control rounded-0 p-2 p-md-3 @error('subject') is-invalid @enderror"
                            id="email" aria-describedby="subjectHelp" />
                        @error('subject')
                            <div id="subjectHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
        
                    <div class="mb-3 col-12">
                        <label for="description" class="form-label">Message</label>
                        <textarea wire:model="description" class="form-control rounded-0 p-2 p-md-3 @error('description') is-invalid @enderror" id="description" cols="30" rows="10"></textarea>
                        @error('description')
                            <div id="descriptionHelp" class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger rounded-0 btn-lg px-5 mb-3">Submit Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
