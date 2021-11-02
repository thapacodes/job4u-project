<section class="container-fluid">
    <div>
        <h3>Manage Job Post</h3>
        <div class="mt-3">
            <div class="input-group input-group-lg">
                <span class="input-group-text rounded-0 bg-transparent p-0" id="search_page">
                    <select wire:model="what_search" class="form-select rounded-0 m-0 w-100 h-100">
                        <option value="name"">Name</option>
                        <option value=" email">Email</option>
                        <option value="about">About</option>
                        <option value="experience">Experience</option>
                        <option value="education">Education</option>
                        <option value="skill">Skill</option>
                        <option value="contact">Contact</option>
                        <option value="address">Address</option>
                    </select>
                </span>
                <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                    aria-label="Page search input" aria-describedby="search_page" placeholder="Search Data">
            </div>
        </div>
        <div>
            @if (session()->has('page-message'))
                <div class="alert alert-danger rounded-0 alert-dismissible fade show mt-3" role="alert">
                    {{ session('page-message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div>
            @if (session()->has('approve-message'))
                <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                    {{ session('approve-message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Avater</th>
                        <th scope="col">Resume</th>
                        <th scope="col">About</th>
                        <th scope="col">Education</th>
                        <th scope="col">Experience</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($pageArray) > 0)
                        @foreach ($pageArray as $page)
                            @if (Auth::user()[role] == 'admin')
                                <tr>
                                    <td>{{ $page->name }}</td>
                                    <td>{{ $page->email }}</td>
                                    <td>
                                        @if ($page->avater == null)
                                            <p>N/A</p>
                                        @else
                                            <img width="180" src="{{ $page->avater }}" alt="profile image" />
                                        @endif
                                    </td>
                                    <td>
                                        @if ($page->resume == null)
                                            <p>N/A</p>
                                        @else
                                            <a href="{{ $page->resume }}"
                                                class="btn btn-danger rounded-0">Download</a>
                                        @endif
                                    </td>
                                    <td>{!! $page->about !!}</td>
                                    <td>{!! $page->experience !!}</td>
                                    <td>{!! $page->education !!}</td>
                                    <td>{!! $page->skill !!}</td>
                                    <td>{{ $page->contact }}</td>
                                    <td>{{ $page->address }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger btn-sm"
                                                wire:click="delete({{ $page->id }})">Delete</button>
                                            @if ($page->status == 'approve')
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    wire:click="approved({{ $page->id }})">Reject</button>
                                            @else
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    wire:click="approved({{ $page->id }})">Approve</button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @elseif(Auth::user()[role] == "employeer")
                                @php
                                    $job_uploaded_by = \App\Models\Job::where('id', $page->job_id)->first()->uploaded_by;
                                @endphp
                                @if ($job_uploaded_by == Auth::user()['id'])
                                    <tr>
                                        <td>{{ $page->name }}</td>
                                        <td>{{ $page->email }}</td>
                                        <td>
                                            @if ($page->avater == null)
                                                <p>N/A</p>
                                            @else
                                                <img width="180" src="{{ $page->avater }}" alt="profile image" />
                                            @endif
                                        </td>
                                        <td>
                                            @if ($page->resume == null)
                                                <p>N/A</p>
                                            @else
                                                <a href="{{ $page->resume }}"
                                                    class="btn btn-danger rounded-0">Download</a>
                                            @endif
                                        </td>
                                        <td>{!! $page->about !!}</td>
                                        <td>{!! $page->experience !!}</td>
                                        <td>{!! $page->education !!}</td>
                                        <td>{!! $page->skill !!}</td>
                                        <td>{{ $page->contact }}</td>
                                        <td>{{ $page->address }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    wire:click="delete({{ $page->id }})">Delete</button>
                                                @if ($page->status == 'approve')
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        wire:click="approved({{ $page->id }})">Reject</button>
                                                @else
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        wire:click="approved({{ $page->id }})">Approve</button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endif
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
