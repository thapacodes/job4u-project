@extends('layouts.admin')
@section('title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@if (Auth::user())
    @if (Request::path())
        @php
            $page = explode('dashboard/', Request::path())[1];
        @endphp
        @if ($page == 'settings')
            @php
                $link_1 = 'Settings';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:settings-section />
            @stop
        @elseif ($page == 'manage-user')
            @php
                $link_1 = 'Manage User';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-user />
            @stop
        @elseif ($page == 'manage-job-post')
            @php
                $link_1 = 'Manage Job Post';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-job-post />
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
