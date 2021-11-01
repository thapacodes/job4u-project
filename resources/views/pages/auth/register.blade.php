@extends('layouts.web')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    @php
    $heading = 'Register Account';
    $paragraph = '';
    $link_1 = 'Register';
    @endphp
    <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
    <livewire:bread-crumb-second-level :link_1="$link_1" />
    <section class="container mt-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-500">Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="form-control p-2 p-md-3 rounded-0 @error('name') is-invalid @enderror" id="name"
                    aria-describedby="emailHelp" required />
                @error('name')
                    <div id="nameHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-500">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-control p-2 p-md-3 rounded-0 @error('email') is-invalid @enderror" id="email"
                    aria-describedby="emailHelp" required autofocus />
                @error('email')
                    <div id="emailHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-500">Password</label>
                <input type="password" name="password"
                    class="form-control p-2 p-md-3 rounded-0 @error('password') is-invalid @enderror" id="password"
                    aria-describedby="passwordHelp" required />
                @error('password')
                    <div id="passwordHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label fw-500">Password Confirmation</label>
                <input type="password" name="password_confirmation"
                    class="form-control p-2 p-md-3 rounded-0 @error('password_confirmation') is-invalid @enderror" id="password"
                    aria-describedby="confirmPasswordHelp" required />
                @error('password_confirmation')
                    <div id="confirmPasswordHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="role" class="form-label fw-500">I am</label>
                    <select name="role" id="role" class="form-control p-2 p-md-3 rounded-0 @error('role') is-invalid @enderror" aria-describedby="roleHelp">
                        <option value="">Choose Your Role</option>
                        <option value="job-seeker">Job Seeker</option>
                        <option value="employeer">Employeer</option>
                    </select>
                @error('role')
                    <div id="roleHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger btn-lg px-5 mt-3 rounded-0">Register</button>
            <div class="mt-4">
                <p class="fw-500 mt-3">Already registered? <a href="{{ env('APP_URL') }}/login" class="text-decoration-none text-danger">Login</a></p>
            </div>
        </form>
    </section>
@stop
