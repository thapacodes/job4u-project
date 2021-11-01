<nav class="bg-light d-flex align-items-center" style="height: 59px;">
    <div class="container-fluid">
        <div class="d-flex w-100 justify-content-between justify-content-lg-end">
            <button class="btn btn-danger rounded-0 d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 16.8333H21M1 1H21H1ZM1 8.91667H21H1Z" stroke="white" stroke-width="2"
                        stroke-miterlimit="10" stroke-linecap="round" />
                </svg>
            </button>
            <div class="dropdown">
                <button class="btn btn-danger rounded-0 dropdown-toggle d-flex align-items-center" type="button"
                    id="admin-user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    @if (Auth::user()['avater'] == null || Auth::user()['avater'] == '')
                        <svg class="me-2" width="14" height="14" viewBox="0 0 22 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.3714 5.76904C15.1766 8.39549 13.1856 10.5381 10.9998 10.5381C8.81394 10.5381 6.81939 8.39598 6.62813 5.76904C6.42942 3.03678 8.36685 1 10.9998 1C13.6327 1 15.5701 3.08645 15.3714 5.76904Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.9998 13.7174C6.67781 13.7174 2.29129 16.1019 1.47956 20.6027C1.3817 21.1452 1.6887 21.6658 2.25652 21.6658H19.743C20.3113 21.6658 20.6183 21.1452 20.5204 20.6027C19.7082 16.1019 15.3217 13.7174 10.9998 13.7174Z"
                                stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                        </svg>
                    @else
                        <img width="14" height="14" class="rounded-circle" src="{{ Auth::user()['avater'] }}" alt="profile image" aria-placeholder="profile image" />
                    @endif
                    <span>{{ explode(' ', Auth::user()['name'])[0] }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="admin-user-dropdown">
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/dashboard/settings">User Settings</a></li>
                    <li><a class="dropdown-item" href="{{ env('APP_URL') }}/post-a-job">Post a Job</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="dropdown-item">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
            etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</div>
