<section class="position-relative pb-5">
    <img class="w-100 h-400 object-fit-cover" src="{{ asset('image/hero.png') }}" alt="hero section image" />
    <div class="position-absolute top-50 start-50 text-center" style="transform: translate(-50%, -50%)">
        <h3 class="mb-3 display-2 fw-700">{{ $heading }}</h3>
        <p class="m-0 h5">
            {{ $paragraph }}
        </p>
    </div>
</section>