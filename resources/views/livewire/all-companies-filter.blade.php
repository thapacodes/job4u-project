<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="input-group input-group-lg">
                    <span class="input-group-text rounded-0 bg-transparent" id="search_page">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11V11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                                fill="#222" />
                        </svg>

                    </span>
                    <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                        aria-label="Page search input" aria-describedby="search_page"
                        placeholder="Search for Company name . . .">
                </div>
            </div>
        </div>
        <div>
            {{-- <h2>Job Category Name</h2> --}}
            @if (count($pageArray) > 0)
                <div class="row">
                    <!-- Display Searched Content Here! -->
                    @foreach ($pageArray as $page)
                        <div class="col-12 my-4">
                            <a class="card px-4 rounded-0 position-relative text-decoration-none text-black"
                                href="{{ env('APP_URL') }}/company/{{ $page->slug }}">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3" style="width:130px;">
                                            <img class="border border-secondary border-2 rounded-1"
                                                style="width:100px; height: 100px; object-fit: cover"
                                                src="{{ $page->logo }}" alt="company logo" />
                                        </div>

                                        <div class="col-lg-8 mt-3 mt-lg-0">
                                            <p class="m-0 text-danger">{{ $page->name }}</p>
                                            <h3 class="my-3">{{ $page->title }}</h3>
                                            <p class="m-0 text-ellipses">{{ $page->description }}</p>
                                            <div class="mt-2">
                                                <p class="badge bg-success">Location : {{ $page->hq }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12">
                        <div>
                            {{ $pageArray->links('components.general.pagination') }}
                        </div>
                    </div>
                </div>
            @else
                <div class="card mt-4">
                    <div class="card-body">
                        <p class="m-0 fs-20 fw-500 text-dark">No result found</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
