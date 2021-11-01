<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="input-group input-group-lg">
                    <span class="input-group-text rounded-0 bg-transparent p-0" id="search_page">
                        <label for="job_category"
                            class="form-label d-flex align-items-center m-0 mt-3 fw-500 visually-hidden">
                            Choose Category
                        </label>
                        <select id="job_category" wire:model="category" class="form-control form-control-lg rounded-0 fw-700">
                            <option value="">All Categories</option>
                            <option value="Day in a life">Day in a life</option>
                            <option value="Hiring">Hiring</option>
                            <option value="Job hunting">Job hunting</option>
                            <option value="Working">Working</option>
                            <option value="Job4u news">Job4u news</option>
                            <option value="Events">Events</option>
                            <option value="Reports">Reports</option>
                            <option value="Resources">Resources</option>
                            <option value="Design">Design</option>
                            <option value="Development">Development</option>
                            <option value="Tutorial">Tutorial</option>
                            <option value="Guide">Guide</option>
                            <option value="others">Others</option>
                        </select>
                    </span>
                    <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                        aria-label="Page search input" aria-describedby="search_page"
                        placeholder="Search for post titles . . .">
                </div>
            </div>
        </div>
        @if (count($pageArray) > 0)
            <div class="row mt-4">
                @foreach ($pageArray as $page)
                    <div class="col-lg-4 col-md-6 my-3">
                        <a href="{{ env('APP_URL') }}/blog/{{ $page->slug }}"
                            class="card text-decoration-none text-dark rounded-0">
                            <img src="{{ $page->thumbnail }}" alt="blog thumbnail" />
                            <div class="card-body">
                                <h3 class="h3">{{ $page->title }}</h3>
                                <div class="d-flex align-items-center">
                                    <p class="m-0 my-3 fw-500 me-3">
                                        {{ \Carbon\Carbon::parse($page->created_at)->format('M d Y') }}</p>
                                    <p class="badge bg-danger">{{ $page->category }}</p>
                                </div>
                                <p class="m-0 text-ellipses">
                                    {{ $page->description }}
                                </p>
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
            <div class="card mt-5">
                <div class="card-body">
                    <p class="m-0 fs-20 fw-500 text-dark">No result found</p>
                </div>
            </div>
        @endif
    </div>
</section>
