@extends('layouts.web')
@section('title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@if (Request::path())
    @php
        $url = explode('/', Request::path());
    @endphp
    @if (count($url) == 2)
        @if ($url[0] == 'job')
            @php
                $page = $url[1];
                $data = \App\Models\Job::where('slug', $page)->get();
                $heading = $data[0]->title;
                $paragraph = '';
                $link_1 = 'Newsletter';
                $link_2 = 'Newsletter';
                $company = \App\Models\Company::where('uploaded_by', $data[0]->uploaded_by)->first();
                $category = $data[0]->category;
                if(Auth::user()) {
                    $userid = Auth::user()['id'];
                    $name = Auth::user()['name'];
                    $email = Auth::user()['email'];
                    $avater = Auth::user()['avater'];
                    $resume = Auth::user()['resume'];
                    $about = Auth::user()['about'];
                    $education = Auth::user()['education'];
                    $experience = Auth::user()['experience'];
                    $skill = Auth::user()['skill'];
                    $contact = Auth::user()['contact'];
                    $address = Auth::user()['address'];
                }
                else {
                    $userid = 'none';
                }
            @endphp
            @section('content')
                <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
                <div class="container">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark text-decoration-none fw-500"
                                    href="{{ env('APP_URL') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark text-decoration-none fw-500"
                                    href="{{ env('APP_URL') }}/job">Job</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $heading }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card rounded-0 mb-5">
                                <div class="card-body">
                                    @if ($company == null)
                                        <a href="#"
                                            class="text-decoration-none text-danger fs-20 fw-500">N/a</a>
                                    @else
                                        <a href="{{ env('APP_URL') }}/company/{{ $company->slug }}"
                                            class="text-decoration-none text-danger fs-20 fw-500">{{ $company->name }}</a>
                                    @endif
                                    <h2>{{ $data[0]->title }}</h2>
                                    <div>
                                        <p class="badge rounded-pill bg-danger">{{ $data[0]->work_region }}</p>
                                        @if ($data[0]->fully_remote == 'no')
                                            <p class="badge rounded-pill bg-danger">Not remote</p>
                                        @else
                                            <p class="badge rounded-pill bg-danger">Fully remote</p>
                                        @endif
                                        <p class="badge rounded-pill bg-white text-dark">
                                            {{ \Carbon\Carbon::parse($data[0]->created_at)->format('d M Y') }}
                                        </p>
                                    </div>
                                    @if ($company != null)
                                    <div class="mt-3">
                                        <img class="w-100" style="max-height: 270px; object-fit:cover;"
                                            src="{{ $company->logo }}" alt="company logo">
                                    </div>
                                    @endif
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <h3>Education Level</h3>
                                                <p class="fw-500 text-dark">{{ $data[0]->education }}</p>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h3>Experience Level</h3>
                                                <p class="fw-500 text-dark">{{ $data[0]->experience }}</p>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h3>Job Type</h3>
                                                <p class="fw-500 text-dark">{{ $data[0]->type }}</p>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h3>Salary Estimate</h3>
                                                <p class="fw-500 text-dark">Rs. {{ number_format($data[0]->salary) }}</p>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <h3>Remote Job ?</h3>
                                                @if ($data[0]->fully_remote == 'no')
                                                    <p class="fw-500 text-dark">{{ $data[0]->fully_remote }},</p>
                                                    <p class="fw-500 text-dark">Work Region <br /><span
                                                            class="text-danger">{{ $data[0]->work_region }}</span></p>
                                                @else
                                                    <p class="fw-500 text-dark">{{ $data[0]->fully_remote }}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <h3>Job Description</h3>
                                            <p class="fw-500 text-dark">{{ $data[0]->description }}</p>
                                        </div>
                                        <div x-data="{ open: false }">
                                            <div class="mt-3">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger rounded-0" @click="open = true">
                                                    Apply For Job
                                                </button>
                                            </div>
                                            <div x-cloak x-show="open">
                                                <livewire:apply-for-jobs 
                                                    :title="$data[0]->title" 
                                                    :jobid="$data[0]->id" 
                                                    :userid="$userid" 
                                                    :email="$email"
                                                    :name="$name"
                                                    :avater="$avater"
                                                    :resume="$resume"
                                                    :about="$about"
                                                    :education="$education"
                                                    :experience="$experience"
                                                    :skill="$skill"
                                                    :contact="$contact"
                                                    :address="$address" 
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <livewire:news-letter />
                        </div>
                    </div>
                    <div>
                        <livewire:related-job :category="$category" />
                    </div>
                </div>

            @stop
        @elseif ($url[0] == 'blog')
            @php
                $page = $url[1];
                $data = \App\Models\Blog::where('slug', $page)->get();
                $postCategory = $data[0]->category;
            @endphp
            @section('content')
                <div class="container mt-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark text-decoration-none fw-500"
                                    href="{{ env('APP_URL') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark text-decoration-none fw-500"
                                    href="{{ env('APP_URL') }}/blog">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data[0]->title }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card rounded-0 mb-5">
                                <div class="card-body">
                                    <div>
                                        <img class="w-100" style="max-height: 270px; object-fit:cover;"
                                            src="{{ $data[0]->thumbnail }}" alt="blog post thumbnail">
                                    </div>
                                    <div>
                                        <h3 class="h3">{{ $data[0]->title }}</h3>
                                        <div class="d-flex align-items-center">
                                            <p class="m-0 my-3 fw-500 me-3">
                                                {{ \Carbon\Carbon::parse($data[0]->created_at)->format('M d Y') }}</p>
                                            <p class="badge bg-danger">{{ $data[0]->category }}</p>
                                        </div>
                                        <div class="m-0">
                                            {{ $data[0]->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <livewire:related-blog-post :category="$postCategory" />
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <livewire:news-letter />
                        </div>
                    </div>
                </div>
            @stop
        @elseif ($url[0] == 'company')
            @php
                $page = $url[1];
                $data = \App\Models\Company::where('slug', $page)->get();
            @endphp
            @section('content')
                <div class="container mt-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark text-decoration-none fw-500"
                                    href="{{ env('APP_URL') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark text-decoration-none fw-500"
                                    href="{{ env('APP_URL') }}/all-companies">Company</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data[0]->name }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="container">
                    <div class="card rounded-0 mb-5">
                        <div class="card-body">
                            <div>
                                <img class="w-50" style="max-height: 270px; object-fit:cover;"
                                    src="{{ $data[0]->logo }}" alt="blog post thumbnail">
                            </div>
                            <div>
                                <h3 class="h3 mt-4">{{ $data[0]->name }}</h3>
                                <div class="d-flex align-items-center">
                                    <p class="m-0 my-1 fw-500 me-3">
                                        {{ \Carbon\Carbon::parse($data[0]->created_at)->format('M d Y') }}</p>
                                    <p class="badge bg-danger">{{ $data[0]->hq }}</p>
                                </div>
                                <div class="m-0 mt-3">
                                    {{ $data[0]->description }}
                                </div>
                                <div>
                                    <a href="{{ $data[0]->url }}" class="btn btn-danger rounded-0 btn-sm mt-3">Visit Company Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <livewire:news-letter />
            @stop
        @else
            <script>
                window.location = "{{ route('home') }}";
            </script>
        @endif
    @endif

@endif
@section('scripts')
@stop
