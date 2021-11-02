@extends('layouts.admin')
@section('title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@if (Auth::user())
    @if (Request::path())
        @php
            $page = explode('dashboard/', Request::path())[1];
            $user_id = Auth::user()['id'];
            $name = Auth::user()['name'];
            $email = Auth::user()['email'];
            $resume = Auth::user()['resume'];
            $contact = Auth::user()['contact'];
            $role = Auth::user()['role'];
            $skill = Auth::user()['skill'];
            $education = Auth::user()['education'];
            $address = Auth::user()['address'];
            $about = Auth::user()['about'];
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
        @elseif ($page == 'manage-job-newsletters')
            @php
                $link_1 = 'Manage Job NewsLetters';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-newsletters />
            @stop
        @elseif ($page == 'manage-contact')
            @php
                $link_1 = 'Manage Contact';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-contact />
            @stop
        @elseif ($page == 'create-faq')
            @php
                $link_1 = 'Create FAQ';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:create-faq />
            @stop
        @elseif ($page == 'manage-faq')
            @php
                $link_1 = 'Manage FAQ';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-faq />
            @stop
        @elseif ($page == 'create-blog')
            @php
                $link_1 = 'Create Blog';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:create-blog />
            @stop
        @elseif ($page == 'create-blog-post')
            @php
                $link_1 = 'Create Blog Post';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:create-blog />
            @stop
        @elseif ($page == 'manage-blog-post')
            @php
                $link_1 = 'Manage Blog Post';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-blog />
            @stop
        @elseif ($page == 'create-new-page')
            @php
                $link_1 = 'Create New Page';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:create-page />
            @stop
        @elseif ($page == 'manage-pages')
            @php
                $link_1 = 'Manage Other Pages';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-page />
            @stop
        @elseif ($page == 'add-learning-portal')
            @php
                $link_1 = 'Add Learning Portal';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:add-learning-portal />
            @stop
        @elseif ($page == 'manage-learning-portal')
            @php
                $link_1 = 'Manage Learning Portal';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:manage-learning-portal />
            @stop
        @elseif ($page == 'update-company-profile')
            @php
                $link_1 = 'Update Company Profile';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                @php
                    $company = \App\Models\Company::where('id', Auth::user()['id'])->first();
                @endphp
                <livewire:update-company-profile 
                    :user_id="$user_id"
                    :name="$company->name"
                    :hq="$company->hq"
                    :url="$company->url"
                    :description="$company->description" 
                />
            @stop
        @elseif ($page == 'change-password')
            @php
                $link_1 = 'Change Password';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:settings-password-section :user_id="$user_id" />
            @stop
        @elseif ($page == 'update-profile-picture')
            @php
                $link_1 = 'Update Profile Picture';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:change-profile-picture :user_id="$user_id" />
            @stop
        @elseif ($page == 'update-resume')
            @php
                $link_1 = 'Update Resume';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:update-resume :user_id="$user_id" :resume="$resume" />
            @stop
        @elseif ($page == 'update-profile')
            @php
                $link_1 = 'Update Profile Picture';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:settings-general-section :user_id="$user_id" :name="$name" :email="$email" :role="$role"
                    :contact="$contact" :skill="$skill" :education="$education" :about="$about" :address="$address" />
            @stop
        @elseif ($page == 'notification')
            @php
                $link_1 = 'Notification';
            @endphp
            @section('content')
                <br />
                <livewire:bread-crumb-dashboard-second-level :link_1="$link_1" />
                <livewire:notification-card :user_id="$user_id" />
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
