@extends('layouts.web')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    <section class="position-relative">
        <img class="w-100 h-400 object-fit-cover" src="{{ asset('image/hero.png') }}" alt="hero section image" />
        <div class="position-absolute top-50 start-50 text-center" style="transform: translate(-50%, -50%)">
            <h3 class="mb-3 display-2 fw-700">Job4u</h3>
            <p class="m-0 h5">
                Job4u is a Job board in Nepal. We provide jobs mainly in the field of Technology.
            </p>
            <a href="{{ env('APP_URL') }}/post-a-job" class="btn btn-danger btn-lg mt-4 rounded-0">Post a Job for Free !</a>
        </div>
    </section>
    <section>
        @php
            $category_1 = 'full-stack-programming';
            $category_2 = 'front-end-programming';
            $category_3 = 'back-end-programming';
            $category_4 = 'design';
        @endphp
        <livewire:job-categories-home :category="$category_1" />
        <livewire:job-categories-home :category="$category_2" />
        <livewire:job-categories-home :category="$category_3" />
        <livewire:job-categories-home :category="$category_4" />
        <div class="pt-5 mt-4">
            <livewire:news-letter />
        </div>
    </section>
@stop
@section('scripts')
@stop