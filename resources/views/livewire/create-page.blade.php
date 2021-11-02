<section class="container-fluid">
    <div class="mt-3">
        <h3>Create New Page</h3>
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
                <label for="page-title" class="mb-2">Page Title</label>
                <input type="text" class="form-control rounded-0 @error('title')is-invalid @enderror" id="page-title" wire:model="title" aria-describedby="page-title" placeholder="Enter title">
                @error('title')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="page-type" class="mb-2">Page Type</label>
                <select class="form-select rounded-0 @error('type')is-invalid @enderror" id="page-type" wire:model="type">
                    <option value="">Choose</option>
                    <option value="terms">terms page</option>
                    <option value="terms">privacy page</option>
                </select>
                @error('type')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div wire:ignore class="mb-3">
                <label for="page-description" class="form-label fw-500">Page Description</label>
                <textarea wire:model="description" class="form-control p-2 p-md-3 rounded-0 @error('description') is-invalid @enderror"
                    id="page-description" cols="30" rows="5">
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
        function forPageDescription() {
            ClassicEditor
                .create(document.querySelector('#page-description'), {
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
        forPageDescription();
    </script>
@stop