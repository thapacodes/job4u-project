@extends('layouts.web')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    @php
    $heading = 'Reset Password';
    $paragraph = '';
    $link_1 = 'Reset Password';
    @endphp
    <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
    <livewire:bread-crumb-second-level :link_1="$link_1" />
    <section class="container pb-5">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ request()->token }}">

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="form-control p-2 p-md-3 @error('email') is-invalid @enderror" id="email"
                    aria-describedby="emailHelp" required autofocus />
                @error('email')
                    <div id="emailHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"
                    class="form-control p-2 p-md-3 @error('password') is-invalid @enderror" id="password"
                    aria-describedby="passwordHelp" required autocomplete="current-password" />
                @error('password')
                    <div id="passwordHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password</label>
                <input type="password" name="password_confirmation"
                    class="form-control p-2 p-md-3 @error('password_confirmation') is-invalid @enderror" id="password"
                    aria-describedby="confirmPasswordHelp" required" />
                @error('password_confirmation')
                    <div id="confirmPasswordHelp" class="form-text text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-danger btn-lg px-5 mb-3">Reset Password</button>
        </form>
    </section>
@stop
