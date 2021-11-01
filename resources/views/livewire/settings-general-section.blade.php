<div class="container">
    <h3>General Profile Edit</h3>
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
            <label for="name" class="form-label fw-500">Full Name</label>
            <input type="text" wire:model="name" value="{{ $name }}"
                class="form-control p-2 p-md-3 rounded-0 @error('name') is-invalid @enderror" id="name" />
            @error('name')
                <div id="nameHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="contact" class="form-label fw-500">Contact</label>
            <input type="text" wire:model="contact" value="{{ $contact }}"
                class="form-control p-2 p-md-3 rounded-0 @error('contact') is-invalid @enderror" id="contact" />
            @error('contact')
                <div id="contactHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 col-md-6">
            <label for="education" class="form-label fw-500">Education Level</label>
            <select wire:model="education" value="{{ $education }}"
                class="form-control p-2 p-md-3 rounded-0 @error('education') is-invalid @enderror" id="contact" />
            <option value="">Do Not Specify</option>
            <option value="Bachelor Data Science">Bachelor Data Science</option>
            <option value="Bachelor in Computer Science">Bachelor in Computer Science</option>
            <option value="BSc Computer Science and DigitisationBachelor in Software Engineering">BSc Computer
                Science and DigitisationBachelor in Software Engineering</option>
            <option value="Bachelor in Software Engineering">Bachelor in Software Engineering</option>
            <option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
            <option value="Bachelor in Artificial Intelligence fo Business">Bachelor in Artificial Intelligence
                fo Business</option>
            <option value="Bsc (Hons) Computing">Bsc (Hons) Computing</option>
            <option value="Bachelor in Telecommunication systems and computer networks">Bachelor in
                Telecommunication systems and computer networks</option>
            <option value="BSc in Computer Science">BSc in Computer Science</option>
            <option value="International Bachelor of Computer Science (IB)">International Bachelor of Computer
                Science (IB)</option>
            <option value="Bachelor in Computer Engineering">Bachelor in Computer Engineering</option>
            <option value="Bachelor\'s in Applied Computer Science and Artificial Intelligence">Bachelor's in
                Applied Computer Science and Artificial Intelligence</option>
            <option value="Bachelor of Business Administration - Computer Applications (BBA)">Bachelor of
                Business Administration - Computer Applications (BBA)</option>
            <option value="Software Development and Entrepreneurship (Professional Higher Education)">Software
                Development and Entrepreneurship (Professional Higher Education)</option>
            <option value="Bachelor of Engineering in Computer Science">Bachelor of Engineering in Computer
                Science</option>
            <option value="Bachelor in Computer Engineering">Bachelor in Computer Engineering</option>
            <option value="Others">Others</option>
            </select>
            @error('education')
                <div id="nameHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 col-md-6">
            <label for="address" class="form-label fw-500">Address</label>
            <input type="text" wire:model="address" value="{{ $address }}"
                class="form-control p-2 p-md-3 rounded-0 @error('address') is-invalid @enderror" id="address" />
            @error('address')
                <div id="addressHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div wire:ignore class="mb-3 col-md-6 col-lg-5">
            <label for="skill" class="form-label fw-500">Skill</label>
            <textarea wire:model="skill" class="form-control p-2 p-md-3 rounded-0 @error('skill') is-invalid @enderror"
                id="skill" cols="30" rows="3">
                {{ $skill }}</textarea>
            @error('skill')
                <div id="skillHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div wire:ignore class="mb-3 col-md-6 col-lg-7">
            <label for="about" class="form-label fw-500">About</label>
            <textarea wire:model="about" class="form-control p-2 p-md-3 rounded-0 @error('about') is-invalid @enderror"
                id="about" cols="30" rows="5">
                {{ $about }}</textarea>
            @error('about')
                <div id="aboutHelp" class="form-text text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="btn btn-danger btn-lg px-5 mb-3 rounded-0">Update General Settings</button>
        </div>
    </form>
</div>

@section('scripts')
    <script>
        function forSkillDescription() {
            ClassicEditor
                .create(document.querySelector('#skill'), {
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
                        @this.set('skill', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }
        forSkillDescription();

        function forAboutDescription() {
            ClassicEditor
                .create(document.querySelector('#about'), {
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
                        @this.set('about', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }
        forAboutDescription();
    </script>
@stop
