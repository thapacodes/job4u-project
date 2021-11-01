@extends('layouts.admin')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    <div class="container-fluid">
        <div class="mt-3">
            @if (Auth::user()['role'] == 'admin')
                @php
                    $userCount = \App\Models\User::count();
                    $jobCount = \App\Models\Job::count();
                    $applyForJobCount = \App\Models\ApplyForJob::count();
                    $newsLettersCount = \App\Models\NewsLetters::count();
                    $blogCount = \App\Models\Blog::count();
                    $companyCount = \App\Models\Company::count();
                    $faqCount = \App\Models\FAQ::count();
                    $learningPortalCount = \App\Models\LearningPortal::count();
                    $pageCount = \App\Models\Page::count();
                    $contactCount = \App\Models\Contact::count();
                @endphp
                <h3 class="mb-3">Dashboard</h3>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="{{ env('APP_URL') }}/dashboard/manage-user">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Users
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $userCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Job Added
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $jobCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Job Applied For
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $applyForJobCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    NewsLetters
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $newsLettersCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Blog Added
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $blogCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Company
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $companyCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    FAQ Added
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $faqCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Contact
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $contactCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Other Page
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $pageCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 my-3">
                        <a class="card rounded-0 border-2 text-decoration-none text-dark" href="#">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div class="position-relative">
                                    Learning Portal
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                      {{ $learningPortalCount }}
                                    </span>
                                </div>
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 0V2H11.59L0 13.59L1.41 15L13 3.41V10H15V0H5Z" fill="black" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            @elseif (Auth::user()['role'] == 'employeer')
                <h3 class="mb-3">Employer's Dashboard</h3>
            @elseif (Auth::user()['role'] == 'job-seeker')
                <h3 class="mb-3">Job Seeker's Dashboard</h3>
            @endif
        </div>
    </div>
@stop
