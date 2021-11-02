<section class="container-fluid">
    <div>
        <h3>Notification</h3>
        <div class="mt-3">
            <div class="input-group input-group-lg">
                <span class="input-group-text rounded-0 bg-transparent" id="search_page">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11V11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z"
                            fill="black" />
                    </svg>
                </span>
                <input wire:model="search" type="text" class="form-control rounded-0 bg-transparent"
                    aria-label="Page search input" aria-describedby="search_page" placeholder="Search For Messages">
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
        <div class="mt-3">
            @if (count($pageArray) > 0)
                @foreach ($pageArray as $page)
                    <div class="card rounded-0 my-2">
                        <div class="card-body">
                            <p class="m-0 @if($page->status == 'read') text-muted @else fw-700 @endif">
                                <strong>{{ \Carbon\Carbon::parse($page->created_at)->format('d M Y') }} : </strong>
                                {!! $page->message !!}
                            </p>
                            <div class="btn-group mt-2">
                                @if ($page->status == 'read')
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        wire:click="approved({{ $page->id }})">Already Read</button>
                                @else
                                    <button type="button" class="btn btn-primary btn-sm"
                                        wire:click="approved({{ $page->id }})">Mark as Read</button>
                                @endif
                                <button class="btn btn-sm btn-danger" wire:click="delete({{ $page->id }})">Delete</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card rounded-0">
                    <div class="card-body">
                        <p class="m-0">
                            No Notification Found
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-start">
        {{ $pageArray->links('components.general.pagination') }}
    </div>
    <br>
    <br>
</section>
