<section class="container-fluid">
    <div>
        <h3>Manage Job Post</h3>
        <div class="mt-3">
            <div class="input-group input-group-lg">
                <span class="input-group-text rounded-0 bg-transparent p-0" id="search_page">
                    <select wire:model="what_search" class="form-select rounded-0 m-0 w-100 h-100">
                        <option value="title"">Title</option>
                        <option value="category">Category</option>
                        <option value="fully_remote">Fully Remote</option>
                        <option value="work_region">Work Region</option>
                        <option value="salary">Salary</option>
                        <option value="experience">Experience</option>
                        <option value="education">Education</option>
                        <option value="status">Status</option>
                    </select>
                </span>
                <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                    aria-label="Page search input" aria-describedby="search_page"
                    placeholder="Search Data">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Fully Remote</th>
                        <th scope="col">Work Region</th>
                        <th scope="col">Salary (in Rs)</th>
                        <th scope="col">Experience</th>
                        <th scope="col">Education</th>
                        <th scope="col">Uploaded By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @if (session()->has('page-message'))
                            <div class="alert alert-danger rounded-0 alert-dismissible fade show mt-3" role="alert">
                                {{ session('page-message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div>
                        @if (session()->has('approve-message'))
                            <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                                {{ session('approve-message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    @if (count($pageArray) > 0)
                        @foreach ($pageArray as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->category }}</td>
                                <td>{{ $page->fully_remote }}</td>
                                <td>{{ $page->work_region }}</td>
                                <td>{{ $page->salary }}</td>
                                <td>{!! $page->experience !!}</td>
                                <td>{!! $page->education !!}</td>
                                <td>{{ $page->uploaded_by }}</td>
                                <td>{{ $page->status }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger btn-sm"
                                        wire:click="delete({{ $page->id }})">Delete</button>
                                        <button type="button" class="btn btn-danger btn-sm"
                                        wire:click="approve({{ $page->id }})">Delete</button>
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
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                            <td>Empty</td>
                        </tr>
                    @endif
                </tbody>
                <div class="mt-3 d-flex justify-content-start">
                    {{ $pageArray->links('components.general.pagination') }}
                </div>
            </table>
        </div>
    </div>
    <br>
    <br>
</section>
