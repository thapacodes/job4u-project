@extends('layouts.web')
@section('title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@if (Request::path())
    @php
        $page = explode('/', Request::path())[0];
    @endphp
    @if ($page == 'newsletter')
        @php
            $heading = 'Newsletter';
            $paragraph = '';
            $link_1 = 'Newsletter';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:news-letter />
        @stop
    @elseif($page == 'blog')
        @php
            $heading = 'Announcing: Job4u Learning Portal';
            $paragraph = 'A collection of free resources that\'s designed to help you land a job faster and grow in your dream career.';
            $link_1 = 'Blog';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:blog-post-card />
        @stop
    @elseif($page == 'post-a-job')
        @php
            $heading = 'Reach large community through web';
            $link_1 = 'Post a Job';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            @if (Auth::user())
                @php
                    $user_email = Auth::user()['email'];
                @endphp
                @if (Auth::user()['role'] == 'employeer')
                    <livewire:post-a-job-form :user_email="$user_email" />
                @else
                    <section class="container mb-5">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <h3>Only Employeer can post job listing</h3>
                                <p class="m-0 text-danger fs-20 fw-500 mb-3">Try again after registering as employeer</p>
                                <div class="btn-group">
                                    <a href="{{ env('APP_URL') }}" class="btn btn-dark">Go Back To Home</a>
                                    <a href="{{ route('register') }}" class="btn btn-danger">Register as Employeer</a>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @else
                <section class="container mb-5">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <h3>You must login in order to post a job</h3>
                            <p class="m-0 text-muted fs-20 fw-500 mb-3">Don't have an account ? <a
                                    href="{{ env('APP_URL') }}/register"
                                    class="text-danger text-decoration-none">Register</a></p>
                            <div class="btn-group">
                                <a href="{{ route('login') }}" class="btn btn-danger">Login First</a>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <livewire:news-letter />
        @stop
    @elseif($page == 'why-choose-job4u')
        @php
            $heading = 'Why Choose Us ?';
            $link_1 = 'Why choose job4u';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:why-choose-job4u />
            <livewire:news-letter />
        @stop
    @elseif($page == 'job4u-faq')
        @php
            $heading = 'Frequently Asked Questions';
            $paragraph = 'Have questions about Job4u? We\'ve got answers.';
            $link_1 = 'job4u-faq';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:job4u-faq />
        @stop
    @elseif($page == 'search')
        @php
            $heading = 'Search For Job Listing';
            $paragraph = '';
            $link_1 = 'Search';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:advance-search />
        @stop
    @elseif($page == 'job')
        @php
            $heading = 'Browse Job Listing';
            $paragraph = '';
            $link_1 = 'Job';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:job-listing />
        @stop
    @elseif($page == 'all-companies')
        @php
            $heading = 'Company Listing';
            $paragraph = '';
            $link_1 = 'All Companies';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:all-companies-filter />
        @stop
    @elseif($page == 'contact')
        @php
            $heading = 'Have Any Questions ?';
            $paragraph = 'Then you can contact us.';
            $link_1 = 'Contact';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:contact-form />
        @stop
    @elseif($page == 'learning-portal')
        @php
            $heading = 'Job4u Learning Portal';
            $paragraph = '';
            $link_1 = 'Learning Portal';
        @endphp
        @section('content')
            <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
            <livewire:bread-crumb-second-level :link_1="$link_1" />
            <livewire:learning-portal-page />
        @stop
    @endif

@endif
@section('scripts')
@stop
