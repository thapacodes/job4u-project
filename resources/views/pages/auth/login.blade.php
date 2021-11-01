@extends('layouts.web')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    @php
    $heading = 'Login';
    $paragraph = '';
    $link_1 = 'Login';
    @endphp
    <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
    <livewire:bread-crumb-second-level :link_1="$link_1" />
    <section class="container mt-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
                    aria-describedby="passwordHelp" required autocomplete="current-password" />
                @error('password')
                    <div id="passwordHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input rounded-0" id="remember_me" />
                <label class="form-check-label fw-500" for="remember_me">Remember me</label>
            </div>
            <button type="submit" class="btn btn-danger btn-lg px-5 mb-3 rounded-0">Login</button>
            <div>
                @if (Route::has('forgot-password'))
                    <a class="text-decoration-none fs-15 fw-500 text-danger" href="{{ route('forgot-password') }}">
                        Forgot Your Password ?
                    </a>
                @endif
            </div>
            <div>
                <p class="fw-500 mt-3">Don't have an account? <a href="{{ env('APP_URL') }}/register" class="text-decoration-none text-danger">Register</a></p>
            </div>
        </form>
    </section>
@stop
