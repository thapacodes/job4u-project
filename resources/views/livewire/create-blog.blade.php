<section class="container-fluid">
    <div class="mt-3">
        <h3>Create Blog Post</h3>
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
                <label for="blog-title" class="mb-2">Blog Title</label>
                <input type="text" class="form-control rounded-0 @error('title')is-invalid @enderror" id="blog-title" wire:model="title" aria-describedby="blog-title" placeholder="Enter title">
                @error('title')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="blog-category" class="mb-2">Blog Category</label>
                <select class="form-select rounded-0 @error('category')is-invalid @enderror" id="blog-category" wire:model="category">
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
            <div wire:ignore class="mb-3">
                <label for="blog-description" class="form-label fw-500">Blog Description</label>
                <textarea wire:model="description" class="form-control p-2 p-md-3 rounded-0 @error('description') is-invalid @enderror"
                    id="blog-description" cols="30" rows="5">
                    {{ $description }}</textarea>
                @error('description')
                    <div id="blogDescriptionHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger rounded-0">Create Blog Post</button>
        </form>
    </div>
</section>

@section('scripts')
    <script>
        function forBlogDescription() {
            ClassicEditor
                .create(document.querySelector('#blog-description'), {
                    toolbar: {
                        items: [
                            'undo',
                            'redo',
                            'bold',
                            'fontBackgroundColor',
                            'fontSize',
                            'fontColor',
                            'italic',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'imageUpload',
                            'imageInsert',
                            'link'
                        ]
                    },
                    language: 'en',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side',
                            'linkImage'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'tableCellProperties',
                            'tableProperties'
                        ]
                    },
                    licenseKey: '',
                })
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('description', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }
        forBlogDescription();
    </script>
@stop