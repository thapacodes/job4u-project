<section class="container">
    <div class="mt-3">
        <h3>Update Company Profile</h3>
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
                <label for="company-name" class="mb-2">Company Name</label>
                <input type="text" class="form-control rounded-0 @error('name')is-invalid @enderror" id="company-name" wire:model="name" aria-describedby="company-name" placeholder="Write your Company Name">
                @error('name')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="company-hq" class="mb-2">Company Hq</label>
                <select class="form-select rounded-0 @error('hq')is-invalid @enderror" id="company-hq" wire:model="hq">
                    <option value="">Choose</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Birgunj">Birgunj</option>
                    <option value="Bharatpur">Bharatpur</option>
                    <option value="Hetauda">Hetauda</option>
                    <option value="Dharan">Dharan</option>
                    <option value="Butwal">Butwal</option>
                    <option value="Dhangadi">Dhangadi</option>
                    <option value="Nepalgunj">Nepalgunj</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Kirtipur">Kirtipur</option>
                    <option value="Tulsipur">Tulsipur</option>
                    <option value="Bhimdatta">Bhimdatta</option>
                    <option value="Siddharthanagar">Siddharthanagar</option>
                    <option value="Birendranagar">Birendranagar</option>
                    <option value="Madhyapur Thimi">Madhyapur Thimi</option>
                    <option value="Dhankuta">Dhankuta</option>
                    <option value="Banepa">Banepa</option>
                    <option value="Rajbiraj">Rajbiraj</option>
                    <option value="Lahan">Lahan</option>
                    <option value="Inaruwa">Inaruwa</option>
                    <option value="Tansen">Tansen</option>
                    <option value="Damak">Damak</option>
                    <option value="Bhadrapur">Bhadrapur</option>
                    <option value="others">others</option>
                </select>
                @error('hq')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="download-include-file" class="mb-2">Company Logo</label>
                <input id="download-include-file" type="file" class="form-control rounded-0 @error('file') is-invalid @enderror mb-2" wire:model="file">
        
                @error('file') <span class="form-text error text-danger">{{ $message }}</span> @enderror
            </div>

            <div wire:ignore class="mb-3">
                <label for="company-description" class="form-label fw-500">Company Description</label>
                <textarea wire:model="description" class="form-control p-2 p-md-3 rounded-0 @error('description') is-invalid @enderror"
                    id="company-description" cols="30" rows="5">
                    {{ $description }}</textarea>
                @error('description')
                    <div id="companyDescriptionHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="company-url" class="mb-2">Company Url</label>
                <input type="text" class="form-control rounded-0 @error('url')is-invalid @enderror" id="company-url" wire:model="url" aria-describedby="company-url" placeholder="Write your Company Url">
                @error('url')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-danger rounded-0">Update Company Profile</button>
        </form>
    </div>
    <br>
    <br>
    <br>
</section>

@section('scripts')
    <script>
        function forCompanyDescription() {
            ClassicEditor
                .create(document.querySelector('#company-description'), {
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
        forCompanyDescription();
    </script>
@stop