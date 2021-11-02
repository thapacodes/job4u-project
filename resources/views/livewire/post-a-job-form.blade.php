<section class="container pb-5">
    <form class="card" wire:submit.prevent="save">
        <div class="card-body p-lg-5">
            <div class="mb-3">
                @if (session()->has('page-message'))
                    <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                        {{ session('page-message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-12">
                    <h3 class="h3 text-danger fw-700">Company Details</h3>
                    <p class="m-0 fs-20 fw-500">
                        Your company details will be automatically pulled from your profile.
                    </p>
                </div>
            </div>
            <div class="mb-5 mt-3">
                <a type="button" class="btn btn-danger rounded-0" href="{{ env('APP_URL') }}/dashboard/update-company-profile">
                    Edit Company Details
                </a>
            </div>

            <div class="row align-items-center mb-4">
                <div class="col-lg-7">
                    <h3 class="h3 text-danger fw-700">Tell us about the position</h3>
                </div>
                <div class="col-lg-5">
                    <p class="d-flex align-items-center m-0 w-100 justify-content-end">
                        <span class="me-2 fw-500">REQUIRED FIELDS</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </p>
                </div>
            </div>
            <div class="mb-3">
                <label for="job-title" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Job Title</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="text" wire:model="title"
                    class="form-control form-control-lg rounded-0 @error('title') is-invalid @enderror" id="job-title"
                    placeholder="Example: 'Senior Designer'. Titles must describe one position.">
                @error('title')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="job_category" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Category</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <select id="job_category" wire:model="category"
                        class="form-control form-control-lg rounded-0 @error('category') is-invalid @enderror">
                        <option value="">Choose</option>
                        <option value="design">Design</option>
                        <option value="full-stack-programmin">Full Stack Programming</option>
                        <option value="front-end-programming">Front End Programming</option>
                        <option value="back-end-programming">Back End Programming</option>
                        <option value="game-dev">Game Dev</option>
                        <option value="app-dev">App Dev</option>
                        <option value="customer-support">Customer Support</option>
                        <option value="devops-and-sysadmin">Devops and Sysadmin</option>
                        <option value="sales-and-marketing">Sales and Marketing</option>
                        <option value="management-and-finance">Management and Finance</option>
                        <option value="product">Product</option>
                        <option value="others">Others</option>
                    </select>
                    @error('category')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="job_types" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Job Types</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <select id="job_types" wire:model="type"
                        class="form-control form-control-lg rounded-0 @error('type') is-invalid @enderror">
                        <option value="">Choose</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                        <option value="others">Others</option>
                    </select>
                    @error('type')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="salary" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">salary Estimation</span>
                    </label>
                    <input type="number" wire:model="salary"
                        class="form-control form-control-lg rounded-0 @error('salary') is-invalid @enderror" id="salary"
                        placeholder="When left empty will be consiter negotiable" />
                    @error('salary')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="experience_level" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Experience Level</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <select id="experience_level" wire:model="experience_level"
                        class="form-control form-control-lg rounded-0 @error('experience_level') is-invalid @enderror">
                        <option value="">Choose</option>
                        <option value="Entry Level">Entry Level</option>
                        <option value="Mid Level">Mid Level</option>
                        <option value="Senior Level">Senior Level</option>
                    </select>
                    @error('experience_level')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Education</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </div>
                <select id="education_level" wire:model="education_level"
                    class="form-control form-control-lg rounded-0 @error('education_level') is-invalid @enderror">
                    <option value="choose">Choose</option>
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
                    <option value="Not Required">Not Required</option>
                </select>
                @error('education_level')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <div class="d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Is This Role Full Remote ?</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </div>
                <p class="m-0 text-muted mb-3 fs-15">
                    Fully remote means your future hire can work anywhere in the world without any location or time zone
                    restrictions!
                </p>
                <select id="fully_remote" wire:model="fully_remote"
                    class="form-control form-control-lg rounded-0 @error('fully_remote') is-invalid @enderror">
                    <option value="choose">Choose</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                @error('fully_remote')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="job_region" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Region( if not remote )</span>
                </label>
                <select id="job_region" wire:model="work_region"
                    class="form-control form-control-lg rounded-0 @error('work_region') is-invalid @enderror">
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
                    <option value="Other">Other ( Do not specify )</option>
                </select>
                @error('work_region')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>

            <div wire:ignore class="mb-3">
                <label for="job_description" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Job Description</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <textarea wire:model="job_description" class="form-control form-control-lg rounded-0 @error('job_description') is-invalid @enderror"
                    id="job_description" cols="30" rows="5">
                    {{ $job_description }}</textarea>
                @error('job_description')
                    <div id="companyDescriptionHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-danger btn-lg rounded-0">Post Job</button>
            </div>
        </div>
    </form>
</section>

@section('scripts')
<script>
    function forJobDescription() {
        ClassicEditor
            .create(document.querySelector('#job_description'), {
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
    forJobDescription();
</script>
@stop
