<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="input-group input-group-lg">
                    <span class="input-group-text rounded-0 bg-transparent" id="search_page">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11V11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                                fill="#222" />
                        </svg>

                    </span>
                    <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                        aria-label="Page search input" aria-describedby="search_page"
                        placeholder="Search for Job titles . . .">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="job_category" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Job Category
                </label>
                <select id="job_category" wire:model="category" class="form-control rounded-0">
                    <option value="">Job Category</option>
                    <option value="design">Design</option>
                    <option value="full-stack-programming">Full Stack Programming</option>
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
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="job_type" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Job Type
                </label>
                <select id="job_type" wire:model="type" class="form-control rounded-0">
                    <option value="">Job Type</option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Internship">Internship</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="fully_remote" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Fully Remote
                </label>
                <select id="fully_remote" wire:model="fully_remote" class="form-control rounded-0">
                    <option value="">Remote Job ?</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="work_region" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Work Region
                </label>
                <select id="work_region" wire:model="work_region" class="form-control rounded-0">
                    <option value="">Work Region</option>
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
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="education" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Education Level
                </label>
                <select id="education" wire:model="education_level" class="form-control rounded-0">
                    <option value="">Education level</option>
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
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="experience_level"
                    class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Experience Level
                </label>
                <select id="experience_level" wire:model="experience_level" class="form-control rounded-0">
                    <option value="">Experience Level</option>
                    <option value="Entry Level">Entry Level</option>
                    <option value="Mid Level">Mid Level</option>
                    <option value="Senior Level">Senior Level</option>
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <label for="salary" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Salary Estimate
                </label>
                <select id="salary" wire:model="salary" class="form-control rounded-0">
                    <option value="">Salary Estimate</option>
                    <option value="30000">> 30,000</option>
                    <option value="60000">> 60,000</option>
                    <option value="120000">> 1,20,000</option>
                    <option value="240000">> 2,40,000</option>
                </select>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="posted_at" class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                    Posted At
                </label>
                <select id="posted_at" wire:model="posted_at" class="form-control rounded-0">
                    <option value="">Posted At</option>
                    <option value="0">Last 24 hours</option>
                    <option value="3">Last 3 days</option>
                    <option value="7">Last 7 days</option>
                    <option value="14">Last 14 days</option>
                </select>
            </div>
        </div>
        <div>
            {{-- <h2>Job Category Name</h2> --}}
            @if (count($pageArray) > 0)
                <div class="row">
                    <!-- Display Searched Content Here! -->
                    @foreach ($pageArray as $page)
                        <div class="col-12 my-4">
                            <a class="card rounded-0 position-relative text-decoration-none text-black"
                                href="{{ env('APP_URL') }}/job/{{ $page->slug }}">
                                <div class="card-body px-4">
                                    <div class="row align-items-center">
                                        @php
                                            $company = \App\Models\Company::where('uploaded_by', $page->uploaded_by)->first();
                                        @endphp
                                        <div class="col-lg-3" style="width:130px;">
                                            @if ($company == null)
                                                <div style="width:100px; height:100px;"
                                                    class="d-flex justify-content-center align-items-center border border-2 rounded-circle">
                                                    <p class="m-0 p-0 text-muted">N/A</p>
                                                </div>
                                            @else
                                                <img class="border border-secondary border-2 rounded-circle"
                                                    style="width:100px; height: 100px; object-fit: cover"
                                                    src="{{ $company->logo }}" alt="company logo" />
                                            @endif
                                        </div>

                                        <div class="col-lg-5 mt-3 mt-lg-0">
                                            @if ($company == null)
                                                <p class="m-0 text-danger">N/a</p>
                                            @else
                                                <p class="m-0 text-danger">{{ $company->name }}</p>
                                            @endif
                                            <h3 class="my-3">{{ $page->title }}</h3>
                                            <p class="m-0 text-ellipses">{{ $page->description }}</p>
                                            <div class="mt-2">
                                                @if ($page->work_region == null)
                                                    <p class="m-0">Work place ( Not specified )</p>
                                                @else
                                                    <p class="m-0 badge rounded-pill bg-danger" title="work region">
                                                        {{ $page->work_region }}</p>
                                                @endif

                                                @if ($page->fully_remote == 'no')
                                                    <p class="m-0 badge rounded-pill bg-danger">Not Remote</p>
                                                @else
                                                    <p class="m-0 badge rounded-pill bg-success" title="work region">
                                                        Fully Remote</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mt-3 mt-lg-0">
                                            <p class="m-0 fw-500 fs-10 text-danger">Job Category</p>
                                            <p class="m-0 fw-500 fs-20">
                                                {{ $page->category }}
                                            </p>
                                        </div>
                                        <div class="col-lg-2 mt-3 mt-lg-0">
                                            <p class="m-0 fw-500 fs-10 text-danger">Job Type</p>
                                            <p class="m-0 fw-500 fs-20">
                                                {{ $page->type }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer px-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <p class="m-0">Posted at :
                                                <strong>{{ \Carbon\Carbon::parse($page->created_at)->format('d M Y') }}</strong>
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="m-0">Education :
                                                <strong>{{ $page->education }}</strong>
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="m-0">Experience :
                                                <strong>{{ $page->experience }}</strong>
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <p class="m-0">Salary Estimate :<br /> <strong>Rs.
                                                {{ number_format($page->salary) }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12">
                        <div>
                            {{ $pageArray->links('components.general.pagination') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="m-0 fs-20 fw-500 text-dark">No result found</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
