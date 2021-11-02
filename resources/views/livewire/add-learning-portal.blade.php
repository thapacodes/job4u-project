<section class="container-fluid">
    <div class="mt-3">
        <h3>Add Learning Portal Resource</h3>
        <div>
            @if (session()->has('page-message'))
                <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                    {{ session('page-message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <form class="mt-3" wire:submit.prevent="submit">            
            <div class="form-group mb-3">
                <label for="download-include-file" class="mb-2">Include Thumbnail</label>
                <input id="download-include-file" type="file" class="form-control rounded-0 @error('file') is-invalid @enderror mb-2" wire:model="file">
        
                @error('file') <span class="form-text error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group mb-3">
                <label for="learningportal-title" class="mb-2">Learning Portal Title</label>
                <input type="text" class="form-control rounded-0 @error('title')is-invalid @enderror" id="learningportal-title" wire:model="title" aria-describedby="learningportal-title" placeholder="Enter learningportal title">
                @error('title')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="learningportal-category" class="mb-2">Learning Portal Category</label>
                <select class="form-select rounded-0 @error('category')is-invalid @enderror" id="learningportal-category" wire:model="category">
                    <option value="">Choose</option>
                    <option value="full-stack-programming">full-stack-programming</option>
                    <option value="front-end-programming">front-end-programming</option>
                    <option value="back-end-programming">back-end-programming</option>
                    <option value="game-dev">game-dev</option>
                    <option value="app-dev">app-dev</option>
                    <option value="customer-support">customer-support</option>
                    <option value="devops-sysadmin">devops-sysadmin</option>
                    <option value="sales-and-marketing">sales-and-marketing</option>
                    <option value="management-and-finance">management-and-finance</option>
                    <option value="product">product</option>
                    <option value="others">others</option>
                </select>
                @error('category')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="learningportal-url" class="mb-2">Learning Portal Url</label>
                <input type="text" class="form-control rounded-0 @error('url')is-invalid @enderror" id="learningportal-url" wire:model="title" aria-describedby="learningportal-url" placeholder="eg. https://www.freecodecamp.org">
                @error('url')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger rounded-0">Add Learning Portal Resource</button>
        </form>
    </div>
</section>
