<section>
    <div>
        <h3>Job Applied For</h3>
        <div>
            @if (session()->has('page-message'))
                <div class="alert alert-danger rounded-0 alert-dismissible fade show mt-3" role="alert">
                    {{ session('page-message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    @if (count($pageArray) > 0)
        <div class="row">
            <!-- Display Searched Content Here! -->
            @foreach ($pageArray as $page)
                @if($page->status == 'approve')
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
                                        <div style="width:100px; height:100px;" class="d-flex justify-content-center align-items-center border border-2 rounded-circle">
                                            <p class="m-0 p-0 text-muted">N/A</p>
                                        </div>
                                        @else
                                            <img class="border border-secondary border-2 rounded-circle"
                                            style="width:100px; height: 100px; object-fit: cover" src="{{ $company->logo }}"
                                            alt="company logo" />
                                        @endif
                                    </div>
                                    <div class="col-lg-5 mt-3 mt-lg-0">
                                        @if ($company == null)
                                            <p class="m-0 text-danger">N/a</p>
                                        @else
                                            <p class="m-0 text-danger">{{ $company->name }}</p>
                                        @endif
                                        <h3 class="my-3">{{ $page->job_title }}</h3>
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
                                                <p class="m-0 badge rounded-pill bg-success" title="work region">Fully
                                                    Remote</p>
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
                                        <p class="m-0">Applied at :
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
                                                {{ $page->salary }}</strong></p>
                                    </div>
                                    <div class="col-lg-3">
                                        <p class="m-0">Status :<br /> <strong>
                                                {{ $page->status }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
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
                <p class="m-0 fs-20 fw-500 text-dark">You have yet to apply for any job post</p>
            </div>
        </div>
    @endif

    <div class="mt-3 d-flex justify-content-start">
        {{ $pageArray->links('components.general.pagination') }}
    </div>
    <br>
    <br>
</section>
