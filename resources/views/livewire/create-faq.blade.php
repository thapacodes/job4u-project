<section class="container-fluid">
    <div class="mt-3">
        <h3>Create FAQ</h3>
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
                <label for="faq-question" class="mb-2">Faq Question</label>
                <input type="text" class="form-control rounded-0 @error('question')is-invalid @enderror" id="faq-question" wire:model="question" aria-describedby="faq-question" placeholder="Enter question">
                @error('question')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div wire:ignore class="mb-3">
                <label for="faq-description" class="form-label fw-500">Faq Description</label>
                <textarea wire:model="description" class="form-control p-2 p-md-3 rounded-0 @error('description') is-invalid @enderror"
                    id="faq-description" cols="30" rows="5">
                    {{ $description }}</textarea>
                @error('description')
                    <div id="faqDescriptionHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger rounded-0">Create FAQ</button>
        </form>
    </div>
</section>

@section('scripts')
    <script>
        function forBlogDescription() {
            ClassicEditor
                .create(document.querySelector('#faq-description'), {
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