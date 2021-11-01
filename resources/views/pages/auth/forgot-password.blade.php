@extends('layouts.web')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    @php
    $heading = 'Enter Registered Email Address';
    $paragraph = '';
    $link_1 = 'forgot password';
    @endphp
    <livewire:hero-section :heading="$heading" :paragraph="$paragraph" />
    <livewire:bread-crumb-second-level :link_1="$link_1" />
    <section class="container pb-5">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
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
            <button type="submit" class="btn btn-danger btn-lg px-5 mb-3">Login</button>
        </form>
    </section>
@stop
