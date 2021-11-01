<section class="container-fluid">
    <div>
        <h3>Manage Other Pages</h3>
        <div class="mt-3">
            <div class="input-group input-group-lg">
                <span class="input-group-text rounded-0 bg-transparent p-0" id="search_page">
                    <select wire:model="what_search" class="form-select rounded-0 m-0 w-100 h-100">
                        <option value="title">Title</option>
                        <option value="type">Type</option>
                        <option value="description">Description</option>
                    </select>
                </span>
                <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                    aria-label="Page search input" aria-describedby="search_page"
                    placeholder="Search Data">
            </div>
        </div>
        <div>
            @if (session()->has('page-message'))
                <div class="alert alert-danger rounded-0 alert-dismissible fade show mt-3" role="alert">
                    {{ session('page-message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($pageArray) > 0)
                        @foreach ($pageArray as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->type }}</td>
                                <td>
                                    <p class="text-ellipses m-0 p-0">
                                        {{ $page->description }}
                                    </p>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-sm"
                                        wire:click="delete({{ $page->id }})">Delete</button>
                                        <a href="{{ env('APP_URL') }}/manage-faq/{{ $page->id }}" class="btn btn-secondary btn-sm">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-start">
        {{ $pageArray->links('components.general.pagination') }}
    </div>
    <br>
    <br>
</section>
