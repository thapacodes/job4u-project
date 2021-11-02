@extends('layouts.admin')
@section('title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@if (Auth::user())
    @if (Request::path())
        @php
            $page_job = explode('dashboard/job/', Request::path());
            $user_id = Auth::user()['id'];
            $name = Auth::user()['name'];
            $email = Auth::user()['email'];
            $contact = Auth::user()['contact'];
            $role = Auth::user()['role'];
            $skill = Auth::user()['skill'];
            $education = Auth::user()['education'];
            $address = Auth::user()['address'];
            $about = Auth::user()['about'];
        @endphp
        @if (count($page_job) >= 2)
            @php
                $link_1 = 'job';
                $link_1_url = '';
                $link_2 = \App\Models\Job::where('id', $page_job[1])->first()->title.' (Job Title)';
                $email = Auth::user()['email'];
                $user_id = Auth::user()['id'];
            @endphp
            @section('content')
            <br>
                <livewire:bread-crumb-dashboard-third-level :link_1="$link_1" :link_1_url="$link_1_url" :link_2="$link_2" />
                <livewire:manage-job-applicants :jobid="$page_job[1]" :user_id="$user_id" />
            @stop
        @endif
    @endif
    @if (Auth::user()['role'] == 'employeer')
        @if ($page == 'company-details')
            @php
                $link_1 = 'Company Details';
                $email = Auth::user()['email'];
                $user_id = Auth::user()['id'];
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:add-company-details :email="$email" :user_id="$user_id" />
            @stop
        @elseif($page == 'post-a-job')
            @php
                $link_1 = 'Post a Job';
                $email = Auth::user()['email'];
                $user_id = Auth::user()['id'];
            @endphp
            @section('content')
                <br>
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:post-a-job-form :email="$email" />
            @stop
        @endif
    @endif
@else
    <script>
        window.location = "{{ route('login') }}";
    </script>
@endif
@section('scripts')
@stop
